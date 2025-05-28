<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Equipamento;
use App\Models\EquipamentoTipo;
use App\Models\Bdt;
use Carbon\Carbon;
use Auth;

class BdtController extends Controller
{

	public function edit_bdt_saida($id)
	{
		$fiscal = false;

		$bdt = Bdt::with('equipamento','motorista_saida')->find($id);

		$data = Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s');

        $combustivel            =   pegaValorEnum('bdts', 'sai_combustivel');
        $oleo_motor				=	pegaValorEnum('bdts', 'sai_oleo_motor');
		$oleo_freio				=	pegaValorEnum('bdts', 'sai_oleo_freio');
		$fluido_radiador		=	pegaValorEnum('bdts', 'sai_fluido_radiador');
		$triangulo				=	pegaValorEnum('bdts', 'sai_triangulo');
		$macaco					=	pegaValorEnum('bdts', 'sai_macaco');
		$chave_roda				=	pegaValorEnum('bdts', 'sai_chave_roda');
		$extintor				=	pegaValorEnum('bdts', 'sai_extintor');
		$limpador_parabrisa		=	pegaValorEnum('bdts', 'sai_limpador_parabrisa');
		$sirene					=	pegaValorEnum('bdts', 'sai_sirene');
		$luz_lanterna_d			=	pegaValorEnum('bdts', 'sai_luz_lanterna_d');
		$luz_lanterna_t			=	pegaValorEnum('bdts', 'sai_luz_lanterna_t');
		$luz_farol				=	pegaValorEnum('bdts', 'sai_luz_farol');
		$luz_re					=	pegaValorEnum('bdts', 'sai_luz_re');
		$luz_freio				=	pegaValorEnum('bdts', 'sai_luz_freio');
		$luz_alerta				=	pegaValorEnum('bdts', 'sai_luz_alerta');
		$buzina					=	pegaValorEnum('bdts', 'sai_buzina');
		$pneu_d_e				=	pegaValorEnum('bdts', 'sai_pneu_d_e');
		$pneu_d_d				=	pegaValorEnum('bdts', 'sai_pneu_d_d');
		$pneu_t_e				=	pegaValorEnum('bdts', 'sai_pneu_t_e');
		$pneu_t_d				=	pegaValorEnum('bdts', 'sai_pneu_t_d');
		$estepe					=	pegaValorEnum('bdts', 'sai_estepe');
		$retrovisor_esq			=	pegaValorEnum('bdts', 'sai_retrovisor_esq');
		$retrovisor_dir			=	pegaValorEnum('bdts', 'sai_retrovisor_dir');
		$lanterna_d				=	pegaValorEnum('bdts', 'sai_lanterna_d');
		$lanterna_t				=	pegaValorEnum('bdts', 'sai_lanterna_t');
		$placa_d				=	pegaValorEnum('bdts', 'sai_placa_d');
		$placa_t				=	pegaValorEnum('bdts', 'sai_placa_t');
		$parachoque_d			=	pegaValorEnum('bdts', 'sai_parachoque_d');
		$parachoque_t			=	pegaValorEnum('bdts', 'sai_parachoque_t');
		$paralama_d_e			=	pegaValorEnum('bdts', 'sai_paralama_d_e');
		$paralama_d_d			=	pegaValorEnum('bdts', 'sai_paralama_d_d');
		$paralama_t_e			=	pegaValorEnum('bdts', 'sai_paralama_t_e');
		$paralama_t_d			=	pegaValorEnum('bdts', 'sai_paralama_t_d');
		$capo					=	pegaValorEnum('bdts', 'sai_capo');
		$portamala				=	pegaValorEnum('bdts', 'sai_portamala');
		$porta_d_e				=	pegaValorEnum('bdts', 'sai_porta_d_e');
		$porta_d_d				=	pegaValorEnum('bdts', 'sai_porta_d_d');
		$porta_t_e				=	pegaValorEnum('bdts', 'sai_porta_t_e');
		$porta_t_d				=	pegaValorEnum('bdts', 'sai_porta_t_d');
		$teto					=	pegaValorEnum('bdts', 'sai_teto');
		$parabrisa				=	pegaValorEnum('bdts', 'sai_parabrisa');
		$vidro_d_e				=	pegaValorEnum('bdts', 'sai_vidro_d_e');
		$vidro_d_d				=	pegaValorEnum('bdts', 'sai_vidro_d_d');
		$vidro_t_e				=	pegaValorEnum('bdts', 'sai_vidro_t_e');
		$vidro_t_d				=	pegaValorEnum('bdts', 'sai_vidro_t_d');
		$vidro_t				=	pegaValorEnum('bdts', 'sai_vidro_t');
		
		return view('bdt.saida', compact('bdt','fiscal','data','combustivel','oleo_motor','oleo_freio','fluido_radiador','triangulo','macaco','chave_roda','extintor','limpador_parabrisa','sirene','luz_lanterna_d','luz_lanterna_t','luz_farol','luz_re','luz_freio','luz_alerta','buzina','pneu_d_e','pneu_d_d','pneu_t_e','pneu_t_d','estepe','retrovisor_esq','retrovisor_dir','lanterna_d','lanterna_t','placa_d','placa_t','parachoque_d','parachoque_t','paralama_d_e','paralama_d_d','paralama_t_e','paralama_t_d','capo','portamala','porta_d_e','porta_d_d','porta_t_e','porta_t_d','teto','parabrisa','vidro_t','vidro_d_e','vidro_d_d','vidro_t_e','vidro_t_d'));
	}

