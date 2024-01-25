<?php

namespace App\Http\Controllers;

use App\Models\Allison_desafio_models\Corporativa;
use App\Http\Resources\CorporativaResource;
use Illuminate\Http\Request;
use App\Services\CorporativaService;
use App\Http\Requests\CorporativaStoreRequest;
use App\Http\Requests\CorporativaUpdateRequest;

class CorporativaController extends Controller
{
    public $corporativaService;

    public function __construct(CorporativaService $corp)
    {
        $this->corporativaService = $corp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = $this->corporativaService->listCorporativas();

        if($dados){
            return CorporativaResource::collection($dados);
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
    public function store(CorporativaStoreRequest $request)
    {
        $dados_ = CorporativaResource::collection($request->all());
        $dados = $this->corporativaService->saveCorporativa($dados_);
        
        if($dados){
            return ['sucesso' => 'dados cadaastrados'];
        }else{
            return ['erro' => 'nao foi possivel realizar o cadastro.'];
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function show($corp)
    {
        $dados = $this->corporativaService->showCorporativa($corp);
        $dados = CorporativaResource::collection($dados);

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
    public function edit(Corporativa $corp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $corp
     * @return \Illuminate\Http\Response
     */
    public function update(CorporativaUpdateRequest $request, $corp)
    {
        $data = $request->all();
        $dados = $this->corporativaService->updateCorporativa($corp, $data);
        $dados = CorporativaResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'Não foi possível atualizar o recurso.'];
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function destroy($corp)
    {
        $dados = $this->corporativaService->deleteCorporativa($corp);
        $dados = CorporativaResource::collection($dados);

        if($dados){
            return $dados;
        }else{
            return ['erro' => 'não foi possível excluir o recurso'];
        }
    }
}
