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
            'category' => $this->category,
            'body' => $this->body,
            'posted_at' => date("M d, Y h:i A", strtotime($this->created_at))
        ];
    }
}
