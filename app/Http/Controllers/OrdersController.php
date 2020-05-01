<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Image;
use Smalot\PdfParser\Parser;

class OrdersController extends Controller
{
    public function index()
    {
        return view('frontend.orders.index');
    }

    public function submit(Request $request)
    {
        if($request->get('image'))
        {
            $image = $request->get('image');
            $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
            Image::make($request->get('image'))->save(public_path('images/').$name);
        }

//        $image= new FileUpload();
//        $image->image_name = $name;
//        $image->save();

        return response()->json(['success' => 'You have successfully uploaded an image'], 200);
    }

    public function store(Request $request)
    {
        $striped_content = '';
        $content = '';
        $parser = new Parser();
        $filename = $request->file('file');
        $count = $parser->parseFile($filename);
        $pp = $count->getText();
        dd(str_word_count($pp));
    }
}
