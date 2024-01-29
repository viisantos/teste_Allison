<?php

namespace App\Http\Controllers;

use App\Models\Allison_desafio_models\Profile;
use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Resources\ProfileResource;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\ProfileStoreRequest;

class ProfileController extends Controller
{
    public $profileService;
    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = $this->profileService->listProfiles();

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileStoreRequest $request)
    {
        dd($request);
        try {
            $data = $request->all();
            $profile = $this->profileService->saveProfile($data);

            return response()->json(['message' => 'Perfil cadastrado com sucesso', 'profile' => new ProfileResource($profile)], 201, [], JSON_PRETTY_PRINT);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422, [], JSON_PRETTY_PRINT);
        }
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        $dados = $this->profileService->showProfile($profile);
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
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileUpdateRequest $request, $profile)
    {
        $data = $request->all();
        $dados = $this->profileService->updateProfile($profile, $data);
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
    public function destroy(Request $request, Profile $profile)
    {
        $dados = $this->profileService->deleteProfile($profile);
        $dados = ProfileResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'não foi possível excluir o recurso'];
        }
    }
}
