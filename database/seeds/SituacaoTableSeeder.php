<?php

use Illuminate\Database\Seeder;

class SituacaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$situacoes = [
				['nome'	=>	'FÉRIAS', 	'qtd_dias_padrao'	=> '30'],
				['nome'	=>	'DEMISSÃO', 	'qtd_dias_padrao'	=> '-1'],
				['nome'	=>	'ÓBITO', 	'qtd_dias_padrao'	=> '-1'],
				['nome'	=>	'APOSENTADORIA', 	'qtd_dias_padrao'	=> '-1'],
				['nome'	=>	'LICENÇA PRÊMIO POR ASSIDUIDADE', 	'qtd_dias_padrao'	=> '152'],
				['nome'	=>	'LICENÇA PARA TRATAMENTO DE SAÚDE', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA POR MOTIVO DE DOENÇA EM PESSOA DA FAMÍLIA', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA PARA TRATAR DE INTERESSES PARTICULARES', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA PARA CAPACITAÇÃO', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA PARA ATIVIDADE POLÍTICA', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA PARA DESEMPENHO DE MANDATO CLASSISTA', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA POR MOTIVO DE AFASTAMENTO DE CÔNJUGE', 	'qtd_dias_padrao'	=> '0'],
				['nome'	=>	'LICENÇA MATERNIDADE', 	'qtd_dias_padrao'	=> '120'],
				['nome'	=>	'LICENÇA PATERNIDADE', 	'qtd_dias_padrao'	=> '5'],
				['nome'	=>	'LICENÇA ADOTANTE', 	'qtd_dias_padrao'	=> '120'],
				['nome'	=>	'LICENÇA CASAMENTO', 	'qtd_dias_padrao'	=> '3'],
				['nome'	=>	'LICENÇA ÓBITO', 	'qtd_dias_padrao'	=> '2'],
				['nome'	=>	'LICENÇA PARA O SERVIÇO MILITAR', 	'qtd_dias_padrao'	=> '99999'],
				['nome'	=>	'AFASTAMENTO PARA SERVIR A OUTRO ORGÃO', 	'qtd_dias_padrao'	=> '99999'],
				['nome'	=>	'AFASTAMENTO PARA O EXERCÍCIO DE MANDATO ELETIVO', 	'qtd_dias_padrao'	=> '99999'],
				['nome'	=>	'AFASTAMENTO PARA ESTUDO NO EXTERIOR', 	'qtd_dias_padrao'	=> '99999'],
				['nome'	=>	'PRONTO', 	'qtd_dias_padrao'	=> '999999']
			];

			foreach ($situacoes as $situacao) {
				DB::table('situacoes')->updateOrInsert($situacao, $situacao);
			}
    }
}
