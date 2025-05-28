<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgenteSituacao extends Model
{
    protected $table = "agente_situacao";

    protected $fillable = [
        'agente_id',
        'situacao_id',
        'inicio',
        'termino',
        'dias',
        'ativo',
    ];

    public function agente()
    {
       return $this->belongsTo('App\Models\Agente');
    }
    
    public function situacao()
    {
       return $this->belongsTo('App\Models\Situacao');
    }
    
}
