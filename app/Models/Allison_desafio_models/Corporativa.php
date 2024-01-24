<?php

namespace App\Models\Allison_desafio_models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corporativa extends Model
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

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

    }

    public function listCorporativas(){

    }

    public function saveCorporativa($dados){

    }

    public function updateCorporativa($corporativa){

    }

    public function deleteCorporativa($corporativa){

    }
}
