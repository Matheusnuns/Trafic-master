<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Multa extends Model
{
    protected $fillable = [
        'data',
        'hora',
        'bairro',
        'veiculo',
        'placa',
        'leis_id',
        'logradouro',
        'numero',
        'matricula_agente',
        'descricao_multa',
        'agente_id',
       ];

       public function lei(){
        return $this->belongsTo('App\Models\ctb','leis_id');
       }

       public function agente()
       {
        return $this->belongsTo('App\Models\Agente','agente_id');
       }


}
