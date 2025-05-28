<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agente extends Model
{
    use SoftDeletes;

    protected $table = "agentes";

    protected $fillable = [
        'user_id',
        'nome_servico',
        'sexo',
        'nascimento',
        'matricula',
        'cargo_id',
        'admissao',
        'ts',
        'cnh',
        'categoria_cnh',
        'validade_cnh',
        'municipio',
        'bairro',
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'telefone1',
        'telefone2',
        'telefone3',
        'obs',
        'situacao',
        'foto',
        'altura',
        'camisa',
        'peso',
        'calca',
        'sapato',
        'tenis',
        'coturno',
        'colete',
    ];

    public function cargo()
 	{
		return $this->belongsTo('App\Models\Cargo','cargo_id');
 	}

    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function ocorrencias()
    {
        return $this->belongsToMany(Ocorrencia::class, 'ocorrencias_agentes')->withPivot('relator');
    }

    public function situacoes()
    {
        return $this->hasMany('App\Models\AgenteSituacao');
    }

    public function situacao_atual()
    {
        
        return $this->hasOne('App\Models\AgenteSituacao')->where('ativo','=', 1);
    }

    public function equipamentos()
    {
        return $this->belongsToMany(Equipamento::class,'equipamento_agente')->withPivot('saida', 'entrada');
    }
     
    public function equipamentos_cautelados()
    {
        return $this->belongsToMany(Equipamento::class, 'equipamento_agente')->withPivot('saida', 'entrada')->where(['entrada' => NULL]);
    }

    

}