	public function update_bdt_saida(Request $request)
	{
		// dd($request->all());
		$bdt = Bdt::find($request->bdt_id);
			
		$bdt->sai_odometro			 = $request->sai_odometro;
		$bdt->sai_data				 = $request->sai_data;
		$bdt->sai_combustivel		 = $request->sai_combustivel;
		$bdt->sai_oleo_motor		 = $request->sai_oleo_motor;
		$bdt->sai_oleo_freio		 = $request->sai_oleo_freio;
		$bdt->sai_fluido_radiador	 = $request->sai_fluido_radiador;
		$bdt->sai_triangulo			 = $request->sai_triangulo;
		$bdt->sai_macaco			 = $request->sai_macaco;
		$bdt->sai_chave_roda		 = $request->sai_chave_roda;
		$bdt->sai_extintor			 = $request->sai_extintor;
		$bdt->sai_limpador_parabrisa = $request->sai_limpador_parabrisa;
		$bdt->sai_sirene			 = $request->sai_sirene;
		$bdt->sai_luz_lanterna_d	 = $request->sai_luz_lanterna_d;
		$bdt->sai_luz_lanterna_t	 = $request->sai_luz_lanterna_t;
		$bdt->sai_luz_farol			 = $request->sai_luz_farol;
		$bdt->sai_luz_re			 = $request->sai_luz_re;
		$bdt->sai_luz_freio			 = $request->sai_luz_freio;
		$bdt->sai_luz_alerta		 = $request->sai_luz_alerta;
		$bdt->sai_buzina			 = $request->sai_buzina;
		$bdt->sai_pneu_d_e			 = $request->sai_pneu_d_e;
		$bdt->sai_pneu_d_d			 = $request->sai_pneu_d_d;
		$bdt->sai_pneu_t_e			 = $request->sai_pneu_t_e;
		$bdt->sai_pneu_t_d			 = $request->sai_pneu_t_d;
		$bdt->sai_estepe			 = $request->sai_estepe;
		$bdt->sai_retrovisor_esq	 = $request->sai_retrovisor_esq;
		$bdt->sai_retrovisor_dir	 = $request->sai_retrovisor_dir;
		$bdt->sai_lanterna_d		 = $request->sai_lanterna_d;
		$bdt->sai_lanterna_t		 = $request->sai_lanterna_t;
		$bdt->sai_placa_d			 = $request->sai_placa_d;
		$bdt->sai_placa_t			 = $request->sai_placa_t;
		$bdt->sai_parachoque_d		 = $request->sai_parachoque_d;
		$bdt->sai_parachoque_t		 = $request->sai_parachoque_t;
		$bdt->sai_paralama_d_e		 = $request->sai_paralama_d_e;
		$bdt->sai_paralama_d_d		 = $request->sai_paralama_d_d;
		$bdt->sai_paralama_t_e		 = $request->sai_paralama_t_e;
		$bdt->sai_paralama_t_d		 = $request->sai_paralama_t_d;
		$bdt->sai_capo				 = $request->sai_capo;
		$bdt->sai_portamala			 = $request->sai_portamala;
		$bdt->sai_porta_d_e			 = $request->sai_porta_d_e;
		$bdt->sai_porta_d_d			 = $request->sai_porta_d_d;
		$bdt->sai_porta_t_e			 = $request->sai_porta_t_e;
		$bdt->sai_porta_t_d			 = $request->sai_porta_t_d;
		$bdt->sai_teto				 = $request->sai_teto;
		$bdt->sai_parabrisa			 = $request->sai_parabrisa;
		$bdt->sai_vidro_d_e			 = $request->sai_vidro_d_e;
		$bdt->sai_vidro_d_d			 = $request->sai_vidro_d_d;
		$bdt->sai_vidro_t_e			 = $request->sai_vidro_t_e;
		$bdt->sai_vidro_t_d			 = $request->sai_vidro_t_d;
		$bdt->sai_vidro_t			 = $request->sai_vidro_t;

		$bdt->save();

		return redirect('equipa')->with('sucesso', 'BDT Realizado com sucesso!');
	}



