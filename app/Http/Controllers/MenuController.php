<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('backend.menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('is_parent', 1)->get();
        return view('backend.menus.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title_uz' => 'string|min:3|required',
            'title_en' => 'string|min:3|required',
            'title_ru' => 'string|min:3|required',
//            'url' => 'string',
        ]);

        $menu = new Menu();
        $menu->title_uz = $request->title_uz;
        $menu->title_en = $request->title_en;
        $menu->title_ru = $request->title_ru;
        $menu->url = $request->url;
        $menu->parent_id = $request->parent_id;
        if ($request->page_id == 'on'){
            $menu->page_id = 1;
        }else{
            $menu->page_id = 0;
        }
        if ($request->is_parent == 'on'){
            $menu->is_parent = 1;
        }else{
            $menu->is_parent = 0;
        }
        if ($request->is_footer == 'on'){
            $menu->is_footer = 1;
        }else{
            $menu->is_footer = 0;
        }
        if ($request->target == 'on'){
            $menu->target = '_blank';
        }else{
            $menu->target = '_self';
        }
        $menu->save();

        return redirect()->route('menus.index')->with('success', __('Menu muvofaqqiyatli yaratildi'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Menu $menu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menu $menu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->back()->with('success', 'Menu muvofaqqiyatli o\'chirildi');
    }
}
