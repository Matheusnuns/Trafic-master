<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EquipamentoTipo extends Model
{

    use SoftDeletes;

    protected $table = "equipamento_tipos";

    protected $fillable =[
        'tipo',
        'descricao',
        'bdt',
    ];

}
