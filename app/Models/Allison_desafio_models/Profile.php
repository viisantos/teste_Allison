<?php

namespace App\Models\Allison_desafio_models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

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
        'senha',
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
        $profile            = new Profile;
        $profile->nome      = $dados->nome;
        $profile->sobrenome = $dados->sobrenome;
        $profile->email     = $dados->email;
        $profile->senha     = Hash::make($dados->senha);
        $profile->pais      = $dados->pais;
        $profile->cidade    = $dados->cidade;
        $profile->save();

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
