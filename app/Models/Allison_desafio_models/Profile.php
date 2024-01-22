<?php

namespace App\Allison_desafio_models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

class Profile extends Model
{
    use HasFactory;
    use HasUuids;
    use \OwenIt\Auditing\Auditable;
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'profile';

    protected $hidden = [
        'created_at','updated_at'
    ];
    protected $fillable = [
        'id',
        'nome',
        'sobrenome',
        'email',
        'pais',
        'cidade'
    ];





}
