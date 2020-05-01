<?php
    namespace App\Http\View\Composers;
    use App\Menu;
    use App\Service;
    use App\Setting;
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
        $footer_menus = Menu::where('status', 1)->where('is_footer', 1)->get();
        $site_logo_title = Setting::where('key', 'site_title')->first();
        $address = Setting::where('key', 'address')->first();
        $phone = Setting::where('key', 'phone')->first();
        $email = Setting::where('key', 'email')->first();
        $facebook = Setting::where('key', 'facebook')->first();
        $telegram = Setting::where('key', 'telegram')->first();
        $you_tube = Setting::where('key', 'you_tube')->first();
        $twitter = Setting::where('key', 'twitter')->first();
        $services = Service::where('status', 1)->get();
        $view->with([
            'menus' => $menus,
            'services' => $services,
            'footer_menus' => $footer_menus,
            'site_logo_title' => $site_logo_title,
            'address' => $address,
            'phone' => $phone,
            'email' => $email,
            'facebook' => $facebook,
            'telegram' => $telegram,
            'you_tube' => $you_tube,
            'twitter' => $twitter,
        ]);
    }

}
