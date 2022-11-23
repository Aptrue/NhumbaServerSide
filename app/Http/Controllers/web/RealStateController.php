<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Realstate;
use Illuminate\Support\Facades\Storage;



class RealStateController extends Controller
{
    function index(){

        $realstates = Realstate::all();
        return  view('realstate.list', compact(
            'realstates'
        ) );

    }

    function create(Request $request){
        return view('realstate.create.create');
    }

    function store(Request $request){

       $realstate = new Realstate();
       $user = request()->user();
       $images_all = [];

       //multiplas imagens
       if($request->hasFile('imgs')){

        foreach ($request->File('imgs') as $images) {
            $requestimages = $images;

            $extension = $requestimages->extension();

            $imageNames = md5($requestimages->getClientOriginalName().strtotime('now')). "." .$extension;

            $requestimages->move(public_path('img/realstate'), $imageNames);

            array_push($images_all,$imageNames);
        }

       }

    //    dd($images_all);

       //imagem de capa
       if($request->hasFile('img') && $request->file('img')->isValid()){

        $requestimage = $request->img;

        $extension = $requestimage->extension();

        $imageName = md5($requestimage->getClientOriginalName().strtotime('now')). "." .$extension;

        $requestimage->move(public_path('img/realstate'), $imageName);

        $realstate->uri=$imageName;
    }

       $realstate->adress = $request->adress;
       $realstate->wood   = $request->wood;
       $realstate->city   =$request->city;
       $realstate->price  =$request->price;
       $realstate->description = $request->description;
       $realstate->utility =$request->utility;
       $realstate->type  = $request->type;
       $realstate->rooms =$request->rooms;
       $realstate->badrooms = $request->badrooms;
       $realstate->province = $request->province;
       $realstate->realtor_id = $user->id;
       $realstate->condition = $request->condition;
       $realstate->imgs = implode(',',$images_all);

       $realstate->save();

       return back();

    }
}
