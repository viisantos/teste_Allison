<?php

namespace App\Models\Allison_desafio_models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Profile extends Model
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;
    use HasUuids;

    protected $dates = ['deleted_at'];

    protected $table = 'profile';

    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $fillable = [
        'nome',
        'sobrenome',
        'email',
        'pais',
        'cidade',
    ];

    public function showProfile($profile){
        return $this->find($profile)->first();
    }

    public function listProfiles(){
        return $this->all();
    }

    
    public function saveProfile($dados){
       return Profile::create($dados);
    }

    public function updateProfile($profile, $data){
        $this->where('id', $profile)
               ->update([
                'nome'      => $data->nome,
                'sobrenome' => $data->sobrenome,
                'email'     => $data->email,
                'senha'     => Hash::make($data->senha),
                'pais'      => $data->pais,
                'cidade'    => $data->cidade
                ]);
    }

    public function deleteProfile($profile){
        $this->destroy($profile);
    }
}
