<?php

namespace App\Http\Controllers;

use App\Models\Allison_desafio_models\Profile;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProfileService $profileService)
    {
        $dados = $profileservice->listProfiles();

        if($dados){
            return ProfileResource::collection($dados);
        }else{
            return ['erro' => 'Não foi possível retornar os recursos.'];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProfileService $profileService)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ProfileService $profileService)
    {
        $dados = $profileService->saveProfile($request->all());
        $dados = ProfileResource::collection($dados);

        if($dados){
            return ['sucesso' => 'dados cadaastrados'];
        }else{
            return ['erro' => 'nao foi possivel realizar o cadastro.'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile, ProfileService $profileService)
    {
        $dados = $profileService->showProfile($profile);
        $dados = ProfileResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'Recurso não encontrado'];
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile, ProfileService $profileService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile, ProfileService $profileService)
    {
        $dados = $profileService->updateProfile($profile);
        $dados = ProfileResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'Não foi possível atualizar o recurso.'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Profile $profile, ProfileService $profileService)
    {
        $dados = $profileService->deleteProfile($profile);
        $dados = ProfileResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'não foi possível excluir o recurso'];
        }
    }
}
