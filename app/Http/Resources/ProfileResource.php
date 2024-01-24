<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProfileResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->id,
            'nome'        => $this->nome,
            'sobrenome'   => $this->sobrenome,
            'email'       => $this->email,
            'pais'        => $this->pais,
            'cidade'      => $this->cidade
        ];
    }
}
