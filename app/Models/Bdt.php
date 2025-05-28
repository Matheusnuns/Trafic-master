<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bdt extends Model
{
    use SoftDeletes;

    protected $table = "bdts";

    protected $fillable =[
        
        'sai_combustivel',
        'sai_oleo_motor',
        'sai_oleo_freio',
        'sai_fluido_radiador',
        'sai_triangulo',
        'sai_macaco',
        'sai_chave_roda',
        'sai_extintor',
        'sai_limpador_parabrisa',
        'sai_sirene',
        'sai_luz_lanterna_d',
        'sai_luz_lanterna_t',
        'sai_luz_farol',
        'sai_luz_re',
        'sai_luz_freio',
        'sai_luz_alerta',
        'sai_buzina',
        'sai_pneu_d_e',
        'sai_pneu_d_d',
        'sai_pneu_t_e',
        'sai_pneu_t_d',
        'sai_estepe',
        'sai_retrovisor_esq',
        'sai_retrovisor_dir',
        'sai_lanterna_d',
        'sai_lanterna_t',
        'sai_placa_d',
        'sai_placa_t',
        'sai_parachoque_d',
        'sai_parachoque_t',
        'sai_paralama_d_e',
        'sai_paralama_d_d',
        'sai_paralama_t_e',
        'sai_paralama_t_d',
        'sai_capo',
        'sai_portamala',
        'sai_porta_d_e',
        'sai_porta_d_d',
        'sai_porta_t_e',
        'sai_porta_t_d',
        'sai_teto',
        'sai_parabrisa',
        'sai_vidro_d_e',
        'sai_vidro_d_d',
        'sai_vidro_t_e',
        'sai_vidro_t_d',
        'sai_vidro_t',

    ];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }  
    
    /* SAIDA */   
    public function fiscal_saida()
    {
        return $this->belongsTo('App\Models\User','sai_fiscal_id');
    }   

    public function motorista_saida()
    {
        return $this->belongsTo('App\Models\Agente','sai_motorista_id');
    }  
    
    // /* ENTRADA */
    public function fiscal_entrada()
    {
        return $this->belongsTo('App\Models\User','ent_fiscal_id');
    }   

    public function motorista_entrada()
    {
        return $this->belongsTo('App\Models\Agente','ent_motorista_id');
    }  

}
