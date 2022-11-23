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
                'adress'=> '',
                'wood'=> 'default',
                'city'=> '',
                'type' => '',
                'condition'=> '',
                'rooms'=> 0,
                'badrooms'=> 0,
                'utility'=> '',
                'price'=> 0,
                'currence'=> '',
                'rate'=> 4,
                'province'=>  "",
                'description'=> "",
                'realtor'   =>$item->realtor
            ];
        });

        return $data;
    }
}
