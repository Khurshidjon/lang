<?php
    namespace App\Http\View\Composers;
    use App\Menu;
    use Illuminate\View\View;

class LayoutComposer
{
    protected $menus;
    public function __construct(Menu $menus)
    {
        $this->menus = $menus;
    }

    public function compose(View $view)
    {
        $menus = Menu::where('status', 1)->where('parent_id', null)->with(['hasChildren', 'submenu'])->get();
        $view->with('menus', $menus);
    }

}
