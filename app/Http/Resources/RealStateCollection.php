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

            $images = [];
            foreach (explode(',', $item->imgs) as $imgs) {
                    array_push($images, asset('img/realstate/'.$imgs));
            }

            return [
                'id' =>$item->id,
                'created_at'=>$item->created_at,
                'uri' =>  asset('img/realstate/'.$item->uri),
                'imgs' => $images,
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
