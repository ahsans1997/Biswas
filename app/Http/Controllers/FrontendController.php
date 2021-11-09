<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Question;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        return view('services');
    }

    public function servicesdetail()
    {
        return view('services-detail');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function gallerydetail()
    {
        return view('gallery-detail');
    }

    //Contact
    public function contact()
    {
        return view('contact');
    }
    public function contact_message(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        Contact::insert([
            'username' => $request->username,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('message', 'Your massage send successfully.');
    }

    public function faq()
    {
        return view('faq',[
            'questions' => Question::where('action', 2)->get(),
        ]);
    }

    public function news()
    {
        return view('news');
    }
}
