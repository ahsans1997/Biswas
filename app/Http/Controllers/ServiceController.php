<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\ServiceProductInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
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
        return view('admin.service.index',[
            'services' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create',[
            'servicecategories' => ServiceCategory::all(),
        ]);
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
            'service_category_id' => 'required',
            'service_title' => 'required',
            'service_details' => 'required',
            'photo' => 'required',
        ]);
        $service_id = Service::insertGetId([
            'service_category_id' => $request->service_category_id,
            'service_title' => $request->service_title,
            'service_details' => $request->service_details,
            'action' => 1,
            'created_at' => Carbon::now(),
        ]);
        if ($request->hasFile('photo')) {
            $upload_photo = $request->file('photo');
            $new_photo_name = $service_id.'.'.$upload_photo->getClientOriginalExtension();
            $new_file_location = 'public/photos/service/'.$new_photo_name;
            Image::make($upload_photo)->resize(352, 235)->save(base_path($new_file_location));
            Service::findOrFail($service_id)->update([
                'photo' => $new_photo_name
            ]);
        }
        return back()->with('service_success', $request->service_title.' '. 'created successfull.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.service.show',[
            'service_info' => Service::findOrFail($service->id),
            'service_products' => ServiceProductInfo::where('service_id', $service->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.service.edit',[
            'service_info' => Service::findOrFail($service->id),
            'servicecategories' => ServiceCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'service_category_id' => 'required',
            'service_title' => 'required',
            'service_details' => 'required',
        ]);
        Service::findOrFail($service->id)->update([
            'service_category_id' => $request->service_category_id,
            'service_title' => $request->service_title,
            'service_details' => $request->service_details,
            'action' => 1,
        ]);
        if ($request->hasFile('photo')) {
            $upload_photo = $request->file('photo');
            $new_photo_name = Service::findOrFail($service->id).'.'.$upload_photo->getClientOriginalExtension();
            $new_file_location = 'public/photos/service/'.$new_photo_name;
            Image::make($upload_photo)->resize(352, 235)->save(base_path($new_file_location));
            Service::findOrFail($service->id)->update([
                'photo' => $new_photo_name
            ]);
        }
        return back()->with('service_success', $request->service_title.' '. 'created successfull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $old_photo_location = 'public/photos/service/'.Service::findOrFail($id)->photo;
        if ($old_photo_location != 'public/photos/service/default.png') {
            unlink(base_path($old_photo_location));
        }
        Service::findOrFail($id)->delete();
        return back()->with('delete_status', 'Delete SuccessFull.');
    }

    public function action($id)
    {
        if (Service::findOrFail($id)->action == 1) {
            Service::findOrFail($id)->update([
                'action' => 2,
            ]);
        } else {
            Service::findOrFail($id)->update([
                'action' => 1,
            ]);
        }
        return back()->with('action', 'Toggle Successfull');
    }
}
