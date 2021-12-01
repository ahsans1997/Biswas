<?php

namespace App\Http\Controllers;

use App\Models\WorkProcess;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkProcessController extends Controller
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
        return view('admin.workprocess.index',[
            'workprocesses' => WorkProcess::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workprocess.create');
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
            'name' => 'required',
        ]);
        WorkProcess::insert([
            'name' => $request->name,
            'action' => 1,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('success', 'Work add Successfull.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkProcess  $workProcess
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkProcess $workProcess)
    {
        return view('admin.workprocess.edit',[
            'wopkprocess_info' => WorkProcess::findOrFail($workProcess->id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkProcess  $workProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkProcess $workProcess)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);
        WorkProcess::findOrFail($workProcess->id)->update([
            'name' => $request->name,
            'action' => 1,
        ]);
        return back()->with('success', 'Work Edit Successfull.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkProcess  $workProcess
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        WorkProcess::findOrFail($id)->delete();
        return back()->with('delete_status', 'Delete SuccessFull.');
    }
    public function action($id)
    {
        if (WorkProcess::findOrFail($id)->action == 1) {
            WorkProcess::findOrFail($id)->update([
                'action' => 2,
            ]);
        } else {
            WorkProcess::findOrFail($id)->update([
                'action' => 1,
            ]);
        }
        return back()->with('action', 'Toggle Successfull');
    }
}
