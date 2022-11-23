<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'message' => 'required',
            'file' => 'required|mimes:pdf|max:10000'
        ]);

        $getfile = generateName($request->file->getClientOriginalName());
        $request->file->move(public_path(env('Collab_FILE_PATH')) , $getfile);

        ContactUs::Create([
            'name' => $request->name,
            'phone' => $request->phone,
            'description' => $request->message,
            'file' => $getfile
        ]);

        alert()->success('فرم ارسالی شما دریافت شد', '');
        return redirect()->route('home.pages.index');
    }
}
