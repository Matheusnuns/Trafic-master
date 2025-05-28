<?php

use Illuminate\Database\Seeder;

class LeiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $leis = [
            [
                'nome_lei' => '162 I - Dirigir veículo sem possuir permissão para dirigir'
            ],
            [
                'nome_lei' => '162 II - Dirigir veículo com CNH com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '162 II - Dirigir veículo com CNH ou Permissão para Dirigir cassada ou com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '162 I - Dirigir veículo sem possuir CNH'
            ],
            [
                'nome_lei' => '162 II - Dirigir veículo com Permissão para dirigir cassada'
            ],
            [
                'nome_lei' => '162 II - Dirigir veículo com CNH cassada'
            ],
            [
                'nome_lei' => '162 I - Dirigir veículo sem possuir CNH ou Permissão para Dirigir'
            ],
            [
                'nome_lei' => '162 II - Dirigir veículo com Permissão para dirigir com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '162 III - Dirigir veículo com CNH de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '162 III - Dirigir veículo com CNH ou Permissão para Dirigir de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '162 V - Dirigir veículo com validade da CNH vencida a mais de trinta dias'
            ],
            [
                'nome_lei' => '162 III - Dirigir veículo com Permissão para dirigir de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '162 VI - Dirigir veículo sem usar lentes corretoras de visão'
            ],
            [
                'nome_lei' => '162 VI - Dirigir veículo sem usar aparelho auxiliar de audição'
            ],
            [
                'nome_lei' => '162 VI - Dirigir o veículo sem usar lentes corretoras de visão, aparelho auxiliar de audição, de prótese física ou as adaptações do veículo impostas por ocasião da concessão ou renovação da licença para conduzir'
            ],
            [
                'nome_lei' => '162 VI - Dirigir veículo sem usar prótese física'
            ],
            [
                'nome_lei' => '162 VI - Dirigir veículo sem usar sem usar as adaptações do veículo impostas por ocasião da concessão'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa que não possua CNH'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa que não possua Permissão para dirigir'
            ],
            [
                'nome_lei' => '162 VI - Dirigir veículo sem a renovação da licença para conduzir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa que não possua CNH ou permissão para dirigir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com CNH ou Permissão para Dirigir cassada ou com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com Permissão para dirigir com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com Permissão para dirigir cassada'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com CNH cassada'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com CNH com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com CNH ou Permissão para Dirigir de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '163 c/c 162 III - Entregar veículo a pessoa com CNH de categoria diferente da do veículo'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com Permissão para Dirigir, de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem usar lentes corretoras de visão, aparelho auxiliar de audição, de prótese física ou as adaptações do veículo impostas por ocasião da concessão ou renovação da licença para conduzir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem usar lentes corretoras de visão'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa com validade da CNH vencida a mais de trinta dias'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem usar prótese física'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem usar aparelho auxiliar de audição'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo automotor e passe a conduzi-lo na via, a pessoa que não possua CNH'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem a licença para conduzir'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo automotor e passe a conduzi-lo na via, pessoa com CNH ou Permissão para Dirigir cassada ou com suspensão do direito de dirigir'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo automotor e passe a conduzi-lo na via a pessoa que não possua CNH ou Permissão para Dirigir'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com Permissão para Dirigir suspensa'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com CNH cassada'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com Permissão para Dirigir cassada'
            ],
            [
                'nome_lei' => '163 c/c 162 II - Permitir posse/ condução veículo pessoa com CNH/ PPD com suspensão direito de dirigir'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo automotor e passe a conduzi-lo na via, a pessoa que não possua Permissão para Dirigir'
            ],
            [
                'nome_lei' => '163 - Entregar a direção do veículo a pessoa sem usar as adaptações do veículo, impostas por ocasião da concessão'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo automotor e passe a conduzi-lo na via, a pessoa com CNH ou Permissão para Dirigir de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com CNH de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com Permissão para Dirigir de categoria diferente da do veículo que esteja conduzindo'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa com validade da CNH vencida a mais de trinta dias'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa sem usar aparelho auxiliar de audição'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa sem usar lentes corretoras de visão'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa sem usar lentes corretoras de visão , aparelho auxiliar de audição, de prótese física ou as adaptações do veículo impostas por ocasião da concessão ou renovação da licença para conduzir'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa sem usar prótese física'
            ],
            [
                'nome_lei' => '163 c/c 162 VI - Permitir posse/ condução do veículo sem adaptações impostas concessão/ renovação de licença para conduzir'
            ],
            [
                'nome_lei' => '165 - Dirigir sob influência de álcool, em nível superior a seis decigramas por litro de sangue ou de qualquer substância entorpecente ou que determine dependência física ou psíquica'
            ],
            [
                'nome_lei' => '164 - Permitir que tome posse do veículo e passe a conduzi-lo na via a pessoa sem a renovação de licença para conduzir'
            ],
            [
                'nome_lei' => '166 - Confiar ou entregar a direção do veículo a pessoa que, mesmo habilitada, por seu estado físico ou psíquico, não estiver em condições de dirigi-lo com segurança'
            ],
            [
                'nome_lei' => '166 - Entregar a direção de veículo a pessoa que, mesmo habilitada, por seu estado físico ou psíquico, não estiver em condições de dirigi-lo com segurança'
            ],
            [
                'nome_lei' => '167 - Deixar o condutor ou passageiro de usar o cinto de segurança'
            ],
            [
                'nome_lei' => '167 - Deixar o condutor de usar o cinto de segurança'
            ],
            [
                'nome_lei' => '167 - Deixar o passageiro de usar o cinto de segurança'
            ],
            [
                'nome_lei' => '168 - Transportar criança sem observância das normas de segurança estabelecidas pelo CTB'
            ],
            [
                'nome_lei' => '169 - Dirigir sem atenção ou sem os cuidados indispensáveis a segurança'
            ],
            [
                'nome_lei' => '171 - Usar o veículo para arremessar detritos sobre os pedestres'
            ],
            [
                'nome_lei' => '171 - Usar o veículo para arremessar detritos sobre os veículos'
            ],
            [
                'nome_lei' => '170 - Dirigir ameaçando os pedestres que estejam atravessando a via pública ou os demais veículos'
            ],
            [
                'nome_lei' => '165 - Dirigir sob a influência de álcool'
            ],
            [
                'nome_lei' => '165 - Dirigir sob influência substância de entorpecente ou que determine dependência física/ psíquica'
            ],
            [
                'nome_lei' => '170 - Dirigir ameaçando os pedestres que estejam atravessando a via pública'
            ],
            [
                'nome_lei' => '166 - Confiar a direção de veículo a pessoa que, mesmo habilitada, por seu estado físico ou psíquico, não estiver em condições de dirigi-lo com segurança'
            ],
            [
                'nome_lei' => '171 - Usar o veículo para arremessar água ou detritos sobre os pedestres ou veículos'
            ],
            [
                'nome_lei' => '171 - Usar o veículo para arremessar água ou detritos sobre os pedestres'
            ],
            [
                'nome_lei' => '165 - Dirigir sob influência de substância que determine dependência física ou psíquica'
            ],
            [
                'nome_lei' => '172 - Abandonar na via pública objetos ou substâncias'
            ],
            [
                'nome_lei' => '171 - Usar o veículo para arremessar água ou detritos sobre os veículos'
            ],
            [
                'nome_lei' => '173 - Disputar corrida por espírito de emulação'
            ],
            [
                'nome_lei' => '174 - Promover na via, competição esportiva, eventos organizados, exibição e demonstração de perícia em manobras de veículos, sem permissão da Autoridade de Trânsito com circunscrição sob a via'
            ],
            [
                'nome_lei' => '170 - Dirigir ameaçando os demais veículos'
            ],
            [
                'nome_lei' => '172 - Atirar do veículo ou abandonar na via pública objetos ou substâncias'
            ],
            [
                'nome_lei' => '172 - Atirar do veículo na via pública objetos ou substâncias'
            ],
            [
                'nome_lei' => '174 - Promover na via eventos organizados sem permissão'
            ],
            [
                'nome_lei' => '174 - Promover na via competição esportiva sem permissão'
            ],
            [
                'nome_lei' => '176 I - Deixar o Condutor envolvido em acidentes com vítima de providenciar socorro a vítima, podendo fazê-lo'
            ],
            [
                'nome_lei' => '176 I - Deixar o Condutor envolvido em acidentes com vítima de prestar socorro a vítima, podendo fazê-lo'
            ],
            [
                'nome_lei' => '174 - Promover na via exibição e demonstração de perícia em manobra de veículo'
            ],
            [
                'nome_lei' => '174 - Participar na via, como condutor de competição esportiva, eventos organizados, exibição e demonstração de perícia em manobra de veículo, sem permissão da Autoridade de Trânsito com circunscrição sobre a via'
            ],
            [
                'nome_lei' => '174 - Participar na via como condutor em competição esportiva, sem permissão'
            ],
            [
                'nome_lei' => '175 - Utilizar-se do veículo para, em via pública, demonstrar ou exibir manobra perigosa, arrancada brusca, derrapagem ou frenagem com deslizamento ou arrastamento de pneus'
            ],
            [
                'nome_lei' => '175 - Utilizar-se de veículo para, em via pública, demonstrar ou exibir manobra perigosa com deslizamento ou arrastamento de pneus'
            ],
            [
                'nome_lei' => '175 - Utilizar-se de veículo para, em via pública, demonstrar ou exibir arrancada brusca com deslizamento ou arrastamento de pneus'
            ],
            [
                'nome_lei' => '179 I - Fazer reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção em que o veículo esteja devidamente sinalizado, em pista de rolamento de rodovia e via de trânsito rápido'
            ],
            [
                'nome_lei' => '179 I - Deixar que se faça reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção em que o veículo esteja devidamente sinalizado, em pista de rolamento de rodovia e via de trânsito rápido'
            ],
            [
                'nome_lei' => '175 - Utilizar-se de veículo para, em via pública, demonstrar ou exibir derrapagem ou frenagem com deslizamento ou arrastamento de pneus'
            ],
            [
                'nome_lei' => '179 II - Fazer reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção em que o veículo esteja devidamente sinalizado em outras vias além de pista de rolamento de rodovia e de vias de trânsito rápido'
            ],
            [
                'nome_lei' => '179 II - Deixar que se faça reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção em que o veículo esteja devidamente sinalizado em outras vias além de pista de rolamento de rodovia e de vias de trânsito rápido'
            ],
            [
                'nome_lei' => '176 I - Deixar o condutor envolvido em acidente com vítima de prestar ou providenciar socorro à vítima, podendo fazê-lo'
            ],
            [
                'nome_lei' => '176 II - Deixar o condutor envolvido em acidentes com vítima de adotar providências, podendo fazê-lo, no sentido de evitar perigo para o trânsito no local'
            ],
            [
                'nome_lei' => '174 - Participar na via, como condutor de exibição e demonstração de perícia em manobra de veículo, sem permissão da Autoridade de Trânsito com circunscrição sobre a via'
            ],
            [
                'nome_lei' => '176 III - Deixar o condutor envolvido em acidentes com vítima de preservar o local, deforma a facilitar os trabalhos da Polícia e da Perícia'
            ],
            [
                'nome_lei' => '174 - Participar na via, como condutor de eventos organizados sem permissão da Autoridade de Trânsito com circunscrição sobre a via'
            ],
            [
                'nome_lei' => '178 - Deixar o condutor, envolvido em acidente sem vítima, de adotar providências para remover o veículo do local, quando necessário tal medida assegurar a segurança e a fluidez do trânsito'
            ],
            [
                'nome_lei' => '176 V - Deixar o condutor, envolvido em acidentes com vítima de identificar-se ao Policial e de lhe prestar informações necessárias a confecção do Boletim de Ocorrência'
            ],
            [
                'nome_lei' => '179 I - Fazer ou deixar que se faça reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção e em que o veículo esteja devidamente sinalizado em pista de rolamento de rodovias e vias de trânsito rápido'
            ],
            [
                'nome_lei' => '177 - Deixar o condutor de prestar socorro a vítima de acidente de trânsito, quando solicitado pela Autoridade ou seus Agentes'
            ],
            [
                'nome_lei' => '176 IV - Deixar o condutor envolvido em acidentes com vítima, de adotar providências para remover o veículo do local, quando determinado por Policial ou Agente da Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '179 II - Fazer ou deixar que se faça reparo em veículo na via pública, salvo nos casos de impedimento absoluto de sua remoção e me que o veículo esteja devidamente sinalizado, em outras vias além de pista de rolamento de rodovias e vias de trânsito rápido'
            ],
            [
                'nome_lei' => '180 - Ter o veículo imobilizado na via por falta de combustível'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo junto de tampas de poços de visita de galerias subterrâneas, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo junto a hidrantes de incêndio, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo sobre registro de água, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo junto a registro de água, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo sobre hidrantes de incêndio, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 I - Estacionar o veículo nas esquinas e a menos de cinco metros do bordo do alinhamento da via transversal'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo sobre de tampas de poços de visita de galerias subterrâneas, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 III - Estacionar o veículo afastado da guia da guia da calçada (meio-fio) a mais de um metro'
            ],
            [
                'nome_lei' => '181 II - Estacionar o veículo afastado da guia da guia da calçada (meio-fio) de cinquenta centímetros a um metro'
            ],
            [
                'nome_lei' => '181 IV - Estacionar o veículo em desacordo com as posições estabelecidas no CTB'
            ],
            [
                'nome_lei' => '181 V - Estacionar o veículo na pista de rolamento das estradas, das rodovias, das vias de trânsito rápido e das vias dotadas de acostamento'
            ],
            [
                'nome_lei' => '181 V - Estacionar o veículo na pista de rolamentos das estradas'
            ],
            [
                'nome_lei' => '181 V - Estacionar o veículo na pista de rolamentos das vias de trânsito rápido'
            ],
            [
                'nome_lei' => '181 V - Estacionar o veículo na pista de rolamentos das rodovias'
            ],
            [
                'nome_lei' => '181 VII - Estacionar o veículo nos acostamentos salvo por motivo de força maior'
            ],
            [
                'nome_lei' => '181 XIII - Estacionar o veículo onde houver sinalização horizontal delimitadora de ponto de embarque ou desembarque de passageiros de transporte coletivo'
            ],
            [
                'nome_lei' => '181 XIII - Estacionar o veículo quando houver sinalização horizontal delimitadora de ponto de embarque ou desembarque de passageiros de transporte coletivo, no intervalo compreendido entre dez metros antes e depois do marco do ponto'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar o veículo no passeio ou sobre a faixa destinada a pedestres, sobre ciclovias ou ciclofaixas, bem como nas ilhas, refúgios, ao lado ou sobre canteiros centrais, divisores de pista de rolamento, marcas de canalização, gramados ou jardins públicos'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar o veículo no passeio'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar o veículo sobre faixas destinadas a pedestres'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar o veículo sobre ciclovia ou ciclofaixa'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar nas ilhas ou refúgios'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar ao lado ou sobre canteiro central/divisores de pista de rolamento'
            ],
            [
                'nome_lei' => '181VIII - Estacionar ao lado ou sobre marcas de canalização'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar ao lado ou sobre gramado ou jardim público'
            ],
            [
                'nome_lei' => '181 VIII - Estacionar o veículo ao lado de canteiros centrais'
            ],
            [
                'nome_lei' => '181 IX - Estacionar o veículo onde houver guia de calçada (meio-fio) rebaixada, destinada à entrada ou saída de veículo'
            ],
            [
                'nome_lei' => '181 X - Estacionar o veículo impedindo a movimentação de outro veículo'
            ],
            [
                'nome_lei' => '181 XI - Estacionar o veículo ao lado de outro veículo em fila dupla'
            ],
            [
                'nome_lei' => '181 XII - Estacionar o veículo na área de cruzamento de vias, prejudicando a circulação de veículos e pedestres'
            ],
            [
                'nome_lei' => '181 XIII - Estacionar o veículo onde houver sinalização horizontal delimitadora de ponto de embarque ou desembarque de passageiros de transporte coletivo, ou na inexistência dessa sinalização, no intervalo compreendido entre dez metros antes e depois do marco do ponto'
            ],
            [
                'nome_lei' => '181 XIV - Estacionar o veículo nos viadutos, pontes e túneis'
            ],
            [
                'nome_lei' => '181 V - Estacionar o veículo na pista de rolamentos das vias dotadas de acostamento'
            ],
            [
                'nome_lei' => '181 VI - Estacionar o veículo junto ou sobre hidrantes de incêndio, registro de água ou tampas de poços de visita de galerias subterrâneas, desde que devidamente identificado, conforme especificação do CONTRAN Estacionar o veículo junto hidrantes de incêndio, desde que devidamente identificado, conforme especificação do CONTRAN'
            ],
            [
                'nome_lei' => '181 XIV - Estacionar o veículo nos túneis'
            ],
            [
                'nome_lei' => '181 XIV - Estacionar o veículo nas pontes'
            ],
            [
                'nome_lei' => '181 XVI - Estacionar o veículo em aclive ou declive, não estando devidamente freado e sem calço de segurança, quando se tratar de veículo com peso bruto total superior a três mil e quinhentos quilogramas'
            ],
            [
                'nome_lei' => '181 XV - Estacionar o veículo na contra mão de direção'
            ],
            [
                'nome_lei' => '181 XVI - Estacionar o veículo em aclive, não estando devidamente freado e sem calço de segurança, quando se tratar de veículo com peso bruto total superior a três mil e quinhentos quilogramas'
            ],
            [
                'nome_lei' => '181 XIV - Estacionar o veículo nos viadutos'
            ],
            [
                'nome_lei' => '181 XVI - Estacionar o veículo em declive, não estando devidamente freado e sem calço de segurança, quando se tratar de veículo com peso bruto total superior a três mil e quinhentos quilogramas'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização (placa - estacionamento regulamentado)'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização (placa - estacionamento rotativo)'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização (placa - vaga para portadores de necessidades especiais)'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização (placa - ponto ou vaga de táxi)'
            ],
            [
                'nome_lei' => '181 XVIII - Estacionar veículo em locais e horários proibidos especificamente pela sinalização'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar o veículo em desacordo com as condições regulamentadas especificamente pela sinalização (placa - área de carga e descarga)'
            ],
            [
                'nome_lei' => '182 III - Parar o veículo afastado da guia da calçada (meio-fio) a mais de um metro'
            ],
            [
                'nome_lei' => '182 I - Parar o veículo nas esquinas a menos de cinco metros do bordo do alinhamento da via'
            ],
            [
                'nome_lei' => '182 II - Parar o veículo afastado da guia da calçada (meio-fio) de cinquenta centímetros a um metro'
            ],
            [
                'nome_lei' => '182 IV - Parar o veículo em desacordo com as posições estabelecidas no CTB'
            ],
            [
                'nome_lei' => '182 V - Parar o veículo na pista de rolamento das estradas dotadas de acostamento'
            ],
            [
                'nome_lei' => '182 V - Parar na pista de rolamento das rodovias'
            ],
            [
                'nome_lei' => '182 V - Parar o veículo na pista de rolamento das estradas, das rodovias , das vias de trânsito rápido e das demais vias dotadas de acostamento'
            ],
            [
                'nome_lei' => '182 V - Parar na pista de rolamento das vias de trânsito rápido'
            ],
            [
                'nome_lei' => '182 VI - Parar o veículo no passeio'
            ],
            [
                'nome_lei' => '182 VI - Parar o veículo sobre a faixa destinada a pedestres'
            ],
            [
                'nome_lei' => '182 VI - Parar o veículo nas ilhas'
            ],
            [
                'nome_lei' => '182 VI - Parar nos canteiros centrais/divisores de pista de rolamento'
            ],
            [
                'nome_lei' => '182 VI - Parar em marcas de canalização'
            ],
            [
                'nome_lei' => '188 - Transitar ao lado de outro veículo interrompendo o trânsito'
            ],
            [
                'nome_lei' => '188 - Transitar ao lado de outro veículo perturbando o trânsito'
            ],
            [
                'nome_lei' => '182 VI - Para o veículo nos divisores de pistas de rolamento'
            ],
            [
                'nome_lei' => '182 VI - Parar o veículo nas marcas de canalização'
            ],
            [
                'nome_lei' => '182 VII - Parar o veículo na área de cruzamento de vias, prejudicando a circulação de veículos e pedestres'
            ],
            [
                'nome_lei' => '182 VII - Parar o veículo na área de cruzamento de vias, prejudicando a circulação de veículos'
            ],
            [
                'nome_lei' => '182 VII - Parar o veículo na área de cruzamento de vias, prejudicando a circulação de pedestres'
            ],
            [
                'nome_lei' => '182 VIII - Parar os veículos nos viadutos, pontes e túneis'
            ],
            [
                'nome_lei' => '182 VIII - Parar o veículo nos viadutos'
            ],
            [
                'nome_lei' => '182 VIII - Parar o veículo nas pontes'
            ],
            [
                'nome_lei' => '182 VIII - Parar o veículo nos túneis'
            ],
            [
                'nome_lei' => '182 IX - Para o veículo na contra mão de direção'
            ],
            [
                'nome_lei' => '182 X - Parar o veículo em local e horário proibido especificamente pela sinalização'
            ],
            [
                'nome_lei' => '183 - Parar o veículo sobre a faixa de pedestre na mudança de sinal luminoso'
            ],
            [
                'nome_lei' => '183 - Parar o veículo sobre a faixa de pedestre na mudança de sinal luminoso'
            ],
            [
                'nome_lei' => '183 - Parar o veículo sobre a faixa de pedestre na mudança de sinal luminoso ? fiscalização eletrônica'
            ],
            [
                'nome_lei' => '184 I - Transitar com o veículo na faixa ou na pista da direita regulamentada como de circulação exclusiva para determinado tipo de veículo, exceto para acesso a imóveis lindeiros ou conversões a direita'
            ],
            [
                'nome_lei' => '182 V - Parar o veículo na pista de rolamento das demais vias dotadas de acostamento'
            ],
            [
                'nome_lei' => '182 VI - Parar o veículo no passeio, sobre faixa destinada a pedestre, nas ilhas, refúgios, canteiros centrais e divisores de pista de rolamento e marcas de canalização'
            ],
            [
                'nome_lei' => '184 I - Transitar com o veículo na faixa da direita regulamentada como de circulação exclusiva para determinado tipo de veículo, exceto para acesso a imóveis lindeiros ou conversões a direita'
            ],
            [
                'nome_lei' => '184 I - Transitar com o veículo na pista da direita regulamentada como de circulação exclusiva para determinado tipo de veículo, exceto para acesso a imóveis lindeiros ou conversões a direita'
            ],
            [
                'nome_lei' => '184 II - Transitar co o veículo na faixa ou pista da esquerda regulamentada como de circulação exclusiva para determinado tipo de veículo'
            ],
            [
                'nome_lei' => '185 I - Deixar de conservar o veículo, quando estiver em movimento, na faixa a ele destinada pela sinalização de regulamentação, exceto em situação de emergência'
            ],
            [
                'nome_lei' => '184 II - Transitar com o veículo na pista da esquerda regulamentada como de circulação exclusiva para determinado tipo de veículo'
            ],
            [
                'nome_lei' => '186 I - Transitar pela contramão de direção em vias de duplo sentido de circulação, exceto para ultrapassar outro veículo e apenas pelo tempo necessário, respeitada a preferência do veículo que transitar em sentido contrário'
            ],
            [
                'nome_lei' => '184 II - Transitar com o veículo na faixa da esquerda regulamentada como de circulação exclusiva para determinado tipo de veículo'
            ],
            [
                'nome_lei' => '185 II - Deixar de conservar o veículo lento e de maior porte, quando estiver em movimento nas faixas da direita'
            ],
            [
                'nome_lei' => '187 I - Transitar em locais e horários não permitidos pela regulamentação estabelecida pela Autoridade competente, para todos os veículos'
            ],
            [
                'nome_lei' => '187 I - Transitar em locais e horários não permitidos pela regulamentação estabelecida pela Autoridade competente, para todos os veículos'
            ],
            [
                'nome_lei' => '186 II - Transitar pela contramão de direção em vias com sinalização de regulamentação de sentido único de circulação'
            ],
            [
                'nome_lei' => '188 - Transitar ao lado de outro veículo interrompendo ou perturbando o trânsito'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem aos veículos de operação e fiscalização de trânsito quando em serviço de urgência e devidamente identificado por dispositivos regulamentados de alarme sonoro e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem às ambulâncias quando em serviço de urgência e devidamente identificado por dispositivos regulamentados de alarme sonoro e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '190 - Seguir veículo em serviço de urgência, estando este com prioridade de passagem devidamente identificada por dispositivos regulamentares de alarme sonoro e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '191 - Forçar passagem entre veículos que transitando em sentido opostos, estejam na eminência de passar um pelo outro ao realizar operação de ultrapassagem'
            ],
            [
                'nome_lei' => '192 - Deixar de guardar distância de segurança lateral e frontal entre o seu veículo e os demais, bem como, em relação ao bordo da pista considerando-se no momento a velocidade, as condições climáticas do local, da circulação e do veículo'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em calçadas, passeios, passarelas, ciclovias, ciclofaixas, ilhas, refúgios, ajardinamentos, canteiros centrais e divisores de pista de rolamento, acostamentos, marcas de canalização, gramados e jardins públicos'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em calçadas, passeios'
            ],
            [
                'nome_lei' => '200 - Ultrapassar pela direita, veículo de transporte coletivo, parado para embarque ou desembarque de passageiros salvo quando houver refúgio para o pedestre'
            ],
            [
                'nome_lei' => '200 - Ultrapassar pela direita, veículo de transporte de escolares, parado para embarque ou desembarque de passageiros, salvo quando houver refúgio para o pedestre'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em ciclovias/ciclofaixas'
            ],
            [
                'nome_lei' => '201 - Deixar de guardar a distância lateral de um metro e cinquenta centímetros, ao passar bicicleta'
            ],
            [
                'nome_lei' => '187 I - Transitar em locais e horários não permitidos pela regulamentação estabelecida pela Autoridade competente, para todos os veículos - rodízio'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem aos veículos de polícia quando em serviço de urgência e devidamente identificado por dispositivos regulamentados de alarme sonoro e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '201 - Deixar de guardar a distância lateral de um metro e cinquenta centímetros, ao ultrapassar bicicleta'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem aos veículos precedidos de batedores quando em serviço de urgência e devidamente identificado por dispositivos regulamentados de alarme sonora e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em ajardinamento, gramados/ jardins públicos'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem aos veículos precedidos de batedores, de socorro de incêndio e salvamento, de polícia, de operação e fiscalização de trânsito e as ambulâncias quando em serviço de urgência e devidamente identificados por dispositivos regulamentados de alarme sonoro e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em canteiro central'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em ilhas/ refúgios'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em divisores de pista de rolamento/marcas de canalização'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em acostamento'
            ],
            [
                'nome_lei' => '193 - Transitar com o veículo em passarelas'
            ],
            [
                'nome_lei' => '194 - Transitar de marcha à ré, salvo na distância necessária a pequenas manobras e de forma a não causar riscos à segurança'
            ],
            [
                'nome_lei' => '195 - Desobedecer às ordens emanadas da Autoridade competente de trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '196 - Deixar de indicar com antecedência, mediante gesto regulamentar de braço ou luz indicadora de direção de veículo, o início da marcha, a realização da manobra de parar o veículo, a mudança de direção ou de faixa de circulação'
            ],
            [
                'nome_lei' => '189 - Deixar de dar passagem aos veículos de socorro de incêndio e de salvamento quando em serviço de urgência e devidamente identificado por dispositivos regulamentados de alarme sonora e iluminação vermelha intermitente'
            ],
            [
                'nome_lei' => '196 - Deixar de indicar com antecedência, mediante gesto regulamentar de braço ou luz indicadora de direção de veículo, o início da marcha'
            ],
            [
                'nome_lei' => '196 - Deixar de indicar com antecedência, mediante gesto regulamentar de braço ou luz indicadora de direção de veículo, a mudança de direção'
            ],
            [
                'nome_lei' => '196 - Deixar de indicar com antecedência, mediante gesto regulamentar de braço ou luz indicadora de direção de veículo, a realização da manobra de parar o veículo'
            ],
            [
                'nome_lei' => '205 - Ultrapassar veículo em movimento que integre cortejo salvo, com autorização da Autoridade de Trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '205 - Ultrapassar veículo em movimento que integre formações militares salvo, com autorização da Autoridade de Trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '205 - Ultrapassar veículo em movimento que integre desfile salvo, com autorização da Autoridade de Trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '197 - Deixar de deslocar com antecedência, o veículo para a faixa mais a esquerda ou mais a direita dentro da respectiva mão de direção quando for manobrar para um desses lados'
            ],
            [
                'nome_lei' => '196 - Deixar de indicar com antecedência, mediante gesto regulamentar de braço ou luz indicadora de direção de veículo, a mudança de faixa de circulação'
            ],
            [
                'nome_lei' => '197 - Deixar de deslocar com antecedência, o veículo para a faixa mais a direita dentro da respectiva mão de direção, quando for manobrar para esse lado'
            ],
            [
                'nome_lei' => '197 - Deixar de deslocar com antecedência, o veículo para a faixa mais a esquerda dentro da respectiva mão de direção, quando for manobrar para esse lado'
            ],
            [
                'nome_lei' => '199 - Ultrapassar pela direita salvo quando o veículo da frente estiver colocado na faixa apropriada e der sinal de que vai entrar a esquerda'
            ],
            [
                'nome_lei' => '198 - Deixar de dar passagem pela esquerda quando solicitado'
            ],
            [
                'nome_lei' => '200 - Ultrapassar pela direita, veículo de transporte coletivo ou de escolares, parado para embarque ou desembarque de passageiros salvo quando houver refúgio para o pedestre'
            ],
            [
                'nome_lei' => '201 - Deixar de guardar a distância lateral de um metro e cinquenta centímetros, ao passar ou ultrapassar bicicleta'
            ],
            [
                'nome_lei' => '202 I - Ultrapassar outro veículo pelo acostamento'
            ],
            [
                'nome_lei' => '202 II - Ultrapassar outro veículo em interseções e passagens de nível'
            ],
            [
                'nome_lei' => '202 II - Ultrapassar outro veículo em interseção'
            ],
            [
                'nome_lei' => '202 II - Ultrapassar outro veículo em passagem de nível'
            ],
            [
                'nome_lei' => '203 I - Ultrapassar pela contramão outro veículo nas curvas, aclives e declives sem visibilidade suficiente'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de faixas de veículos não motorizados'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de faixas de pedestres'
            ],
            [
                'nome_lei' => '203 I - Ultrapassar pela contramão outro veículo nos aclives sem visibilidade suficiente'
            ],
            [
                'nome_lei' => '205 - Ultrapassar veículo em movimento que integre préstito salvo, com autorização da Autoridade de Trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '203 I - Ultrapassar pela contramão outro veículo nas curvas sem visibilidade suficiente'
            ],
            [
                'nome_lei' => '203 I - Ultrapassar pela contramão outro veículo nos declives sem visibilidade suficiente'
            ],
            [
                'nome_lei' => '203 II - Ultrapassar pela contramão outro veículo nas faixas de pedestre'
            ],
            [
                'nome_lei' => '203 III - Ultrapassar pela contramão outro veículo nas pontes, viadutos e túneis'
            ],
            [
                'nome_lei' => '203 III - Ultrapassar pela contra mão outro veículo nas pontes'
            ],
            [
                'nome_lei' => '203 III - Ultrapassar pela contra mão outro veículo nos túneis'
            ],
            [
                'nome_lei' => '203 III - Ultrapassar pela contra mão outro veículo nos viadutos'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão outro veículo parado em fila junto a sinais luminosos, porteiras, cancelas, cruzamentos ou qualquer outro impedimento a livre circulação'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão outro veículo parado em fila junto a sinais luminosos'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão veículo parado em fila junto a cruzamento'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão outro veículo parado em fila junto a porteiras'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão veículo parado em fila junto a qualquer impedimento à circulação'
            ],
            [
                'nome_lei' => '203 IV - Ultrapassar pela contramão outro veículo parado em fila junto a qualquer outro impedimento à livre circulação'
            ],
            [
                'nome_lei' => '203 V - Ultrapassar pela contramão linha de divisão de fluxos opostos, contínua amarela'
            ],
            [
                'nome_lei' => '204 - Deixar de parar o veículo no acostamento à direita, para aguardar a oportunidade de cruzar pista ou entrar a esquerda, onde não houver local apropriado para operação de retorno'
            ],
            [
                'nome_lei' => '204 - Deixar de parar o veículo no acostamento à direita, para aguardar a oportunidade de cruzar a pista, onde não houver local apropriado para operação de retorno'
            ],
            [
                'nome_lei' => '204 - Deixar de parar o veículo no acostamento à direita, para aguardar a oportunidade de entrar na pista, onde não houver local apropriado para operação de retorno'
            ],
            [
                'nome_lei' => '205 - Ultrapassar veículo em movimento que integre cortejo, préstito, desfile e formações militares, salvo com autorização da Autoridade de Trânsito ou seus Agentes'
            ],
            [
                'nome_lei' => '213 I - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de pessoas, como préstitos'
            ],
            [
                'nome_lei' => '213 I - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de pessoas, como passeatas'
            ],
            [
                'nome_lei' => '213 I - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de pessoas, como desfiles e outros'
            ],
            [
                'nome_lei' => '213 II - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de veículos, como cortejos'
            ],
            [
                'nome_lei' => '206 I - Executar operação de retorno em locais proibidos pela sinalização'
            ],
            [
                'nome_lei' => '213 II - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de veículos, como formações militares e outros'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nas curvas, aclives, declives, pontes, viadutos e túneis'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nas curvas'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nos aclives'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nos túneis'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nas pontes'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nos viadutos'
            ],
            [
                'nome_lei' => '206 II - Executar operação de retorno nos túneis'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de calçada, passeio, ilhas, ajardinamentos ou canteiros de divisores de pista de rolamento, refúgios e faixas de pedestres e nas de veículos não motorizados'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de calçada, passeio'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de ilhas e/ou refúgios'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de ajardinamento'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de faixas de pedestres'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de faixas de veículos não motorizados'
            ],
            [
                'nome_lei' => '206 IV - Executar operação de retorno nas interseções, entrando na contramão de direção da via transversal'
            ],
            [
                'nome_lei' => '206 III - Executar operação de retorno passando por cima de canteiros divisores de pista de rolamento'
            ],
            [
                'nome_lei' => '206 V - Executar operação de retorno com prejuízo da livre circulação ou da segurança ainda que em locais permitidos'
            ],
            [
                'nome_lei' => '206 V - Executar operação de retorno com prejuízo da livre circulação, ainda que em locais permitidos'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de passeatas'
            ],
            [
                'nome_lei' => '207 - Executar operação de conversão a esquerda em locais proibidos pela sinalização'
            ],
            [
                'nome_lei' => '206 V - Executar operação de retorno com prejuízo da segurança, ainda que em locais permitidos'
            ],
            [
                'nome_lei' => '207 - Executar operação de conversão a direita em locais proibidos pela sinalização'
            ],
            [
                'nome_lei' => '208 - Avançar o sinal vermelho do semáforo ou da parada obrigatória'
            ],
            [
                'nome_lei' => '208 - Avançar o sinal vermelho do semáforo, exceto onde houver sinalização que permita livre conversão à direita'
            ],
            [
                'nome_lei' => '208 - Avançar o sinal vermelho do semáforo, exceto houver sinalização permita livre conversão à direita fiscalização eletrônica'
            ],
            [
                'nome_lei' => '209 - Transpor , sem autorização bloqueio viário com ou sem sinalização ou dispositivos auxiliares, deixar de adentrar às áreas destinadas a pesagem de veículos ou evadir-se para não efetuar o pagamento do pedágio'
            ],
            [
                'nome_lei' => '209 - Transpor, sem autorização, bloqueio viário com ou sem sinalização ou dispositivos auxiliares'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de aglomerações'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de cortejos'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de préstitos'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de desfiles'
            ],
            [
                'nome_lei' => '209 - Evadir-se para não efetuar o pagamento do pedágio'
            ],
            [
                'nome_lei' => '210 - Transpor sem autorização bloqueio viário policial'
            ],
            [
                'nome_lei' => '211 - Ultrapassar veículos em fila, parados em razão de sinal luminoso, com exceção dos veículos não motorizados'
            ],
            [
                'nome_lei' => '211 - Ultrapassar veículos em fila, parados em razão de sinal luminoso, cancela, bloqueio viário parcial ou qualquer outro obstáculo, com exceção dos veículos não motorizados'
            ],
            [
                'nome_lei' => '211 - Ultrapassar veículos em fila, parados em razão de cancela, com exceção dos veículos não motorizados'
            ],
            [
                'nome_lei' => '211 - Ultrapassar veículos em fila, parados em razão de bloqueio viário parcial, com exceção dos veículos não motorizados'
            ],
            [
                'nome_lei' => '211 - Ultrapassar veículos em fila, parados em razão de qualquer outro obstáculo, com exceção dos veículos não motorizados'
            ],
            [
                'nome_lei' => '212 - Deixar de parar o veículo antes de transpor linha férrea'
            ],
            [
                'nome_lei' => '213 I - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de pessoas, como préstitos, passeatas, desfiles e outros'
            ],
            [
                'nome_lei' => '220 VIII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito sob chuva'
            ],
            [
                'nome_lei' => '220 VIII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito sob neblina'
            ],
            [
                'nome_lei' => '220 VIII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito sob cerração'
            ],
            [
                'nome_lei' => '220 VIII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito sob ventos fortes'
            ],
            [
                'nome_lei' => '213 II - Deixar de parar o veículo sempre que a respectiva marcha for interceptada por agrupamentos de veículos, como cortejos, formações militares e outros'
            ],
            [
                'nome_lei' => '214 I - Deixar de dar preferência de passagem a pedestre e a veículo não motorizado que se encontre na faixa a ele destinada'
            ],
            [
                'nome_lei' => '207 - Executar operação de conversão a direita ou a esquerda em locais proibidos pela sinalização'
            ],
            [
                'nome_lei' => '209 - Deixar de adentrar às áreas destinadas à pesagem de veículos'
            ],
            [
                'nome_lei' => '208 - Avançar sinal de parada obrigatória'
            ],
            [
                'nome_lei' => '214 II - Deixar de dar preferência de passagem a pedestre e a veículo não motorizado que não haja concluído a travessia, mesmo que ocorra sinal verde para o veículo'
            ],
            [
                'nome_lei' => '214 IV - Deixar de dar preferência de passagem a pedestre e a veículo não motorizado, quando não houver iniciado a travessia, mesmo que não sinalização a ele destinada'
            ],
            [
                'nome_lei' => '214 V - Deixar de dar preferência de passagem a pedestre e a veículo não motorizado que esteja atravessando a via transversal para onde se dirige o veículo'
            ],
            [
                'nome_lei' => '215 I - Deixar de dar preferência de passagem em interseção não sinalizada, a veículo que estiver circulando por rodovia'
            ],
            [
                'nome_lei' => '215 I - Deixar de dar preferência de passagem em interseção não sinalizada, a veículo que estiver circulando por rotatória'
            ],
            [
                'nome_lei' => '215 I - Deixar de dar preferência de passagem em interseção não sinalizada, a veículo que vier da direita'
            ],
            [
                'nome_lei' => '215 II - Deixar de dar preferência de passagem, nas interseções com sinalização de regulamentação de Dê a Preferência'
            ],
            [
                'nome_lei' => '216 - Entrar ou sair de áreas lindeiras sem estar adequadamente posicionado para o ingresso na via e sem as precauções com a segurança de pedestres e de outros veículos'
            ],
            [
                'nome_lei' => '221 § único - Confeccionar, distribuir ou colocar, em veículo próprio ou de terceiros, placas de identificação não autorizadas pela regulamentação do CONTRAN'
            ],
            [
                'nome_lei' => '217 - Entrar ou sair de fila de veículos estacionados sem dar preferência de passagem a pedestres e a outros veículos'
            ],
            [
                'nome_lei' => '219 - Transitar com veículo em velocidade inferior à metade da velocidade máxima estabelecida para via, retardando ou obstruindo o trânsito, a menos que as condições de trafego e meteorológicas não o permitam, salvo se estiver na faixa da direita'
            ],
            [
                'nome_lei' => '220 I - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito, quando se aproximar de passeatas, aglomerações, cortejos, préstitos e desfiles'
            ],
            [
                'nome_lei' => '220 II - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nos locais onde o trânsito esteja sendo controlado pelo Agente da Autoridade de Trânsito, mediante sinais sonoros ou gestos'
            ],
            [
                'nome_lei' => '220 III - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito ao aproximar-se da guia da calçada (meio-fio) ou acostamento'
            ],
            [
                'nome_lei' => '225 I - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas, quando tiver de permanecer no acostamento'
            ],
            [
                'nome_lei' => '225 I - Omitir-se a providências necessárias para tornar visível o local, quando tiver de permanecer no acostamento'
            ],
            [
                'nome_lei' => '225 II - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas, quando a carga for derramada sobre a via e não puder ser retirada imediatamente'
            ],
            [
                'nome_lei' => '225 II - Omitir-se a providências necessárias para tornar visível o local, quando a carga for derramada sobre a via e não puder ser retirada imediatamente'
            ],
            [
                'nome_lei' => '220 III - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito ao aproximar-se da guia da calçada (meio-fio)'
            ],
            [
                'nome_lei' => '220 III - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito ao aproximar-se do acostamento'
            ],
            [
                'nome_lei' => '227 I - Usar buzina em situação que não a de simples toque breve como advertência ao pedestre'
            ],
            [
                'nome_lei' => '227 I - Usar buzina em situação que não a de simples toque breve como advertência a condutores de outros veículos'
            ],
            [
                'nome_lei' => '220 IV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito ao aproximar-se de ou passar por interseção não sinalizada'
            ],
            [
                'nome_lei' => '220 V - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nas vias rurais cuja faixa de domínio não esteja cercada'
            ],
            [
                'nome_lei' => '220 VIII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito sob chuva, neblina cerração ou ventos fortes'
            ],
            [
                'nome_lei' => '220 VII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito ao aproximar-se de locais sinalizados com advertência de obras ou trabalhadores na pista'
            ],
            [
                'nome_lei' => '220 IX - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito quando houver má visibilidade'
            ],
            [
                'nome_lei' => '220 X - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito quando o pavimento se apresentar escorregadio, defeituoso ou avariado'
            ],
            [
                'nome_lei' => '220 X - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito quando o pavimento se apresentar escorregadio'
            ],
            [
                'nome_lei' => '215 I - Deixar de dar preferência de passagem em interseção não sinalizada, a veículo que estiver circulando por rodovia ou rotatória ou a veículo que vier pela direita'
            ],
            [
                'nome_lei' => '214 III - Deixar de dar preferência de passagem a pedestre e a veículo não motorizado portadores de deficiência física, crianças, idosos e a gestantes'
            ],
            [
                'nome_lei' => '220 VI - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nos trechos em curvas de pequeno raio'
            ],
            [
                'nome_lei' => '220 X - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito quando o pavimento se apresentar defeituoso ou avariado'
            ],
            [
                'nome_lei' => '220 XIII - Deixar de reduzir velocidade de forma compatível com a segurança ao ultrapassar ciclista'
            ],
            [
                'nome_lei' => '220 XII - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito em declive'
            ],
            [
                'nome_lei' => '220 XI - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito à aproximação de animais na pista'
            ],
            [
                'nome_lei' => '220 XIV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nas proximidades de escola, hospitais, estações de embarque e desembarque de passageiros ou onde haja intensa movimentação de pedestres'
            ],
            [
                'nome_lei' => '220 XIV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nas proximidades de escola'
            ],
            [
                'nome_lei' => '220 XIV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nas proximidades de hospitais'
            ],
            [
                'nome_lei' => '220 XIV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito nas proximidades de estações de embarque e desembarque de passageiros'
            ],
            [
                'nome_lei' => '221 - Portar no veículo, placas de identificação em desacordo com as especificações e modelos estabelecidos pelo CONTRAN'
            ],
            [
                'nome_lei' => '220 XIV - Deixar de reduzir a velocidade do veículo de forma compatível com a segurança do trânsito onde haja intensa movimentação de pedestres'
            ],
            [
                'nome_lei' => '221§ único - Colocar, em veículo de terceiros, placas de identificação não autorizadas pela regulamentação do CONTRAN'
            ],
            [
                'nome_lei' => '221§ único - Colocar, em veículo próprio, placas de identificação não autorizadas pela regulamentação do CONTRAN'
            ],
            [
                'nome_lei' => '222 - Deixar de manter ligado, nas situações de atendimento de emergência, o sistema de iluminação vermelha intermitente dos veículos de Polícia, de socorro de incêndio e salvamento, de fiscalização de trânsito e das ambulâncias, ainda que parados'
            ],
            [
                'nome_lei' => '223 - Transitar com farol desregulado ou com facho de luz alta de forma a perturbara visão de outro condutor'
            ],
            [
                'nome_lei' => '223 - Transitar com facho de luz alta de forma a perturbar a visão de outro condutor'
            ],
            [
                'nome_lei' => '223 - Transitar com farol desregulado de forma a perturbara visão de outro condutor'
            ],
            [
                'nome_lei' => '224 - Fazer uso do facho de luz alta dos faróis em vias providas de iluminação pública'
            ],
            [
                'nome_lei' => '225 I - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas ou omitir-se a providências necessárias para tornar visível o local, quando tiver de remover o veículo da pista de rolamento'
            ],
            [
                'nome_lei' => '230 XI - Conduzir o veículo com o silenciador do motor de explosão, deficiente ou inoperante'
            ],
            [
                'nome_lei' => '225 I - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas ou omitir-se a providências necessárias para tornar visível o local, quando tiver de remover o veículo da pista de rolamento ou permanecer no acostamento'
            ],
            [
                'nome_lei' => '230 XII - Conduzir o veículo com equipamento proibido'
            ],
            [
                'nome_lei' => '225 I - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas ou omitir-se a providências necessárias para tornar visível o local, quando tiver de permanecer no acostamento'
            ],
            [
                'nome_lei' => '230 XII - Conduzir o veículo com acessório proibido'
            ],
            [
                'nome_lei' => '225 II - Deixar de sinalizar a via, de forma a prevenir os demais condutores e, à noite, não manter acesas as luzes externas ou omitir-se a providências necessárias para tornar visível o local, quando a carga for derramada sobre a via e não puder ser retirada imediatamente'
            ],
            [
                'nome_lei' => '227 II - Usar buzina prolongada e sucessivamente a qualquer pretexto'
            ],
            [
                'nome_lei' => '226 - Deixar de retirar todo e qualquer objeto que tenha sido utilizado para sinalização temporária da via'
            ],
            [
                'nome_lei' => '227 I - Usar buzina em situação que não a de simples toque breve como advertência ao pedestre ou a condutores de outros veículos'
            ],
            [
                'nome_lei' => '227 III - Usar buzina entre as vinte e duas e às seis horas'
            ],
            [
                'nome_lei' => '227 V - Usar buzina em desacordo com os padrões e frequências estabelecidas pelo CONTRAN'
            ],
            [
                'nome_lei' => '228 - Usar no veículo equipamento com som em volume ou frequência que não sejam autorizadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '230 XVII - Conduzir o veículo com cortinas fechadas, não autorizadas pela legislação'
            ],
            [
                'nome_lei' => '230 XVII - Conduzir o veículo com persianas fechadas, não autorizadas pela legislação'
            ],
            [
                'nome_lei' => '229 - Usar indevidamente no veículo aparelho de alarme ou que produza sons e ruído que perturbe o sossego público, em desacordo com normas fixadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '229 - Usar indevidamente no veículo aparelho de alarme que perturbe o sossego público, em desacordo com normas fixadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '229 - Usar indevidamente no veículo aparelho que produza sons e ruído que perturbe o sossego público, em desacordo com normas fixadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '227 IV - Usar buzina em locais e horários proibidos pela sinalização'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com o lacre, a inscrição do chassi, o selo, a placa ou qualquer outro elemento de identificação de veículo violado ou falsificado'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com o selo violado ou falsificado'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com o lacre de identificação violado ou falsificado'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com a placa violado ou falsificado'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com qualquer outro elemento de identificação do veículo violado ou falsificado'
            ],
            [
                'nome_lei' => '230 II - Conduzir o veículo transportando passageiros em compartimento de carga, salvo por motivo de força maior com permissão da autoridade competente e na forma estabelecida pelo CONTRAN'
            ],
            [
                'nome_lei' => '230 III - Conduzir o veículo com dispositivo anti-radar'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo derramando sobre a via combustível que esteja utilizando'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo lançando sobre a via combustível que esteja utilizando'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo lançando sobre a via lubrificante que esteja utilizando'
            ],
            [
                'nome_lei' => '230 I - Conduzir o veículo com a inscrição do chassi violado ou falsificado'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo arrastando sobre a via lubrificante que esteja utilizando'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo derramando sobre a via lubrificante que esteja utilizando'
            ],
            [
                'nome_lei' => '230 IV - Conduzir o veículo sem qualquer uma das placas de identificação'
            ],
            [
                'nome_lei' => '231 II C - Transitar com o veículo derramando qualquer objeto que possa acarretar risco de acidente'
            ],
            [
                'nome_lei' => '231 II C - Transitar com o veículo lançando qualquer objeto que possa acarretar risco de acidente'
            ],
            [
                'nome_lei' => '231 II C - Transitar com o veículo arrastando qualquer objeto que possa acarretar risco de acidente'
            ],
            [
                'nome_lei' => '230 V - Conduzir o veículo que não esteja registrado e devidamente licenciado'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo arrastando sobre a via combustível que esteja utilizando'
            ],
            [
                'nome_lei' => '231 III - Transitar com o veículo produzindo fumaça em níveis superiores aos fixados pelo CONTRAN'
            ],
            [
                'nome_lei' => '231 IV - Transitar com o veículo com suas dimensões ou de sua carga superiores aos limites estabelecidos legalmente ou pela sinalização, sem autorização'
            ],
            [
                'nome_lei' => '230 VI - Conduzir o veículo com qualquer uma das placas de identificação, sem condições de legibilidade e visibilidade'
            ],
            [
                'nome_lei' => '230 VII - Conduzir o veículo com cor ou característica alterada'
            ],
            [
                'nome_lei' => '230 VII - Conduzir o veículo com a cor alterada'
            ],
            [
                'nome_lei' => '230 VII - Conduzir o veículo com a característica alterada'
            ],
            [
                'nome_lei' => '231 III - Transitar com o veículo produzindo gases em níveis superiores aos fixados pelo CONTRAN'
            ],
            [
                'nome_lei' => '231 III - Transitar com o veículo produzindo partículas em níveis superiores aos fixados pelo CONTRAN'
            ],
            [
                'nome_lei' => '230 VIII - Conduzir o veículo, sem ter sido submetido a inspeção de segurança veicular, quando obrigatória'
            ],
            [
                'nome_lei' => '230 IX - Conduzir o veículo sem equipamento obrigatório ou estando este ineficiente ou inoperante'
            ],
            [
                'nome_lei' => '230 IX - Conduzir o veículo sem equipamento obrigatório'
            ],
            [
                'nome_lei' => '230 X - Conduzir o veículo com o equipamento obrigatório em desacordo com o estabelecido pelo CONTRAN'
            ],
            [
                'nome_lei' => '230 XI - Conduzir o veículo com descarga livre'
            ],
            [
                'nome_lei' => '230 XII - Conduzir o veículo com equipamento ou acessório proibido'
            ],
            [
                'nome_lei' => '230 XIII - Conduzir o veículo com o equipamento do sistema de iluminação e de sinalização alterados'
            ],
            [
                'nome_lei' => '230 XIV - Conduzir o veículo com registrador instantâneo de velocidade e tempo viciado ou defeituoso, quando houver exigência desse aparelho'
            ],
            [
                'nome_lei' => '230 XV - Conduzir o veículo com inscrições, adesivos, legendas e símbolos de caráter publicitário afixados ou pintados no para-brisa e em toda a extensão da parte traseira do veículo, excetuadas as hipóteses previstas no CTB'
            ],
            [
                'nome_lei' => '230 XV - Conduzir o veículo com inscrições, adesivos, legendas e símbolos de caráter publicitário afixados no para-brisa e em toda a extensão da parte traseira do veículo, excetuadas as hipóteses previstas no CTB'
            ],
            [
                'nome_lei' => '230 XV - Conduzir o veículo com inscrições, adesivos, legendas e símbolos de caráter publicitário pintados no para-brisa e em toda a extensão da parte traseira do veículo, excetuadas as hipóteses previstas no CTB'
            ],
            [
                'nome_lei' => '234 - Falsificar ou adulterar documento de habilitação e de identificação do veículo'
            ],
            [
                'nome_lei' => '230 XVI - Conduzir o veiculo com vidros total ou parcialmente cobertos por películas refletivas ou não, painéis decorativos ou pinturas'
            ],
            [
                'nome_lei' => '230 XVI - Conduzir o veiculo com vidros total ou parcialmente cobertos por películas refletivas ou não'
            ],
            [
                'nome_lei' => '230 XVI - Conduzir o veiculo com vidros total ou parcialmente cobertos por painéis decorativos ou pinturas'
            ],
            [
                'nome_lei' => '230 XVII - Conduzir o veículo com cortinas ou persianas fechadas, não autorizadas pela legislação'
            ],
            [
                'nome_lei' => '230 XVIII - Conduzir o veículo em mau estado de conservação, comprometendo a segurança ou reprovado na avaliação de segurança e de emissão de poluentes e ruído'
            ],
            [
                'nome_lei' => '230 XVIII - Conduzir o veículo em mau estado de conservação, comprometendo a segurança'
            ],
            [
                'nome_lei' => '230 XVIII - Conduzir o veículo reprovado na avaliação de inspeção de segurança'
            ],
            [
                'nome_lei' => '230 XVIII - Conduzir o veículo reprovado na avaliação de emissão de poluentes e ruídos'
            ],
            [
                'nome_lei' => '230 XIX - Conduzir o veículo sem acionar o limpador de para-brisa sob chuva'
            ],
            [
                'nome_lei' => '230 IX - Conduzir o veículo com equipamento obrigatório ineficiente ou inoperante'
            ],
            [
                'nome_lei' => '230 XI - Conduzir o veículo com o silenciador do motor de explosão defeituoso, deficiente ou inoperante'
            ],
            [
                'nome_lei' => '230 XI - Conduzir o veículo com descarga livre ou silenciador de motor de explosão defeituoso, deficiente ou inoperante'
            ],
            [
                'nome_lei' => '230 XX - Conduzir o veículo sem portar a autorização para condução de escolares'
            ],
            [
                'nome_lei' => '230 XXI - Conduzir o veículo de carga com falta de inscrição da tara e demais inscrições previstas no CTB'
            ],
            [
                'nome_lei' => '230 XXII - Conduzir o veículo com defeito no sistema de iluminação de sinalização ou com lâmpadas queimadas'
            ],
            [
                'nome_lei' => '230 XXII - Conduzir o veículo com defeito no sistema de iluminação'
            ],
            [
                'nome_lei' => '240 - Deixar o responsável de promover a baixa de veículo irrecuperável'
            ],
            [
                'nome_lei' => '230 XXII - Conduzir o veículo com defeito no sistema de sinalização'
            ],
            [
                'nome_lei' => '241 - Deixar de atualizar o cadastro de registro do veículo ou de habilitação do Condutor'
            ],
            [
                'nome_lei' => '231 I - Transitar com o veículo danificando a via, suas instalações e equipamentos'
            ],
            [
                'nome_lei' => '230 XXII - Conduzir o veículo com lâmpadas queimadas'
            ],
            [
                'nome_lei' => '242 - Fazer falsa declaração de domicilio para fins de registro, licenciamento ou habilitação'
            ],
            [
                'nome_lei' => '240 - Deixar o responsável de promover a baixa de veículo definitivamente desmontado'
            ],
            [
                'nome_lei' => '231 II A - Transitar com o veículo derramando, lançando ou arrastando sobre a via, carga que esteja transportando'
            ],
            [
                'nome_lei' => '231 II A - Transitar com o veículo lançando sobre a via, carga que esteja transportando'
            ],
            [
                'nome_lei' => '231 II A - Transitar com o veículo arrastando sobre a via, carga que esteja transportando'
            ],
            [
                'nome_lei' => '231 II B - Transitar com o veículo derramando, lançando ou arrastando sobre a via combustível ou lubrificante que esteja utilizando'
            ],
            [
                'nome_lei' => '231 II C - Transitar com o veículo derramando, lançando ou arrastando qualquer objeto que possa acarretar risco de acidente'
            ],
            [
                'nome_lei' => '231 II A - Transitar com o veículo derramando sobre a via, carga que esteja transportando'
            ],
            [
                'nome_lei' => '231 III - Transitar com o veículo produzindo fumaça, gases ou partículas em níveis superiores aos fixados pelo CONTRAN'
            ],
            [
                'nome_lei' => '231 IV - Transitar com veículo e/ou carga com dimensões superiores ao limite legal sem autorização'
            ],
            [
                'nome_lei' => '231 IV - Transitar com veículo e/ou carga com dimensões superiores estabelecido pela sinalização sem autorização'
            ],
            [
                'nome_lei' => '231 IV - Transitar com o veículo com as dimensões de sua carga superiores aos limites estabelecidos legalmente sem autorização'
            ],
            [
                'nome_lei' => '231 V - Transitar com o veículo com excesso de peso, admitido percentual de tolerância quando aferido por equipamento'
            ],
            [
                'nome_lei' => '231 VI - Transitar com o veículo em desacordo com a autorização especial, expedida pela Autoridade competente, para transitar com dimensões excedentes ou quando a mesma estiver vencida'
            ],
            [
                'nome_lei' => '231 VI - Transitar com o veículo em desacordo com a autorização especial, expedida pela Autoridade competente, para transitar com dimensões excedentes'
            ],
            [
                'nome_lei' => '231 VI - Transitar com autorização vencida, expedida p/ veículo c/ dimensões excedentes'
            ],
            [
                'nome_lei' => '231 VII - Transitar com o veículo com lotação excedente'
            ],
            [
                'nome_lei' => '231 VIII - Transitar com o veículo efetuando transporte remunerado de pessoas de pessoas ou bens, quando não for licenciado para esse fim, salvo casos de força maior ou com permissão da Autoridade competente'
            ],
            [
                'nome_lei' => '231 IV - Transitar com o veículo com as dimensões de sua carga superiores à sinalização, sem autorização'
            ],
            [
                'nome_lei' => '231 VIII - Transitar com o veículo efetuando transporte remunerado de pessoas, quando não for licenciado para esse fim, salvo casos de força maior ou com permissão da Autoridade competente'
            ],
            [
                'nome_lei' => '231 VIII - Transitar com o veículo efetuando transporte remunerado de bens, quando não for licenciado para esse fim, salvo casos de forca maior ou com permissão da Autoridade competente'
            ],
            [
                'nome_lei' => '231 IX - Transitar com o veículo desligado ou desengrenado, em declive'
            ],
            [
                'nome_lei' => '231 IX - Transitar com o veículo desligado, em declive'
            ],
            [
                'nome_lei' => '231 X - Transitar com o veículo excedendo a capacidade máxima de tração, em infração considerada média pelo CONTRAN'
            ],
            [
                'nome_lei' => '231 IX - Transitar com o veículo desengrenado, em declive'
            ],
            [
                'nome_lei' => '231 X - Transitar com o veículo excedendo a capacidade máxima de tração, em infração considerada grave pelo CONTRAN'
            ],
            [
                'nome_lei' => '231 X - Transitar com o veículo excedendo a capacidade máxima de tração, em infração considerada gravíssima pelo CONTRAN'
            ],
            [
                'nome_lei' => '232 - Conduzir o veículo sem os documentos de porte obrigatório'
            ],
            [
                'nome_lei' => '234 - Falsificar ou adulterar documento de habilitação'
            ],
            [
                'nome_lei' => '233 - Deixar de efetuar o registro de veículo no prazo de trinta dias, junto ao Órgão Executivo de Trânsito'
            ],
            [
                'nome_lei' => '234 - Adulterar documento de habilitação'
            ],
            [
                'nome_lei' => '235 - Conduzir pessoas, animais ou cargas nas partes externas do veículo salvo nos casos devidamente autorizados'
            ],
            [
                'nome_lei' => '235 - Conduzir animais nas partes externas do veículo salvo nos casos devidamente autorizados'
            ],
            [
                'nome_lei' => '235 - Conduzir pessoas nas partes externas do veículo salvo nos casos devidamente autorizados'
            ],
            [
                'nome_lei' => '235 - Conduzir carga nas partes externas do veículo salvo nos casos devidamente autorizados'
            ],
            [
                'nome_lei' => '236 - Rebocar outro veículo com cabo flexível salvo em casos de emergência'
            ],
            [
                'nome_lei' => '236 - Rebocar outro veículo com cabo flexível ou corda salvo em casos de emergência'
            ],
            [
                'nome_lei' => '236 - Rebocar outro veículo com corda salvo em casos de emergência'
            ],
            [
                'nome_lei' => '237 - Transitar com o veículo em desacordo com as especificações e com falta de inscrição e simbologia, necessárias a sua identificação quando exigidas pela legislação'
            ],
            [
                'nome_lei' => '237 - Transitar com o veículo em desacordo com as especificações, necessárias a sua identificação quando exigidas pela legislação'
            ],
            [
                'nome_lei' => '237 - Transitar com o veículo, com falta de simbologia necessária a sua identificação, quando exigida pela legislação'
            ],
            [
                'nome_lei' => '237 - Transitar com o veículo, com falta de inscrição necessária a sua identificação, quando exigida pela legislação'
            ],
            [
                'nome_lei' => '239 - Retirar do local veículo legalmente retido para regularização, sem permissão da Autoridade competente ou seus Agentes'
            ],
            [
                'nome_lei' => '240 - Deixar o responsável de promover a baixa de veículo irrecuperável ou definitivamente desmontado'
            ],
            [
                'nome_lei' => '238 - Recusar-se a entregar à Autoridade de Trânsito ou seus Agentes, mediante recibo, os documentos de habilitação, de registro, de licenciamento de veículo e outros exigidos por nome_lei, para averiguação de sua  - '
            ],
            [
                'nome_lei' => '241 - Deixar de atualizar o cadastro de registro do veículo'
            ],
            [
                'nome_lei' => '250 II - Deixar de manter acesa pelo menos as luzes de posição sob chuva forte, quando o veículo estiver em movimento'
            ],
            [
                'nome_lei' => '250 II - Deixar de manter acesa pelo menos as luzes de posição sob neblina, quando o veículo estiver em movimento'
            ],
            [
                'nome_lei' => '241 - Deixar de atualizar o cadastro de habilitação do condutor'
            ],
            [
                'nome_lei' => '242 - Fazer falsa declaração de domicilio para fins de registro e licenciamento'
            ],
            [
                'nome_lei' => '250 II - Deixar de manter acesa pelo menos as luzes de posição sob cerração, quando o veículo estiver em movimento'
            ],
            [
                'nome_lei' => '242 - Fazer falsa declaração de domicilio para fins de habilitação'
            ],
            [
                'nome_lei' => '243 - Deixar a empresa seguradora de comunicar ao Órgão Executivo de Trânsito competente a ocorrência de perda total do veículo e de lhe devolver as respectivas placas e documentos'
            ],
            [
                'nome_lei' => '244 I - Conduzir motocicleta, motoneta ou ciclomotor sem usar capacete de segurança com viseira ou óculos de proteção e vestuário de acordo com as normas e especificações aprovadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '244 I - Conduzir motocicleta, motoneta ou ciclomotor sem capacete de segurança'
            ],
            [
                'nome_lei' => '244 II - Conduzir motocicleta, motoneta ou ciclomotor transportando passageiro sem o capacete de segurança'
            ],
            [
                'nome_lei' => '244 I - Conduzir motocicleta, motoneta ou ciclomotor com capacete de segurança sem viseira ou óculos de proteção'
            ],
            [
                'nome_lei' => '244 II - Conduzir motocicleta, motoneta ou ciclomotor transportando passageiro, sem usar capacete de segurança com viseira ou óculos de proteção ou fora do assento suplementar colocado atrás do condutor ou com carro lateral'
            ],
            [
                'nome_lei' => '244 I - Conduzir motocicleta, motoneta ou ciclomotor sem vestuário de acordo com normas aprovadas pelo CONTRAN'
            ],
            [
                'nome_lei' => '244 II - Conduzir motocicleta, motoneta ou ciclomotor transportando passageiro fora do assento suplementar colocado atrás do condutor ou em carro lateral'
            ],
            [
                'nome_lei' => '244 III - Conduzir motocicleta, motoneta, ciclomotor fazendo malabarismo ou equilibrando-se apenas em uma roda'
            ],
            [
                'nome_lei' => '244 III - Conduzir ciclo fazendo malabarismo ou equilibrando-se apenas em uma roda'
            ],
            [
                'nome_lei' => '244 IV - Conduzir motocicleta, motoneta e ciclomotor com os faróis apagados'
            ],
            [
                'nome_lei' => '244 V - Conduzir motocicleta, motoneta e ciclomotor transportando criança menor de sete anos ou que não tenha, nas circunstâncias, condição de cuidar de sua própria segurança'
            ],
            [
                'nome_lei' => '244 VI - Conduzir motocicleta, motoneta ou ciclomotor rebocando outro veículo'
            ],
            [
                'nome_lei' => '244 VII - Conduzir motocicleta, motoneta, ciclomotor ou ciclo sem segurar o guidom com ambas as mãos, salvo eventualmente para indicação de manobras'
            ],
            [
                'nome_lei' => '244 VII - Conduzir motocicleta, motoneta, ciclomotor sem segurar o guidom com ambas as mãos, salvo eventualmente para indicação de manobras'
            ],
            [
                'nome_lei' => '244 § 1 - Conduzir ciclo sem segurar o guidom com ambas as mãos, salvo eventualmente para indicação de manobras'
            ],
            [
                'nome_lei' => '244 VIII - Conduzir motocicleta, motoneta, ciclomotor ou ciclo transportando carga incompatível com suas especificações'
            ],
            [
                'nome_lei' => '244 VIII - Conduzir motocicleta, motoneta ou ciclomotor transportando carga incompatível com suas especificações'
            ],
            [
                'nome_lei' => '244 § 1 - Conduzir ciclo transportando carga incompatível com suas especificações'
            ],
            [
                'nome_lei' => '244 § 1 A - Conduzir ciclo transportando passageiro fora da garupa ou do assento especial a ele destinado'
            ],
            [
                'nome_lei' => '244 § 1 B - Conduzir ciclo e ciclomotor em vias de trânsito rápido ou rodovias salvo, onde houver acostamento ou faixa de rolamento própria'
            ],
            [
                'nome_lei' => '244 § 1 B - Conduzir ciclo em vias de trânsito rápido salvo onde houver acostamento ou faixa de rolamento própria'
            ],
            [
                'nome_lei' => '244 § 1 B - Conduzir ciclo em rodovias salvo onde houver acostamento ou faixa de rolamento própria'
            ],
            [
                'nome_lei' => '244 § 2 - Conduzir ciclomotor em vias de trânsito rápido salvo onde houver acostamento ou faixa de rolamento própria'
            ],
            [
                'nome_lei' => '244 § 2 - Conduzir ciclomotor em rodovias salvo onde houver acostamento ou faixa de rolamento própria'
            ],
            [
                'nome_lei' => '244 II - Conduzir motocicleta, motoneta ou ciclomotor transportando passageiro com capacete de segurança sem viseira ou óculos de proteção'
            ],
            [
                'nome_lei' => '245 - Utilizar a via para depósito de mercadorias, materiais e equipamentos sem autorização do Órgão ou entidade de trânsito com circunscrição sobre a via'
            ],
            [
                'nome_lei' => '244 III - Conduzir motocicleta, motoneta ciclomotor e ciclo fazendo malabarismo ou equilibrando-se apenas em apenas uma das rodas'
            ],
            [
                'nome_lei' => '244 § 1 C - Conduzir ciclo transportando crianças que não tenham, nas circunstâncias, condições de cuidar de sua própria segurança'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar qualquer obstáculo a livre circulação, a segurança de veículo e pedestre, tanto no nome_leito da via terrestre como na  - , ou obstaculizar a via indevidamente, sem agravamento da penalidade pela Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar qualquer obstáculo a livre circulação, a segurança de veículo e pedestre, tanto no nome_leito da via terrestre como na  - , ou obstaculizar a via indevidamente, com agravamento da penalidade de duas vezes pela Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar qualquer obstáculo a livre circulação, a segurança de veículo e pedestre, tanto no nome_leito da via terrestre como na  - , ou obstaculizar a via indevidamente, com agravamento da penalidade de três vezes pela Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar qualquer obstáculo a livre circulação, a segurança de veículo e pedestre, tanto no nome_leito da via terrestre como na  - , ou obstaculizar a via indevidamente, com agravamento da penalidade de quatro vezes pela Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar qualquer obstáculo a livre circulação, a segurança de veículo e pedestre, tanto no nome_leito da via terrestre como na  - , ou obstaculizar a via indevidamente, com agravamento da penalidade de quatro vezes pela Autoridade de Trânsito'
            ],
            [
                'nome_lei' => '249 - Deixar de manter acesas a noite, as luzes de posição quando o veículo estiver parado para fins de embarque ou desembarque de passageiros'
            ],
            [
                'nome_lei' => '248 - Transportar em veículo destinados ao transporte de passageiros, carga excedente em desacordo com as normas estabelecidas pelo CONTRAN'
            ],
            [
                'nome_lei' => '249 - Deixar de manter acesas a noite, as luzes de posição quando o veículo estiver parado para fins de carga e descarga de mercadorias'
            ],
            [
                'nome_lei' => '249 - Deixar de manter acesas a noite, as luzes de posição quando o veículo estiver parado para fins de embarque ou desembarque de passageiros e de carga ou descarga de mercadorias'
            ],
            [
                'nome_lei' => '247 - Deixar de conduzir pelo bordo da pista de rolamento, em fila única, os veículos de tração ou propulsão humana e os de tração animal, sempre que não houver acostamento ou faixa a eles destinadas'
            ],
            [
                'nome_lei' => '250 I C - Em movimento de dia, deixar de manter acesa luz baixa de veículos de transporte coletivo faixas/ pistas destinadas'
            ],
            [
                'nome_lei' => '250 I B - Deixar de manter acesa a luz baixa, quando o veículo estiver em movimento, de dia, nos túneis providos de iluminação pública e nas rodovias'
            ],
            [
                'nome_lei' => '250 I A - Deixar de manter acesa a luz baixa, quando o veículo estiver em movimento, durante a noite'
            ],
            [
                'nome_lei' => '251 I - Utilizar as luzes do veículo, pisca alerta, exceto em imobilizações ou situações de emergência'
            ],
            [
                'nome_lei' => '251 II - Utilizar luz alta e baixa intermitente, exceto quando permitido pelo CTB'
            ],
            [
                'nome_lei' => '252 I - Dirigir o veículo com o braço do lado de fora'
            ],
            [
                'nome_lei' => '252 II - Dirigir o veículo transportando pessoas, animais ou volume à sua esquerda ou entre os braços e pernas'
            ],
            [
                'nome_lei' => '252 II - Dirigir o veículo transportando pessoas à sua esquerda ou entre os braços e pernas'
            ],
            [
                'nome_lei' => '252 II - Dirigir o veículo transportando animais à sua esquerda ou entre os braços e pernas'
            ],
            [
                'nome_lei' => '252 II - Dirigir o veículo transportando volume à sua esquerda ou entre os braços e pernas'
            ],
            [
                'nome_lei' => '252 III - Dirigir o veículo com incapacidade física ou mental temporária que comprometa a segurança do trânsito'
            ],
            [
                'nome_lei' => '252 IV - Dirigir o veículo usando calçado que não se firme aos pés ou que comprometa a utilização dos pedais'
            ],
            [
                'nome_lei' => '252 V - Dirigir o veículo com apenas uma das mãos, exceto quando deva fazer sinais regulamentares de braço, mudar a marcha do veículo ou acionar equipamentos e acessórios do veículo'
            ],
            [
                'nome_lei' => '252 VI - Dirigir o veículo utilizando-se de fones nos ouvidos conectados a aparelhagem sonora ou de telefone celular'
            ],
            [
                'nome_lei' => '252 VI - Dirigir o veículo utilizando-se de fones nos ouvidos conectados a aparelhagem sonora'
            ],
            [
                'nome_lei' => '252 VI - Dirigir o veículo utilizando-se de telefone celular'
            ],
            [
                'nome_lei' => '253 - Bloquear a via com o veículo'
            ],
            [
                'nome_lei' => '250 I D - Em movimento de dia, deixar de manter acesa luz baixa de motocicletas/motonetas/ciclomotores'
            ],
            [
                'nome_lei' => '250 II - Deixar de manter acesas pelo menos as luzes de posição sob chuva forte, neblina ou cerração, quando o veículo estiver em movimento'
            ],
            [
                'nome_lei' => '250 III - Deixar de manter a placa traseira iluminada à noite, quando o veículo estiver em movimento'
            ],
            [
                'nome_lei' => '254 I - É proibido ao pedestre permanecer ou andar nas pistas de rolamento, exceto para cruzá-las onde for permitido'
            ],
            [
                'nome_lei' => '254 I - É proibido ao pedestre permanecer nas pistas de rolamento, exceto para cruzá-las onde for permitido'
            ],
            [
                'nome_lei' => '254 I - É proibido ao pedestre andar nas pistas de rolamento, exceto para cruzá-las onde for permitido'
            ],
            [
                'nome_lei' => '254 II - É proibido ao pedestre cruzar pistas de rolamento nos viadutos, pontes ou túneis salvo onde exista permissão'
            ],
            [
                'nome_lei' => '254 II - É proibido ao pedestre cruzar pistas de rolamento nos viadutos, salvo onde exista permissão'
            ],
            [
                'nome_lei' => '254 II - É proibido ao pedestre cruzar pistas de rolamento nas pontes salvo onde exista permissão'
            ],
            [
                'nome_lei' => '254 II - É proibido ao pedestre cruzar pistas de rolamento nos túneis, salvo onde exista permissão'
            ],
            [
                'nome_lei' => '254 III - É proibido ao pedestre atravessar a via dentro de áreas de cruzamento, salvo quando houver sinalização para esse fim'
            ],
            [
                'nome_lei' => '254 V - É proibido ao pedestre andar fora da faixa própria, passarela, passagem aérea ou subterrânea'
            ],
            [
                'nome_lei' => '254 V - É proibido ao pedestre andar fora da passarela'
            ],
            [
                'nome_lei' => '254 V - É proibido ao pedestre andar fora da passagem aérea'
            ],
            [
                'nome_lei' => '254 V - É proibido ao pedestre andar fora da passagem subterrânea'
            ],
            [
                'nome_lei' => '254 VI - É proibido ao pedestre desobedecer a sinalização de trânsito específica'
            ],
            [
                'nome_lei' => '255 - Conduzir bicicleta em passeios onde não seja permitida a circulação desta ou de forma agressiva'
            ],
            [
                'nome_lei' => '255 - Conduzir bicicleta em passeios onde não seja permitida a circulação desta'
            ],
            [
                'nome_lei' => '255 - Conduzir bicicleta de forma agressiva'
            ],
            [
                'nome_lei' => '254 V - É proibido ao pedestre andar fora da faixa própria'
            ],
            [
                'nome_lei' => '254 IV - É proibido ao pedestre utilizar-se da via em agrupamentos capazes de perturbar o trânsito ou para a pratica de qualquer folguedo, esportes, desfiles e similares, salvo em casos especiais e com a devida licença de Autoridade competente'
            ],
            [
                'nome_lei' => '218 III - Transitar em velocidade superior à máxima permitida para o local, medida por instrumento ou equipamento hábil, rodovias, vias de trânsito rápido, vias arteriais e demais vias quando a velocidade for superior à máxima em mais de 50% (cinquenta por cento)'
            ],
            [
                'nome_lei' => '218 II - Transitar em velocidade superior à máxima permitida para o local, medida por instrumento ou equipamento hábil, rodovias, vias de trânsito rápido, vias arteriais e demais vias quando a velocidade for superior à máxima em mais de 20% (vinte por cento) até 50% (cinquenta por cento)'
            ],
            [
                'nome_lei' => '230 V - Conduzir o veículo que não esteja registrado'
            ],
            [
                'nome_lei' => '181 XIX - Estacionar o veículo em locais e horários de estacionamento e parada proibida pela sinalização'
            ],
            [
                'nome_lei' => '230 V - Conduzir o veículo registrado que não esteja devidamente licenciado'
            ],
            [
                'nome_lei' => '234 - Adulterar documento de identificação do veículo'
            ],
            [
                'nome_lei' => '234 - Falsificar documento de identificação do veículo'
            ],
            [
                'nome_lei' => '244 V - Conduzir motocicleta/motoneta/ciclomotor transportando criança menor de 10 anos de idade'
            ],
            [
                'nome_lei' => '244 V - Conduzir motocicleta, motoneta e ciclomotor transportando criança sem condição cuidar própria segurança'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar obstáculo à circulação/ segurança calçada/ pista sem agravamento'
            ],
            [
                'nome_lei' => '246 - Obstaculizar a via indevidamente agravamento 3X'
            ],
            [
                'nome_lei' => '218 I - Transitar em velocidade superior à máxima permitida para o local, medida por instrumento ou equipamento hábil, rodovias, vias de trânsito rápido, vias arteriais e demais vias quando a velocidade for superior à máxima em até 20% (vinte por cento)'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar obstáculo circulação/ segurança calçada/ pista agravamento 4X'
            ],
            [
                'nome_lei' => '246 - Obstaculizar a via indevidamente agravamento 4X'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar obstáculo circulação/ segurança calçada/ pista agravamento 5X'
            ],
            [
                'nome_lei' => '246 - Obstaculizar a via indevidamente agravamento 5X'
            ],
            [
                'nome_lei' => '247 - Deixar de conduzir pelo bordo pista em fila única veículo de tração/ propulsão humana'
            ],
            [
                'nome_lei' => '247 - Deixar de conduzir pelo bordo da pista em fila única veículo de tração animal'
            ],
            [
                'nome_lei' => '187 I - Transitar em local/horário não permitido pela regulamentação - veículo de carga'
            ],
            [
                'nome_lei' => '246 - Obstaculizar a via indevidamente - sem agravamento'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar obstáculo circulação/ segurança calçada/ pista agravamento 2X'
            ],
            [
                'nome_lei' => '246 - Obstaculizar a via indevidamente agravamento 2X'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar em desacordo com a regulamentação - vaga para idoso.'
            ],
            [
                'nome_lei' => '184 III - Transitar com o veículo na faixa ou via exclusiva regulamentada para transporte público coletivo de passageiros'
            ],
            [
                'nome_lei' => '246 - Deixar de sinalizar obstáculo circulação/ segurança calçada/ pista agravamento 3X'
            ],
            [
                'nome_lei' => '165 A - Condutor que se recusar a submeter a qualquer dos procedimentos previstos no art. 277 do CTB'
            ],
            [
                'nome_lei' => '230 XXIII - Conduzir veículo de carga ou passageiros em desacordo com intervalos para descanso'
            ],
            [
                'nome_lei' => '250 I B - Em movimento de dia, deixar de manter acesa luz baixa em túneis'
            ],
            [
                'nome_lei' => '250 I B - Em movimento de dia, deixar de manter acesa luz baixa sob chuva, neblina ou cerração'
            ],
            [
                'nome_lei' => '253 A - Usar qualquer veículo para, deliberadamente, interromper a circulação na via sem autorização do órgão'
            ],
            [
                'nome_lei' => '253 A - Usar qualquer veículo para, deliberadamente, restringir a circulação na via sem autorização do órgão'
            ],
            [
                'nome_lei' => '253 A - Usar qualquer veículo para, deliberadamente, perturbar a circulação na via sem autorização do órgão'
            ],
            [
                'nome_lei' => '181 XX - Estacionar o veículo nas vagas reservadas a idosos, sem credencial que comprove tal condição'
            ],
            [
                'nome_lei' => '165 B - Conduzir veículo para o qual seja exigida habilitação nas categorias C, D ou E sem realizar exame toxicológico previsto no § 2º do art. 148-A, após 30 dias do vencimento do prazo estabelecido'
            ],
            [
                'nome_lei' => '182 XI - Parar o veículo sobre ciclovia ou ciclofaixa'
            ],
            [
                'nome_lei' => '165 B § único - Exerce atividade remunerada ao veículo e não comprova a realização de exame toxicológico periódico exigido pelo § 2º do art. 148-A por ocasião da renovação do documento de habilitação nas categorias C, D ou E'
            ],
            [
                'nome_lei' => '244 X - Conduzir motocicleta, motoneta e ciclomotor com utilização de capacete de segurança sem viseira/ óculos de proteção'
            ],
            [
                'nome_lei' => '244 X - Conduzir motocicleta, motoneta e ciclomotor com utilização de capacete de segurança com viseira/ óculos proteção em descumprimento com a regulamento da CONTRAN'
            ],
            [
                'nome_lei' => '244 XI - Conduzir motocicleta, motoneta e ciclomotor transportando passageiro com capacete de segurança sem viseira/ óculos de proteção'
            ],
            [
                'nome_lei' => '244 XI - Conduzir motocicleta, motoneta ou ciclomotor transportando passageiro com o capacete de segurança com viseira/ óculos de proteção em descumprimento com a regulamento da CONTRAN'
            ],
            [
                'nome_lei' => '250 I E - Quando o veículo estiver em movimento deixar de manter acesa luz baixa de dia, em rodovias de pista simples situadas fora dos perímetros urbanos, no caso de veículos desprovidos de luzes de rodagem diurna'
            ],
            [
                'nome_lei' => '233 c/c 123 I - Deixar de efetuar registro do veículo em 30 dias, quando for transferir a propriedade'
            ],
            [
                'nome_lei' => '233 c/c 123 II - Deixar de efetuar registro do veículo em 30 dias, quando mudar o município de domicilio/ residência'
            ],
            [
                'nome_lei' => '233 c/c 123 III - Deixar de efetuar registro de veículo em 30 dias, quando for alterada qualquer caráter do veículo'
            ],
            [
                'nome_lei' => '233 c/c 123 IV - Deixar de efetuar registro de veículo em 30 dias, quando houver mudança de categoria'
            ],
            [
                'nome_lei' => '181 XX - Estacionar o veículo nas vagas reservadas às pessoas com deficiência ou idosos, sem credencial que comprove tal condição'
            ],
            [
                'nome_lei' => '252 § único - Dirigir veículo segurando telefone celular'
            ],
            [
                'nome_lei' => '181 XVII - Estacionar em desacordo com a regulamentação - vaga de curta duração.'
            ],
            [
                'nome_lei' => '252 § único - Dirigir veículo manuseando telefone'
            ]
        ];

        foreach ($leis as $lei) {
            DB::table('ctbs')->updateOrInsert($lei, $lei);
        }
    }
}