	public function edit_bdt_saida_fiscal($id)
	{

		$fiscal = true;

		$bdt = Bdt::with('equipamento','motorista_saida')->find($id);

		// dd($bdt);

        $combustivel            =   pegaValorEnum('bdts', 'sai_combustivel');
        $oleo_motor				=	pegaValorEnum('bdts', 'sai_oleo_motor');
		$oleo_freio				=	pegaValorEnum('bdts', 'sai_oleo_freio');
		$fluido_radiador		=	pegaValorEnum('bdts', 'sai_fluido_radiador');
		$triangulo				=	pegaValorEnum('bdts', 'sai_triangulo');
		$macaco					=	pegaValorEnum('bdts', 'sai_macaco');
		$chave_roda				=	pegaValorEnum('bdts', 'sai_chave_roda');
		$extintor				=	pegaValorEnum('bdts', 'sai_extintor');
		$limpador_parabrisa		=	pegaValorEnum('bdts', 'sai_limpador_parabrisa');
		$sirene					=	pegaValorEnum('bdts', 'sai_sirene');
		$luz_lanterna_d			=	pegaValorEnum('bdts', 'sai_luz_lanterna_d');
		$luz_lanterna_t			=	pegaValorEnum('bdts', 'sai_luz_lanterna_t');
		$luz_farol				=	pegaValorEnum('bdts', 'sai_luz_farol');
		$luz_re					=	pegaValorEnum('bdts', 'sai_luz_re');
		$luz_freio				=	pegaValorEnum('bdts', 'sai_luz_freio');
		$luz_alerta				=	pegaValorEnum('bdts', 'sai_luz_alerta');
		$buzina					=	pegaValorEnum('bdts', 'sai_buzina');
		$pneu_d_e				=	pegaValorEnum('bdts', 'sai_pneu_d_e');
		$pneu_d_d				=	pegaValorEnum('bdts', 'sai_pneu_d_d');
		$pneu_t_e				=	pegaValorEnum('bdts', 'sai_pneu_t_e');
		$pneu_t_d				=	pegaValorEnum('bdts', 'sai_pneu_t_d');
		$estepe					=	pegaValorEnum('bdts', 'sai_estepe');
		$retrovisor_esq			=	pegaValorEnum('bdts', 'sai_retrovisor_esq');
		$retrovisor_dir			=	pegaValorEnum('bdts', 'sai_retrovisor_dir');
		$lanterna_d				=	pegaValorEnum('bdts', 'sai_lanterna_d');
		$lanterna_t				=	pegaValorEnum('bdts', 'sai_lanterna_t');
		$placa_d				=	pegaValorEnum('bdts', 'sai_placa_d');
		$placa_t				=	pegaValorEnum('bdts', 'sai_placa_t');
		$parachoque_d			=	pegaValorEnum('bdts', 'sai_parachoque_d');
		$parachoque_t			=	pegaValorEnum('bdts', 'sai_parachoque_t');
		$paralama_d_e			=	pegaValorEnum('bdts', 'sai_paralama_d_e');
		$paralama_d_d			=	pegaValorEnum('bdts', 'sai_paralama_d_d');
		$paralama_t_e			=	pegaValorEnum('bdts', 'sai_paralama_t_e');
		$paralama_t_d			=	pegaValorEnum('bdts', 'sai_paralama_t_d');
		$capo					=	pegaValorEnum('bdts', 'sai_capo');
		$portamala				=	pegaValorEnum('bdts', 'sai_portamala');
		$porta_d_e				=	pegaValorEnum('bdts', 'sai_porta_d_e');
		$porta_d_d				=	pegaValorEnum('bdts', 'sai_porta_d_d');
		$porta_t_e				=	pegaValorEnum('bdts', 'sai_porta_t_e');
		$porta_t_d				=	pegaValorEnum('bdts', 'sai_porta_t_d');
		$teto					=	pegaValorEnum('bdts', 'sai_teto');
		$parabrisa				=	pegaValorEnum('bdts', 'sai_parabrisa');
		$vidro_d_e				=	pegaValorEnum('bdts', 'sai_vidro_d_e');
		$vidro_d_d				=	pegaValorEnum('bdts', 'sai_vidro_d_d');
		$vidro_t_e				=	pegaValorEnum('bdts', 'sai_vidro_t_e');
		$vidro_t_d				=	pegaValorEnum('bdts', 'sai_vidro_t_d');
		$vidro_t				=	pegaValorEnum('bdts', 'sai_vidro_t');

		return view('bdt.saida_fiscal', compact('bdt','fiscal','combustivel','oleo_motor','oleo_freio','fluido_radiador','triangulo','macaco','chave_roda','extintor','limpador_parabrisa','sirene','luz_lanterna_d','luz_lanterna_t','luz_farol','luz_re','luz_freio','luz_alerta','buzina','pneu_d_e','pneu_d_d','pneu_t_e','pneu_t_d','estepe','retrovisor_esq','retrovisor_dir','lanterna_d','lanterna_t','placa_d','placa_t','parachoque_d','parachoque_t','paralama_d_e','paralama_d_d','paralama_t_e','paralama_t_d','capo','portamala','porta_d_e','porta_d_d','porta_t_e','porta_t_d','teto','parabrisa','vidro_t','vidro_d_e','vidro_d_d','vidro_t_e','vidro_t_d'));
	}

	public function update_bdt_saida_fiscal(Request $request)
	{
		$bdt = Bdt::find($request->bdt_id);
	
		$bdt->sai_observacoes = $request->sai_observacoes;
		$bdt->sai_fiscal_id   = Auth::user()->agente->id;

		$bdt->save();

		return redirect('equipa')->with('sucesso', 'BDT Realizado com sucesso!');

	}

