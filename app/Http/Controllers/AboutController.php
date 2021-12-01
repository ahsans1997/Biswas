<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index',[
            'about' => About::findOrFail(1),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        return view('admin.about.edit',[
            'about' => About::findOrFail(1),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {

        About::findOrFail(1)->update([
            'title' => $request->title,
            'about' => $request->about,
            'bigtitle' => $request->bigtitle,
            'bigabout' => $request->bigabout,
        ]);
        if ($request->hasFile('photo')) {
            $upload_photo = $request->file('photo');
            $new_photo_name = 'about'.'.'.$upload_photo->getClientOriginalExtension();
            $new_file_location = 'public/photos/about/'.$new_photo_name;
            Image::make($upload_photo)->resize(504, 302)->save(base_path($new_file_location));
            About::findOrFail(1)->update([
                'photo' => $new_photo_name
            ]);
            return back();
        }
    }
}
