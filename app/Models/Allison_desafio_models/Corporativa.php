<?php

namespace App\Allison_desafio_models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Corporativa extends Model
{
    use HasFactory;
    use HasUuids;
    use \OwenIt\Auditing\Auditable;

    protected $dates = ['deleted_at'];
    protected $table = 'corporativa';

    protected $hidden = [
        'created_at','updated_at'
    ];
    protected $fillable = [
        'id',
        'profile_id',
        'cargo',
        'funcao',
        'tipo_de_tecnologia',
        'empresa',
        'modalidade',
        'salario'
    ];

}
