<?php

namespace App\Http\Controllers;

use App\Models\Question;
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
    public function contact()
    {
        return view('contact');
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
