<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crianca extends Model
{
    protected $fillable = [
        'nome', 'idade', 'descricao', 'foto', 'presente_desejado'
    ];
}
