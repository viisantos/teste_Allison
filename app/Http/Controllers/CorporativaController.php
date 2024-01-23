<?php

namespace App\Http\Controllers;

use App\Models\Allison_desafio_models\Corporativa;
use Illuminate\Http\Request;

class CorporativaController extends Controller
{
    public $corp;

    public function __construct(Corporativa $corp)
    {
        $this->corp = $corp;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $corp = $this->corp->all();

        return $corp->toJson();
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
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
    public function update(Request $request, $id)
    {
        $corp = $this->corp->find($id);
        if ($corp === null) {
            return ['erro' => 'nao foi possivel realizar a atualizacao. Recurso solicitado nao existe'];
        }
        $corp->update($request->all());

        return $corp;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $corp = $this->corp->find($id);
        if ($corp === null) {
            return ['erro' => 'recurso solicitado nao existe'];
        }
        $corp->delete();

        return ['msg' => 'chegamos no método delete de corp'];
    }
}
