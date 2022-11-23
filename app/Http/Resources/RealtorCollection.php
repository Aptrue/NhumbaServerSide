<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class RealtorCollection extends ResourceCollection
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
                
                'uri' => "https://i.pravatar.cc/150?img=31",
                'name'=>$item->name,
                'email'=>$item->email,
                'cellphone'=>$item->cellphone,
                'id' =>$item->id,
            ];
        });

        return $data;
    }
}
