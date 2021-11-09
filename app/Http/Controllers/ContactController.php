<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin.contact.index',[
            'contacts' => Contact::all(),
        ]);
    }

    public function show($id)
    {
        Contact::findOrFail($id)->update([
            'action' => 2,
        ]);
        return view('admin.contact.show',[
            'contact_info' => Contact::findOrFail($id),
        ]);
    }

    public function delete($id)
    {
        Contact::findOrFail($id)->delete();
        return back()->with('delete_message', 'Message delete successfull.');

    }
}
