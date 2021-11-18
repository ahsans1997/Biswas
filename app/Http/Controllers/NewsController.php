<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index',[
            'newses' => News::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'photo' => 'required',
            'news_quote' => 'required',
            'news_details' => 'required',
            'time' => 'required',
            'news' => 'required',
        ]);
        $news_id = News::insertGetId([
            'news' => $request->news,
            'time' => $request->time,
            'news_details' => $request->news_details,
            'news_quote' => $request->news_quote,
            'action' => 1,
        ]);
        if ($request->hasFile('photo')) {
            $upload_photo = $request->file('photo');
            $new_photo_name = $news_id.'.'.$upload_photo->getClientOriginalExtension();
            $new_file_location = 'public/photos/news/'.$new_photo_name;
            Image::make($upload_photo)->resize(372, 276)->save(base_path($new_file_location));
            news::findOrFail($news_id)->update([
                'photo' => $new_photo_name
            ]);
        }
        return back()->with('news_success', $request->news.' '. 'created successfull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }

    public function action($id)
    {
        if (News::findOrFail($id)->action == 1) {
            News::findOrFail($id)->update([
                'action' => 2,
            ]);
        } else {
            News::findOrFail($id)->update([
                'action' => 1,
            ]);
        }
        return back()->with('action', 'Toggle Successfull');
    }

    public function delete($id)
    {
        $old_photo_location = 'public/photos/news/'.News::findOrFail($id)->photo;
        if ($old_photo_location != 'public/photos/news/default.png') {
            unlink(base_path($old_photo_location));
        }
        News::findOrFail($id)->delete();
        return back()->with('delete_status', 'News Delete SuccessFull.');
    }
}
