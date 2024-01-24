<?php

namespace App\Models\Allison_desafio_models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'profile';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'email',
        'pais',
        'cidade',
    ];

    public function showProfile($profile){

    }

    public function listProfiles(){

    }

    public function saveProfile($dados){

    }

    public function updateProfile($profile){

    }

    public function deleteProfile($profile){

    }
}
