<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Setting::all();
        return view('backend.settings.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.settings.create');
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
            'key' => 'string|unique:settings|min:3'
        ]);
        $setting = new Setting();
        $setting->title_uz = $request->title_uz;
        $setting->title_en = $request->title_en;
        $setting->title_ru = $request->title_ru;
        $setting->description_uz = $request->description_uz;
        $setting->description_en = $request->description_en;
        $setting->description_ru = $request->description_ru;
        $setting->content_uz = $request->content_uz;
        $setting->content_en = $request->content_en;
        $setting->content_ru = $request->content_ru;
        $setting->key = $request->key;
        if ($request->hasFile('icon')){
            $setting->icon = $request->file('icon')->store('settingsImages'. date('MY'), 'public');
        }
        $setting->save();
        return redirect()->route('settings.index')->with('success', 'Sayt sozlamasi muvofaqqiyatli yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        return view('backend.settings.edit', [
            'setting' => $setting
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
//        $request->validate([
//            'key' => 'string|unique:settings|min:3, key'.$setting->id,
//        ]);
        $setting->title_uz = $request->title_uz;
        $setting->title_en = $request->title_en;
        $setting->title_ru = $request->title_ru;
        $setting->description_uz = $request->description_uz;
        $setting->description_en = $request->description_en;
        $setting->description_ru = $request->description_ru;
        $setting->content_uz = $request->content_uz;
        $setting->content_en = $request->content_en;
        $setting->content_ru = $request->content_ru;
        $setting->key = $request->key;
        if ($request->hasFile('icon')){
            $setting->icon = $request->file('icon')->store('settingsImages'. date('MY'), 'public');
        }
        $setting->update();
        return redirect()->route('settings.index')->with('success', 'Sayt sozlamasi muvofaqqiyatli yangilandi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
