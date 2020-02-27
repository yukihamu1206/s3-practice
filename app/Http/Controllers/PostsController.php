<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

	public function index()
	{
		return view('posts.index');
	}

    public function store(Request $request)
    {

    	$file = $request->file('file');
    	$filename = $request->file('file')->getClientOriginalName();
    	if ($file->isValid()) {

    		var_dump("ok");
    
		}
    	$data = Storage::disk('s3');
    	$data->putFileAs('/',$file,'public');
    	return view('posts.index',['filename' => $filename]);

    }

    public function show(){

    }

   
}