	public function edit_bdt_entrada($id)
	{
		$fiscal = false;

		$bdt = Bdt::with('equipamento','motorista_saida')->find($id);

		$data = Carbon::now('America/Sao_Paulo')->format('Y-m-d H:i:s');

        $combustivel            =   pegaValorEnum('bdts', 'ent_combustivel');
        $oleo_motor				=	pegaValorEnum('bdts', 'ent_oleo_motor');
		$oleo_freio				=	pegaValorEnum('bdts', 'ent_oleo_freio');
		$fluido_radiador		=	pegaValorEnum('bdts', 'ent_fluido_radiador');
		$triangulo				=	pegaValorEnum('bdts', 'ent_triangulo');
		$macaco					=	pegaValorEnum('bdts', 'ent_macaco');
		$chave_roda				=	pegaValorEnum('bdts', 'ent_chave_roda');
		$extintor				=	pegaValorEnum('bdts', 'ent_extintor');
		$limpador_parabrisa		=	pegaValorEnum('bdts', 'ent_limpador_parabrisa');
		$sirene					=	pegaValorEnum('bdts', 'ent_sirene');
		$luz_lanterna_d			=	pegaValorEnum('bdts', 'ent_luz_lanterna_d');
		$luz_lanterna_t			=	pegaValorEnum('bdts', 'ent_luz_lanterna_t');
		$luz_farol				=	pegaValorEnum('bdts', 'ent_luz_farol');
		$luz_re					=	pegaValorEnum('bdts', 'ent_luz_re');
		$luz_freio				=	pegaValorEnum('bdts', 'ent_luz_freio');
		$luz_alerta				=	pegaValorEnum('bdts', 'ent_luz_alerta');
		$buzina					=	pegaValorEnum('bdts', 'ent_buzina');
		$pneu_d_e				=	pegaValorEnum('bdts', 'ent_pneu_d_e');
		$pneu_d_d				=	pegaValorEnum('bdts', 'ent_pneu_d_d');
		$pneu_t_e				=	pegaValorEnum('bdts', 'ent_pneu_t_e');
		$pneu_t_d				=	pegaValorEnum('bdts', 'ent_pneu_t_d');
		$estepe					=	pegaValorEnum('bdts', 'ent_estepe');
		$retrovisor_esq			=	pegaValorEnum('bdts', 'ent_retrovisor_esq');
		$retrovisor_dir			=	pegaValorEnum('bdts', 'ent_retrovisor_dir');
		$lanterna_d				=	pegaValorEnum('bdts', 'ent_lanterna_d');
		$lanterna_t				=	pegaValorEnum('bdts', 'ent_lanterna_t');
		$placa_d				=	pegaValorEnum('bdts', 'ent_placa_d');
		$placa_t				=	pegaValorEnum('bdts', 'ent_placa_t');
		$parachoque_d			=	pegaValorEnum('bdts', 'ent_parachoque_d');
		$parachoque_t			=	pegaValorEnum('bdts', 'ent_parachoque_t');
		$paralama_d_e			=	pegaValorEnum('bdts', 'ent_paralama_d_e');
		$paralama_d_d			=	pegaValorEnum('bdts', 'ent_paralama_d_d');
		$paralama_t_e			=	pegaValorEnum('bdts', 'ent_paralama_t_e');
		$paralama_t_d			=	pegaValorEnum('bdts', 'ent_paralama_t_d');
		$capo					=	pegaValorEnum('bdts', 'ent_capo');
		$portamala				=	pegaValorEnum('bdts', 'ent_portamala');
		$porta_d_e				=	pegaValorEnum('bdts', 'ent_porta_d_e');
		$porta_d_d				=	pegaValorEnum('bdts', 'ent_porta_d_d');
		$porta_t_e				=	pegaValorEnum('bdts', 'ent_porta_t_e');
		$porta_t_d				=	pegaValorEnum('bdts', 'ent_porta_t_d');
		$teto					=	pegaValorEnum('bdts', 'ent_teto');
		$parabrisa				=	pegaValorEnum('bdts', 'ent_parabrisa');
		$vidro_d_e				=	pegaValorEnum('bdts', 'ent_vidro_d_e');
		$vidro_d_d				=	pegaValorEnum('bdts', 'ent_vidro_d_d');
		$vidro_t_e				=	pegaValorEnum('bdts', 'ent_vidro_t_e');
		$vidro_t_d				=	pegaValorEnum('bdts', 'ent_vidro_t_d');
		$vidro_t				=	pegaValorEnum('bdts', 'ent_vidro_t');
		
		return view('bdt.entrada', compact('bdt','fiscal','data','combustivel','oleo_motor','oleo_freio','fluido_radiador','triangulo','macaco','chave_roda','extintor','limpador_parabrisa','sirene','luz_lanterna_d','luz_lanterna_t','luz_farol','luz_re','luz_freio','luz_alerta','buzina','pneu_d_e','pneu_d_d','pneu_t_e','pneu_t_d','estepe','retrovisor_esq','retrovisor_dir','lanterna_d','lanterna_t','placa_d','placa_t','parachoque_d','parachoque_t','paralama_d_e','paralama_d_d','paralama_t_e','paralama_t_d','capo','portamala','porta_d_e','porta_d_d','porta_t_e','porta_t_d','teto','parabrisa','vidro_t','vidro_d_e','vidro_d_d','vidro_t_e','vidro_t_d'));
	}

