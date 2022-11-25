<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\RealStateCollection;
use Illuminate\Http\Request;
use App\Models\Realstate;

class RealStateController extends Controller
{

    function store(Request $request){

        $realstate = new Realstate();
        $images_all = [];

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
        $realstate->realtor_id = 1;
        $realstate->condition = $request->condition;
        $realstate->save();

        return new RealStateCollection($realstate);

     }
}
