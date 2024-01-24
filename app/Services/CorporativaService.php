<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Models\Allison_desafio_models\Corporativa;

Config::set('app.timezone', 'America/Sao_Paulo');

class CorporativaService
{

    public $corporativaModel;

    public function __construct(Corporativa $corp)
    {
        $this->corporativaModel = $corp;
    }

    public function showCorporativa($corporativa){
        return $this->corporativaModel->showCorporativa($corporativa);
    }

    public function listCorporativas(){
        return $this->corporativaModel->listCorporativas();
    }

    public function updateCorporativa($corporativa, $data){
         $this->corporativaModel->updateCorporativa($corporativa, $data);
    }

    public function saveCorporativa($dados){
       $this->corporativaModel->saveCorporativa($dados);
    }

    public function deleteCorporativa($corporativa){
        return $this->corporativaModel->deleteProfile($corporativa);
    }
}
