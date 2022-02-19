<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function home(){
        return view('home');
    }

    public function createPostcard(){
        return view('create-postcard');
    }

    public function storePostcard(Request $request){
        $data = $request -> all();

        dd($data);
    }
}
