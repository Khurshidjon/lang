<?php

namespace App\Http\Controllers;

use App\Mail\MeningPochtamga;
use App\Mail\SendMedia;
use App\Question;
use App\QuestionFiles;
use App\Service;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $services = Service::query()->where('status', 1)->get();
        return view('frontend.index', [
            'services' => $services
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
