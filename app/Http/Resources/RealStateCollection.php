<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RealStateCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        $data = $this->collection;

        $data->transform(function($item, $index){

            return [
                'id' =>$item->id,
                'created_at'=>$item->created_at,
                'uri' => "https://www.holidify.com/images/cmsuploads/compressed/1024px-Parramatta-NSW-GovernmentHouse_20190618193446.jpg",
                'imgs' => [],
                'adress'=> $item->adress,
                'wood'=> $item->wood,
                'city'=> $item->city,
                'type' => $item->type,
                'condition'=> $item->condition,
                'rooms'=> $item->rooms,
                'badrooms'=> $item->badrooms,
                'utility'=> $item->utility,
                'price'=> $item->price,
                'currence'=> $item->currence,
                'rate'=> $item->rate,
                'province'=>  $item->province,
                'description'=> $item->description,
                'realtor'   =>$item->realtor
            ];
        });

        return $data;
    }
}
