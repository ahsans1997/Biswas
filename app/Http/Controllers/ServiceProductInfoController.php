<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceProductInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceProductInfoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        return view('admin.service.product_info_create',[
            'service_product_info' => Service::findOrFail($id),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_product_title' => 'required',
            'service_product_percent' => 'required',
        ]);
        ServiceProductInfo::insert([
            'service_product_title' => $request->service_product_title,
            'service_product_percent' => $request->service_product_percent,
            'service_id' => $request->service_id,
            'action' => 1,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('service_product_success', $request->service_product_title.' '.'created successfull');
    }

    public function edit($id)
    {
        return view('admin.service.product_info_edit',[
            'service_product_infos' => ServiceProductInfo::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'service_product_title' => 'required',
            'service_product_percent' => 'required',
        ]);
        ServiceProductInfo::findOrFail($id)->update([
            'service_product_title' => $request->service_product_title,
            'service_product_percent' => $request->service_product_percent,
            'service_id' => $id,
            'action' => 1,
        ]);
        return back();
    }

    public function action($id)
    {
        if (ServiceProductInfo::findOrFail($id)->action == 1) {
            ServiceProductInfo::findOrFail($id)->update([
                'action' => 2,
            ]);
        } else {
            ServiceProductInfo::findOrFail($id)->update([
                'action' => 1,
            ]);
        }
        return back()->with('action', 'Toggle Successfull');
    }

    public function delete($id)
    {
        ServiceProductInfo::findOrFail($id)->delete();
        return back();
    }
}
