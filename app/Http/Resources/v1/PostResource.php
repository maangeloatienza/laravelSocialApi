<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;


class PostResource extends JsonResource
{
    public $collects = 'App\Http\Resources\Member';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */


    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
