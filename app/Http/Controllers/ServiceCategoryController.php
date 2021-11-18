<?php

namespace App\Http\Controllers;

use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ServiceCategoryController extends Controller
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
        return view('admin.service-category.index',[
            'service_categories' => ServiceCategory::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service-category.create');
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
            'service_category_name' => 'required',
        ]);
        $service_category_id = ServiceCategory::insertGetId([
            'service_category_name' => $request->service_category_name,
        ]);
        return back()->with('service_category_success', $request->service_category_name.' '. 'created successfull.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.service-category.edit',[
            'service_category_info' => ServiceCategory::findOrFail($serviceCategory->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        ServiceCategory::findOrFail($serviceCategory->id)->update([
            'service_category_name' => $request->service_category_name,
        ]);
        return back()->with('service_category_success', $request->service_category_name.' Edit Successfull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceCategory  $serviceCategory
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        ServiceCategory::findOrFail($id)->delete();
        return back()->with('delete_status', 'Service Category Deleted Successfull');
    }
}
