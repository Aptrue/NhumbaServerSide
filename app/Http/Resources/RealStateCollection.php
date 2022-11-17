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
                'realstate' =>$item->id,
                'realtor'   =>$item->realtor->name
            ];
        });

        return $data;
    }
}