	public function update_bdt_entrada(Request $request)
	{
		// dd($request->all());
		$bdt = Bdt::find($request->bdt_id);
		
		$bdt->ent_data				 = $request->data;
		$bdt->ent_motorista_id 	     = Auth::user()->agente->id;
		$bdt->ent_odometro			 = $request->ent_odometro;
		$bdt->ent_data				 = $request->ent_data;
		$bdt->ent_combustivel		 = $request->ent_combustivel;
		$bdt->ent_oleo_motor		 = $request->ent_oleo_motor;
		$bdt->ent_oleo_freio		 = $request->ent_oleo_freio;
		$bdt->ent_fluido_radiador	 = $request->ent_fluido_radiador;
		$bdt->ent_triangulo			 = $request->ent_triangulo;
		$bdt->ent_macaco			 = $request->ent_macaco;
		$bdt->ent_chave_roda		 = $request->ent_chave_roda;
		$bdt->ent_extintor			 = $request->ent_extintor;
		$bdt->ent_limpador_parabrisa = $request->ent_limpador_parabrisa;
		$bdt->ent_sirene			 = $request->ent_sirene;
		$bdt->ent_luz_lanterna_d	 = $request->ent_luz_lanterna_d;
		$bdt->ent_luz_lanterna_t	 = $request->ent_luz_lanterna_t;
		$bdt->ent_luz_farol			 = $request->ent_luz_farol;
		$bdt->ent_luz_re			 = $request->ent_luz_re;
		$bdt->ent_luz_freio			 = $request->ent_luz_freio;
		$bdt->ent_luz_alerta		 = $request->ent_luz_alerta;
		$bdt->ent_buzina			 = $request->ent_buzina;
		$bdt->ent_pneu_d_e			 = $request->ent_pneu_d_e;
		$bdt->ent_pneu_d_d			 = $request->ent_pneu_d_d;
		$bdt->ent_pneu_t_e			 = $request->ent_pneu_t_e;
		$bdt->ent_pneu_t_d			 = $request->ent_pneu_t_d;
		$bdt->ent_estepe			 = $request->ent_estepe;
		$bdt->ent_retrovisor_esq	 = $request->ent_retrovisor_esq;
		$bdt->ent_retrovisor_dir	 = $request->ent_retrovisor_dir;
		$bdt->ent_lanterna_d		 = $request->ent_lanterna_d;
		$bdt->ent_lanterna_t		 = $request->ent_lanterna_t;
		$bdt->ent_placa_d			 = $request->ent_placa_d;
		$bdt->ent_placa_t			 = $request->ent_placa_t;
		$bdt->ent_parachoque_d		 = $request->ent_parachoque_d;
		$bdt->ent_parachoque_t		 = $request->ent_parachoque_t;
		$bdt->ent_paralama_d_e		 = $request->ent_paralama_d_e;
		$bdt->ent_paralama_d_d		 = $request->ent_paralama_d_d;
		$bdt->ent_paralama_t_e		 = $request->ent_paralama_t_e;
		$bdt->ent_paralama_t_d		 = $request->ent_paralama_t_d;
		$bdt->ent_capo				 = $request->ent_capo;
		$bdt->ent_portamala			 = $request->ent_portamala;
		$bdt->ent_porta_d_e			 = $request->ent_porta_d_e;
		$bdt->ent_porta_d_d			 = $request->ent_porta_d_d;
		$bdt->ent_porta_t_e			 = $request->ent_porta_t_e;
		$bdt->ent_porta_t_d			 = $request->ent_porta_t_d;
		$bdt->ent_teto				 = $request->ent_teto;
		$bdt->ent_parabrisa			 = $request->ent_parabrisa;
		$bdt->ent_vidro_d_e			 = $request->ent_vidro_d_e;
		$bdt->ent_vidro_d_d			 = $request->ent_vidro_d_d;
		$bdt->ent_vidro_t_e			 = $request->ent_vidro_t_e;
		$bdt->ent_vidro_t_d			 = $request->ent_vidro_t_d;
		$bdt->ent_vidro_t			 = $request->ent_vidro_t;

		$bdt->save();

		return redirect('equipa')->with('sucesso', 'BDT Realizado com sucesso!');
	}

