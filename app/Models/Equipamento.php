<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipamento extends Model
{
    use SoftDeletes;

    protected $table = "equipamentos";

    protected $fillable =[
        'equipamentotipo_id',
        'numeracao',
        'situacao',
        'agente_id',
    ];

    public function equipamentotipo()
 	{
		return $this->belongsTo('App\Models\EquipamentoTipo','equipamentotipo_id');
 	}

    public function agentes()
    {
        return $this->belongsToMany(Agente::class)->withPivot('saida', 'entrada');
    }

    public function agente()
    {
        return $this->belongsTo(Agente::class);
    }

    // public function bdt()
    // {
    //     return $this->hasMany(Bdt::class);
    // }

    public function bdt_saida()
    {
        return $this->hasMany(Bdt::class)->where('sai_data',null);
    }

    public function bdt_saida_fiscal()
    {
        // return $this->hasMany(Bdt::class)->where('sai_fiscal_id',null)->where('ent_motorista_id',null)->where('ent_fiscal_id',null);
        return $this->hasMany(Bdt::class)->where('sai_data','!=',null)->where('sai_fiscal_id',null);
    }

    public function bdt_ent()
    {
        return $this->hasMany(Bdt::class)->where('sai_fiscal_id','!=',null)->where('ent_motorista_id',null);
    }

    public function bdt_ent_fiscal()
    {
        return $this->hasMany(Bdt::class)->where('ent_motorista_id','!=',null)->where('ent_fiscal_id',null);
    }



}
