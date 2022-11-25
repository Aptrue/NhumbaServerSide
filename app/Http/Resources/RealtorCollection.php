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
                'uri' => $item->uri,
                'name'=>$item->name,
                'email'=>$item->email,
                'cellphone'=>$item->cellphone,
                'id' =>$item->id,
                'realstates'=>new RealStateCollection($item->realstate)
            ];
        });

        return $data;
    }
}