	public function edit_bdt_entrada_fiscal($id)
	{
		$fiscal = true;

		$bdt = Bdt::with('equipamento','motorista_saida')->find($id);
	
		$combustivel            =   pegaValorEnum('bdts', 'ent_combustivel');
        $oleo_motor				=	pegaValorEnum('bdts', 'ent_oleo_motor');
		$oleo_freio				=	pegaValorEnum('bdts', 'ent_oleo_freio');
		$fluido_radiador		=	pegaValorEnum('bdts', 'ent_fluido_radiador');
		$triangulo				=	pegaValorEnum('bdts', 'ent_triangulo');
		$macaco					=	pegaValorEnum('bdts', 'ent_macaco');
		$chave_roda				=	pegaValorEnum('bdts', 'ent_chave_roda');
		$extintor				=	pegaValorEnum('bdts', 'ent_extintor');
		$limpador_parabrisa		=	pegaValorEnum('bdts', 'ent_limpador_parabrisa');
		$sirene					=	pegaValorEnum('bdts', 'ent_sirene');
		$luz_lanterna_d			=	pegaValorEnum('bdts', 'ent_luz_lanterna_d');
		$luz_lanterna_t			=	pegaValorEnum('bdts', 'ent_luz_lanterna_t');
		$luz_farol				=	pegaValorEnum('bdts', 'ent_luz_farol');
		$luz_re					=	pegaValorEnum('bdts', 'ent_luz_re');
		$luz_freio				=	pegaValorEnum('bdts', 'ent_luz_freio');
		$luz_alerta				=	pegaValorEnum('bdts', 'ent_luz_alerta');
		$buzina					=	pegaValorEnum('bdts', 'ent_buzina');
		$pneu_d_e				=	pegaValorEnum('bdts', 'ent_pneu_d_e');
		$pneu_d_d				=	pegaValorEnum('bdts', 'ent_pneu_d_d');
		$pneu_t_e				=	pegaValorEnum('bdts', 'ent_pneu_t_e');
		$pneu_t_d				=	pegaValorEnum('bdts', 'ent_pneu_t_d');
		$estepe					=	pegaValorEnum('bdts', 'ent_estepe');
		$retrovisor_esq			=	pegaValorEnum('bdts', 'ent_retrovisor_esq');
		$retrovisor_dir			=	pegaValorEnum('bdts', 'ent_retrovisor_dir');
		$lanterna_d				=	pegaValorEnum('bdts', 'ent_lanterna_d');
		$lanterna_t				=	pegaValorEnum('bdts', 'ent_lanterna_t');
		$placa_d				=	pegaValorEnum('bdts', 'ent_placa_d');
		$placa_t				=	pegaValorEnum('bdts', 'ent_placa_t');
		$parachoque_d			=	pegaValorEnum('bdts', 'ent_parachoque_d');
		$parachoque_t			=	pegaValorEnum('bdts', 'ent_parachoque_t');
		$paralama_d_e			=	pegaValorEnum('bdts', 'ent_paralama_d_e');
		$paralama_d_d			=	pegaValorEnum('bdts', 'ent_paralama_d_d');
		$paralama_t_e			=	pegaValorEnum('bdts', 'ent_paralama_t_e');
		$paralama_t_d			=	pegaValorEnum('bdts', 'ent_paralama_t_d');
		$capo					=	pegaValorEnum('bdts', 'ent_capo');
		$portamala				=	pegaValorEnum('bdts', 'ent_portamala');
		$porta_d_e				=	pegaValorEnum('bdts', 'ent_porta_d_e');
		$porta_d_d				=	pegaValorEnum('bdts', 'ent_porta_d_d');
		$porta_t_e				=	pegaValorEnum('bdts', 'ent_porta_t_e');
		$porta_t_d				=	pegaValorEnum('bdts', 'ent_porta_t_d');
		$teto					=	pegaValorEnum('bdts', 'ent_teto');
		$parabrisa				=	pegaValorEnum('bdts', 'ent_parabrisa');
		$vidro_d_e				=	pegaValorEnum('bdts', 'ent_vidro_d_e');
		$vidro_d_d				=	pegaValorEnum('bdts', 'ent_vidro_d_d');
		$vidro_t_e				=	pegaValorEnum('bdts', 'ent_vidro_t_e');
		$vidro_t_d				=	pegaValorEnum('bdts', 'ent_vidro_t_d');
		$vidro_t				=	pegaValorEnum('bdts', 'ent_vidro_t');

		return view('bdt.entrada_fiscal', compact('bdt','fiscal','combustivel','oleo_motor','oleo_freio','fluido_radiador','triangulo','macaco','chave_roda','extintor','limpador_parabrisa','sirene','luz_lanterna_d','luz_lanterna_t','luz_farol','luz_re','luz_freio','luz_alerta','buzina','pneu_d_e','pneu_d_d','pneu_t_e','pneu_t_d','estepe','retrovisor_esq','retrovisor_dir','lanterna_d','lanterna_t','placa_d','placa_t','parachoque_d','parachoque_t','paralama_d_e','paralama_d_d','paralama_t_e','paralama_t_d','capo','portamala','porta_d_e','porta_d_d','porta_t_e','porta_t_d','teto','parabrisa','vidro_t','vidro_d_e','vidro_d_d','vidro_t_e','vidro_t_d'));
	}

	public function update_bdt_entrada_fiscal(Request $request)
	{

		$bdt = Bdt::find($request->bdt_id);
	
		$bdt->ent_observacoes = $request->ent_observacoes;
		$bdt->ent_fiscal_id   = Auth::user()->agente->id;

		$bdt->save();

		return redirect('equipa')->with('sucesso', 'BDT Realizado com sucesso!');

		// dd($request->all());
	}

    // public function create($id)
    // {
    //     $equipamento = Equipamento::with('equipamentotipo','agente')->find($id);
    //     // esse id é do equipamento

    //     // dd($testa->equipamentotipo->bdt);

    //     if($equipamento->equipamentotipo->bdt == 1)
    //     {
    //         $data = Carbon::now('America/Sao_Paulo')->format('Y-m-d\TH:m');

