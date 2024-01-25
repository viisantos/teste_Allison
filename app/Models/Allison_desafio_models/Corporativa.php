<?php

namespace App\Models\Allison_desafio_models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Corporativa extends Model
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;
    use HasUuids;

    protected $dates = ['deleted_at'];

    protected $table = 'corporativa';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'id',
        'profile_id',
        'cargo',
        'funcao',
        'tipo_de_tecnologia',
        'empresa',
        'modalidade',
        'salario',
    ];

    public function showCorporativa($corporativa){
        return $this->find($corporativa)->first();
    }

    public function listCorporativas(){
        return $this->all();
    }

    public function saveCorporativa($dados){
        $corp                     = new Corporativa;
        $corp->profile_id         = $dados->profile_id;
        $corp->cargo              = $dados->cargo;
        $corp->funcao             = $dados->funcao;
        $corp->tipo_de_tecnologia = $dados->tipo_de_tecnologia;
        $corp->empresa            = $dados->empresa;
        $corp->modalidade         = $dados->modalidade;
        $corp->salario            = $dados->salario;
        $corp->save();
    }

    public function updateCorporativa($corporativa, $data){
        $this->where('id', $corporativa)
        ->update([
         'profile_id'          => $data->profile_id,
         'cargo'               => $data->cargo,
         'funcao'              => $data->funcao,
         'tipo_de_tecnologia'  => $data->tipo_de_tecnologia,
         'empresa'             => $data->empresa,
         'modalidade'          => $data->modalidade,
         'salario'             => $data->salario
         ]);
    }

    public function deleteCorporativa($corporativa){
        $this->destroy($corporativa);
    }
}
