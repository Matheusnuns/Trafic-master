<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Semaforo extends Model
{
    protected $table = 'semaforos';

    protected $fillable = [
        'data_relatorio',
        'controladores',
        'modelo',
        'endereco',
        'ip',
        'relatorio',
        'obs',
        'imagem',
    ];

    protected $casts = [
        'data_relatorio' => 'datetime',
    ];
}