    //      $combustivel            =   pegaValorEnum('bdts', 'sai_combustivel');
    //      $oleo_motor				=	pegaValorEnum('bdts', 'sai_oleo_motor');
	// 	    $oleo_freio				=	pegaValorEnum('bdts', 'sai_oleo_freio');
	// 	    $fluido_radiador		=	pegaValorEnum('bdts', 'sai_fluido_radiador');
	// 	    $triangulo				=	pegaValorEnum('bdts', 'sai_triangulo');
	// 	    $macaco					=	pegaValorEnum('bdts', 'sai_macaco');
	// 	    $chave_roda				=	pegaValorEnum('bdts', 'sai_chave_roda');
	// 	    $extintor				=	pegaValorEnum('bdts', 'sai_extintor');
	// 	    $limpador_parabrisa		=	pegaValorEnum('bdts', 'sai_limpador_parabrisa');
	// 	    $sirene					=	pegaValorEnum('bdts', 'sai_sirene');
	// 	    $luz_lanterna_d			=	pegaValorEnum('bdts', 'sai_luz_lanterna_d');
	// 	    $luz_lanterna_t			=	pegaValorEnum('bdts', 'sai_luz_lanterna_t');
	// 	    $luz_farol				=	pegaValorEnum('bdts', 'sai_luz_farol');
	// 	    $luz_re					=	pegaValorEnum('bdts', 'sai_luz_re');
	// 	    $luz_freio				=	pegaValorEnum('bdts', 'sai_luz_freio');
	// 	    $luz_alerta				=	pegaValorEnum('bdts', 'sai_luz_alerta');
	// 	    $buzina					=	pegaValorEnum('bdts', 'sai_buzina');
	// 	    $pneu_d_e				=	pegaValorEnum('bdts', 'sai_pneu_d_e');
	// 	    $pneu_d_d				=	pegaValorEnum('bdts', 'sai_pneu_d_d');
	// 	    $pneu_t_e				=	pegaValorEnum('bdts', 'sai_pneu_t_e');
	// 	    $pneu_t_d				=	pegaValorEnum('bdts', 'sai_pneu_t_d');
	// 	    $estepe					=	pegaValorEnum('bdts', 'sai_estepe');
	// 	    $retrovisor_esq			=	pegaValorEnum('bdts', 'sai_retrovisor_esq');
	// 	    $retrovisor_dir			=	pegaValorEnum('bdts', 'sai_retrovisor_dir');
	// 	    $lanterna_d				=	pegaValorEnum('bdts', 'sai_lanterna_d');
	// 	    $lanterna_t				=	pegaValorEnum('bdts', 'sai_lanterna_t');
	// 	    $placa_d				=	pegaValorEnum('bdts', 'sai_placa_d');
	// 	    $placa_t				=	pegaValorEnum('bdts', 'sai_placa_t');
	// 	    $parachoque_d			=	pegaValorEnum('bdts', 'sai_parachoque_d');
	// 	    $parachoque_t			=	pegaValorEnum('bdts', 'sai_parachoque_t');
	// 	    $paralama_d_e			=	pegaValorEnum('bdts', 'sai_paralama_d_e');
	// 	    $paralama_d_d			=	pegaValorEnum('bdts', 'sai_paralama_d_d');
	// 	    $paralama_t_e			=	pegaValorEnum('bdts', 'sai_paralama_t_e');
	// 	    $paralama_t_d			=	pegaValorEnum('bdts', 'sai_paralama_t_d');
	// 	    $capo					=	pegaValorEnum('bdts', 'sai_capo');
	// 	    $portamala				=	pegaValorEnum('bdts', 'sai_portamala');
	// 	    $porta_d_e				=	pegaValorEnum('bdts', 'sai_porta_d_e');
	// 	    $porta_d_d				=	pegaValorEnum('bdts', 'sai_porta_d_d');
	// 	    $porta_t_e				=	pegaValorEnum('bdts', 'sai_porta_t_e');
	// 	    $porta_t_d				=	pegaValorEnum('bdts', 'sai_porta_t_d');
	// 	    $teto					=	pegaValorEnum('bdts', 'sai_teto');
	// 	    $parabrisa				=	pegaValorEnum('bdts', 'sai_parabrisa');
	// 	    $vidro_d_e				=	pegaValorEnum('bdts', 'sai_vidro_d_e');
	// 	    $vidro_d_d				=	pegaValorEnum('bdts', 'sai_vidro_d_d');
	// 	    $vidro_t_e				=	pegaValorEnum('bdts', 'sai_vidro_t_e');
	// 	    $vidro_t_d				=	pegaValorEnum('bdts', 'sai_vidro_t_d');
	// 	    $vidro_t				=	pegaValorEnum('bdts', 'sai_vidro_t');

