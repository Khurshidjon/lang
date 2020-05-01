<?php

namespace App\Http\Controllers;

use App\Mail\MeningPochtamga;
use App\Mail\SendMedia;
use App\Question;
use App\QuestionFiles;
use App\Service;
use App\Setting;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::query()->where('status', 1)->get();
        $services_we_offer = Setting::where('key', 'service_we_offer')->first();
        $offer_one = Setting::where('key', 'offer_one')->first();
        $offer_two = Setting::where('key', 'offer_two')->first();
        $offer_three = Setting::where('key', 'offer_three')->first();
        $offer_four = Setting::where('key', 'offer_four')->first();
        $offer_five = Setting::where('key', 'offer_five')->first();
        $offer_six = Setting::where('key', 'offer_six')->first();
        $our_difference = Setting::where('key', 'our_difference')->first();
        $about_us = Setting::where('key', 'about_us')->first();
        $our_price = Setting::where('key', 'our_price')->first();

        return view('frontend.index', [
            'services' => $services,
            'services_we_offer' => $services_we_offer,
            'offer_one' => $offer_one,
            'offer_two' => $offer_two,
            'offer_three' => $offer_three,
            'offer_four' => $offer_four,
            'offer_five' => $offer_five,
            'offer_six' => $offer_six,
            'our_difference' => $our_difference,
            'about_us' => $about_us,
            'our_price' => $our_price,
        ]);
    }

    public function giveQuestion()
    {
        return view('frontend.give-question');
    }

    public function takeQuestion(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|min:3',
            'company_name' => 'required|string|min:3',
            'email' => 'email:rfc,dns|required',
            'phone' => 'required',
            'files.*' => 'mimes:doc,pdf,docx,xls,xlsx',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);
        $question = new Question();
        $question->full_name = $request->full_name;
        $question->company_name = $request->company_name;
        $question->email = $request->email;
        $question->phone = $request->phone;
        $question->text = $request->text;
        if ($question->save()){
            $links = [];
           if($request->hasFile('files'))
           {
               foreach ($request->file('files') as $item)
               {
                    $filename = $item->store('files/'. date('Y-m'), 'public');
                    $file = new QuestionFiles();
                    $file->filename = $filename;
                    $file->question_id = $question->id;
                    $file->save();
                    $links[] = $filename;
               }
           }
            $data = [
                'links' => $links,
                'question' => $question
            ];
//            \Mail::to($request->email)->send(new MeningPochtamga($question));
//            \Mail::to('xurshidjon1607@mail.ru')->send(new SendMedia($data));
        }
        return redirect('/')->with(['success' => __('pages.success_send_question')]);
    }


    public function blog()
    {
        return view('frontend.blog');
    }
    public function singleBlog()
    {
        return view('frontend.blog-single');
    }
    public function cart()
    {
        return view('frontend.cart');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }

    public function wishlist()
    {
        return view('frontend.wishlist');
    }

    public function shop()
    {
        return view('frontend.shop');
    }

    public function singleProduct()
    {
        return view('frontend.product-single');
    }
}
