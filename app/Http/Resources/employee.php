<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\User;

class employee extends JsonResource
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
            'emp_id' => $this->emp_id,
            'name' => $this->name,
            'address' => $this->address,
            'gender' => $this->gender,
            'emp_type' => $this->emp_type,
            'subject' => $this->subject,
            'phone' => $this->phone,
            'email' => $this->email,
            //'created_at' => $this->created_at,
            //'updated_at' => $this->updated_at,
        ];
        //return parent::toArray($request);
    }
}
