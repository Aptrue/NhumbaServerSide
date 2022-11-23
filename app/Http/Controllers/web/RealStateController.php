<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Realstate;
use Illuminate\Support\Facades\Auth;


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
       $realstate->realtor_id = Auth::user()->id;

       $realstate->save();

       return back();

    }
}
