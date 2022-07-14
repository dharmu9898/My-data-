<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class QaResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'trainer_list' => $this->trainer_list,
            'title' => $this->title,
            'url' => $this->url,
            'status' => $this->status,
            'description' => $this->description,

        ];
    }
}