    //         return view('bdt.create',compact('data',
	// 		    'combustivel','oleo_motor','oleo_freio','fluido_radiador','triangulo','macaco','chave_roda','extintor','limpador_parabrisa','sirene','luz_lanterna_d','luz_lanterna_t','luz_farol','luz_re','luz_freio','luz_alerta','buzina','pneu_d_e','pneu_d_d','pneu_t_e','pneu_t_d','estepe','retrovisor_esq','retrovisor_dir','lanterna_d','lanterna_t','placa_d','placa_t','parachoque_d','parachoque_t','paralama_d_e','paralama_d_d','paralama_t_e','paralama_t_d','capo','portamala','porta_d_e','porta_d_d','porta_t_e','porta_t_d','teto','parabrisa','vidro_t','vidro_d_e','vidro_d_d','vidro_t_e','vidro_t_d','equipamento'
	// 	    ));

    //     }else{

    //         return back()->withInput()->with('error', 'Você não pode acessar esse menu.');
    //     }
    // }

    // public function store(Request $request)
    // {   
    //     // dd($request->all());

	// 	$bdt = new Bdt;

	// 	$bdt->equipamento_id	     = $request->equipamento_id;
	// 	$bdt->sai_odometro			 = $request->sai_odometro;
	// 	$bdt->sai_data				 = $request->sai_data;
	// 	$bdt->sai_motorista_id		 = $request->sai_motorista_id;
	// 	$bdt->sai_combustivel		 = $request->sai_combustivel;
	// 	$bdt->sai_oleo_motor		 = $request->sai_oleo_motor;
	// 	$bdt->sai_oleo_freio		 = $request->sai_oleo_freio;
	// 	$bdt->sai_fluido_radiador	 = $request->sai_fluido_radiador;
	// 	$bdt->sai_triangulo			 = $request->sai_triangulo;
	// 	$bdt->sai_macaco			 = $request->sai_macaco;
	// 	$bdt->sai_chave_roda		 = $request->sai_chave_roda;
	// 	$bdt->sai_extintor			 = $request->sai_extintor;
	// 	$bdt->sai_limpador_parabrisa = $request->sai_limpador_parabrisa;
	// 	$bdt->sai_sirene			 = $request->sai_sirene;
	// 	$bdt->sai_luz_lanterna_d	 = $request->sai_luz_lanterna_d;
	// 	$bdt->sai_luz_lanterna_t	 = $request->sai_luz_lanterna_t;
	// 	$bdt->sai_luz_farol			 = $request->sai_luz_farol;
	// 	$bdt->sai_luz_re			 = $request->sai_luz_re;
	// 	$bdt->sai_luz_freio			 = $request->sai_luz_freio;
	// 	$bdt->sai_luz_alerta		 = $request->sai_luz_alerta;
	// 	$bdt->sai_buzina			 = $request->sai_buzina;
	// 	$bdt->sai_pneu_d_e			 = $request->sai_pneu_d_e;
	// 	$bdt->sai_pneu_d_d			 = $request->sai_pneu_d_d;
	// 	$bdt->sai_pneu_t_e			 = $request->sai_pneu_t_e;
	// 	$bdt->sai_pneu_t_d			 = $request->sai_pneu_t_d;
	// 	$bdt->sai_estepe			 = $request->sai_estepe;
	// 	$bdt->sai_retrovisor_esq	 = $request->sai_retrovisor_esq;
	// 	$bdt->sai_retrovisor_dir	 = $request->sai_retrovisor_dir;
	// 	$bdt->sai_lanterna_d		 = $request->sai_lanterna_d;
	// 	$bdt->sai_lanterna_t		 = $request->sai_lanterna_t;
	// 	$bdt->sai_placa_d			 = $request->sai_placa_d;
	// 	$bdt->sai_placa_t			 = $request->sai_placa_t;
	// 	$bdt->sai_parachoque_d		 = $request->sai_parachoque_d;
	// 	$bdt->sai_parachoque_t		 = $request->sai_parachoque_t;
	// 	$bdt->sai_paralama_d_e		 = $request->sai_paralama_d_e;
	// 	$bdt->sai_paralama_d_d		 = $request->sai_paralama_d_d;
	// 	$bdt->sai_paralama_t_e		 = $request->sai_paralama_t_e;
	// 	$bdt->sai_paralama_t_d		 = $request->sai_paralama_t_d;
	// 	$bdt->sai_capo				 = $request->sai_capo;
	// 	$bdt->sai_portamala			 = $request->sai_portamala;
	// 	$bdt->sai_porta_d_e			 = $request->sai_porta_d_e;
	// 	$bdt->sai_porta_d_d			 = $request->sai_porta_d_d;
	// 	$bdt->sai_porta_t_e			 = $request->sai_porta_t_e;
	// 	$bdt->sai_porta_t_d			 = $request->sai_porta_t_d;
	// 	$bdt->sai_teto				 = $request->sai_teto;
	// 	$bdt->sai_parabrisa			 = $request->sai_parabrisa;
	// 	$bdt->sai_vidro_d_e			 = $request->sai_vidro_d_e;
	// 	$bdt->sai_vidro_d_d			 = $request->sai_vidro_d_d;
	// 	$bdt->sai_vidro_t_e			 = $request->sai_vidro_t_e;
	// 	$bdt->sai_vidro_t_d			 = $request->sai_vidro_t_d;
	// 	$bdt->sai_vidro_t			 = $request->sai_vidro_t;


	// 	$bdt->save();

	// 	return redirect('equipa')->with('sucesso', 'BDT criado com sucesso!');
    // }
}
