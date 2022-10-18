<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Relacao extends JsonResource
{

    public function toArray($request)
    {
     
        return [
            'role_id' => $this->role_id,
            'model_type' => $this->model_type,
            'model_id' => $this->model_id,
        ];

    }
}









