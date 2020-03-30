<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesUpload extends Controller
{
    public function store(Request $request){
                $image = base64_encode(file_get_contents($request->file('Uploadedpic')));
                return view('/admin');

    }
    public function index(){
        return view('/admin');
    }
}
