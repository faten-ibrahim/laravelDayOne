<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'post_id' => $this->id,
            'post_title' => $this->title,
            'post_desc' => $this->description,
            'post_date' =>$this->created_at->toDateString(),
            // 'post_user' => $this->user,
            'post_user' => $this->user_id,
            // 'user'=>[
            //     'user_id'=>$this->user_id,
            //     'user_name'=>$this->name,
            //     'user_email'=>$this->email,
            // ],
        ];
        // return parent::toArray($request);
       
    }
}
