<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CorporativaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
        public function toArray(Request $request): array
    {
        return [
            'id'         => $this->profile_id,
            'profile_id' => $this->profile_id,
            'cargo'      => $this->cargo,
            'funcao'     => $this->funcao,
            'tipo_de_tecnologia' => $this->tipo_de_tecnologia,
            'empresa'            => $this->empresa,
            'modalidade'         => $this->modalidade,
            'salario'            => $this->salario
        ];
    }
}
