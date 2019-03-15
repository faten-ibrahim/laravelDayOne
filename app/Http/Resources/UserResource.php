<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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

                'usr_id'=>$this->user_id,
                'usr_name'=>$this->name,
                'usr_email'=>$this->email,
        ];
        // return parent::toArray($request);
    }
}
