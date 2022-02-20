<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Postcard;

class GuestController extends Controller
{
    public function home(){
        return view('home');
    }

    public function createPostcard(){
        return view('create-postcard');
    }

    public function storePostcard(Request $request){
        // \Log::error("cicici");
        $data = $request -> validate([
            'sender' =>'required|string',
            'address' =>'required|string',
            'text' =>'required|string',
            'image' =>'required|image',
        ]);


        $imageFile =$data['image'];

        $imageName = rand(100000,999999).'_'.time().  $imageFile -> getClientOriginalExtension();//nome casuale univoco assegnato all'immagine
        // dd($imageName);

        // $imageFile -> storeAs('/postcards/',$imageFile -> getClientOriginalName(), 'public');
        $imageFile -> storeAs('/postcards/',$imageName, 'public');
        //php artisan storage:link  mettre immagine in storage

        $data['image'] = $imageName;
        // dd($data);

        //solita parte di create --4
        $postcard = Postcard::create($data);
        return redirect() -> route('home');

    }
}
