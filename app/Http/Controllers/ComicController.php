<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComicController extends Controller
{
    public function index() {
        $grades= Grade::all();
        return view('new_comic',['grades'=>$grades]);
    }

    public function validate_mobile($mobile) {
        return preg_match('/^[0-9]{10}+$/', $mobile);
    }

    public function store(Request $request) {
        $request->validate([
            'name'=>'required| min:3',
            'school_name'=>'required| min:3',
            'phone_no'=>'required',
            'email'=> 'required| min:3',
            'grade'=> 'required',
            'topic'=> 'required',
            'file'=>'required| min:100|max:10000|mimes:jpg,jpeg,png,pdf'
        ]);

        if(!$this->validate_mobile($request->get('phone_no'))) {
            return back()->with('success','Incorrect Phone Number');
        }

        $comic= new Comic();
        $comic->name= $request->get('name');
        $comic->school= $request->get('school_name');
        $comic->phone_no= $request->get('phone_no');
        $comic->email= $request->get('email');
        $comic->grade= $request->get('grade');
        $comic->topic= $request->get('topic');
        $comic->board= $request->get('board');
        $comic->comic_type= $request->get('comic_type');
        if($request->hasFile('file')) {
            $image = $request->file('file');
            $path = $image->store('profileimages', 's3');
            $url = Storage::disk('s3')->url($path);
            $comic->url = $url;
        }

        if($comic->save()){
            return back()->with('success','Comic Added Successfully');
        }else{
            return back()->with('success','Unable to Add at the moment');
        }
    }
}
