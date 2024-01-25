<?php

namespace App\Services;

use Illuminate\Support\Facades\Config;
use App\Models\Allison_desafio_models\Profile;
use Illuminate\Support\Facades\Validator;

Config::set('app.timezone', 'America/Sao_Paulo');

class ProfileService
{
    public $profileModel;

    public function __construct(Profile $profile)
    {
        $this->profileModel = $profile;
    }

    public function showProfile($profile){
        return $this->profileModel->showProfile($profile);
    }

    public function listProfiles(){
        return $this->profileModel->listProfiles();
    }

    public function saveProfile($dados) {
        // $this->profileModel->saveProfile($dados);
        $validator = Validator::make($dados, [
            'nome' => 'required',
            'sobrenome' => 'required', 
            'email' => 'required', 
            'pais' => 'required',
            'cidade' => 'required'
        ]);
    
        if ($validator->fails()) {
            throw new \Exception($validator->errors()->first(), 422);
        }
        return Profile::create($dados);
    }

    public function updateProfile($profile, $data){
         $this->profileModel->updateProfile($profile, $data);
    }

    public function deleteProfile($profile){
        return $this->profileModel->deleteProfile($profile);
    }
}
