<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\News;
use App\Models\NewsDetailComment;
use App\Models\Question;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProductInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index',[
            'about' => About::findOrFail(1),
        ]);
    }

    public function about()
    {
        return view('about',[
            'about' => About::findOrFail(1),
        ]);
    }

    public function services()
    {
        return view('services',[
            'servicecategories' => ServiceCategory::all(),
            'services' => Service::all(),
        ]);
    }

    public function servicesdetail($id)
    {
        return view('services-detail',[
            'service_detail_info' => Service::findOrFail($id),
            'service_detail_product_infos' => ServiceProductInfo::where('service_id', $id)->where('action', 2)->get(),
        ]);
    }

    public function latestNews()
    {
        return view('latestnews',[
            'newses' => News::where('action', 2)->orderBy('id', 'DESC')->get(),
        ]);
    }

    public function latestNewsDetail($id)
    {
        return view('latestnewsdetail',[
            'news_details' => News::findOrFail($id),
            'newses' => News::orderBy('id', 'desc')->limit(5)->get(),
            'comments' => NewsDetailComment::where('news_detail_id', $id)->get(),
            'comments_count' => NewsDetailComment::where('news_detail_id', $id)->count(),
        ]);
    }

    public function latestNewsDetailComment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        NewsDetailComment::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'news_detail_id' => $request->news_detail_id,
            'created_at' => Carbon::now(),
        ]);
        return back();
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
