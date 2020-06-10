<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class student extends JsonResource
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
            'id' => $this->reg_id,
            'name' => $this->name,
            'guardian_name' => $this->guardian_name,
            'address' => $this->address,
            'gender' => $this->gender,
            'd_o_b' => $this->d_o_b,
            'class' => $this->class,
            'stream' => $this->stream,
            'phone' => $this->phone,
            'email' => $this->email,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
        //return parent::toArray($request);
    }
}
