<?php

use Illuminate\Database\Seeder;
use app\Situacao_processo;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('Situacao_processos_tableSeeder');
        $this->call('Local_infracaos_tableSeeder');
        $this->call('Tipo_infracao_disciplinars_tableSeeder');

    }
}

/**
*  Classe referente ao preenchimento da tabela situacao de processos,
* ou seja, as fases 
*/
class Situacao_processos_tableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('situacao_processos')->delete();


		//Populando uma array já com valores predefinidos
		$array_situacao_processo = array( 
		'Em investigação preliminar',
		'Em análise - exame de admissibilidade',
		'Aguardando instauração – PAD',
		'Aguardando instauração – Sindicância Investigativa',
		'Aguardando instauração – Sindicância Acusatória',
		'Aguardando instauração – Sindicância Patrimonial',
		'Instaurado – PAD',
		'Instaurado – Sindicância Investigativa',
		'Instaurado – Sindicância Acusatória',
		'Instaurado – Sindicância Patrimonial',
		'SAI, SAD ou PAD aguardando análise de mérito',
		'SAI, SAD ou PAD aguardando julgamento no Superintendente ou CG',
		'PAD aguardando julgamento na CJ',
		'Recursos aguardando julgamento - Superintendente, CG ou CJ',
		'Recursos aguardando julgamento - Superintendente, CG ou CJ' );

		foreach ($array_situacao_processo as $key => $value) {
			DB::table('situacao_processos')->insert(array(
				array (
					'descricao_situacao_processo' => $value
					)

			));
		}
		
	}
}


/**
*  Classe referente ao preenchimento da tabela locao da infracao,
* ou seja, as localidades
*/

class Local_infracaos_tableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('local_infracaos')->delete();

		//Populando uma array já com valores predefinidos
		$array_local_infracao = array( 
		'1ª DEL.',
		'2ª DEL.',
		'3ª DEL.',
		'4ª DEL.',
		'5ª DEL.',
		'6ª DEL.',
		'7ª DEL.',
		'8ª DEL.',
		'9ª DEL.',
		'10ª DEL.',
		'11ª DEL.',
		'12ª DEL.',
		'13ª DEL.',
		'14ª DEL.',
		'15ª DEL.',
		'16ª DEL.',
		'17ª DEL.',
		'Vários',
		'Indeterminado'
			);

		foreach ($array_local_infracao as $key => $value) {
			DB::table('local_infracaos')->insert(array(
				array (
					'descricao_local_infracao' => $value
					)

			));
		}
		
	}
}

/**
*  Classe referente ao preenchimento da tabela tipo das infracoes,
* ou seja, as infracçoes em si
*/

class Tipo_infracao_disciplinars_tableSeeder extends Seeder
{
	
	public function run()
	{
		DB::table('tipo_infracao_disciplinars')->delete();

		//Populando uma array já com valores predefinidos
		$array_tipo_infracao_disciplinar = array( 
		'Acidente envolvendo aeronave',
		'Uso irregular de viatura',
		'Acidente envolvendo viatura',
		'Uso irregular de aeronave',
		'Inconsistência de abastecimento',
		'Extravio de material controlado',
		'Extravio/ Furto/ Dano de material de terceiros sob a responsabilidade da PRF',
		'Extravio de documento ou processo',
		'Extravio de identidade funcional',
		'Uso indevido dos sistemas informatizados, computadores, e-mail, internet ou rede interna',
		'Uso irregular de arma de fogo, spray de pimenta, TASER ou outros equipamentos de coerção',
		'Falta de zelo na utilização ou conservação de material da PRF',
		'Solicitação/ exigência de dinheiro para deixar de cumprir dever legal ou valimento do cargo para obter vantagem indevida.',
		'Maus tratos, abusos e ofensas físicas cometidas em serviço ou fora deste, caso haja alguma ligação com a instituição.',
		'Tráfico de influência/ Nepotismo/ atuar como procurador',
		'Conduta inadequada, incompatível com a moralidade, tais como solicitar passagem rodoviária e entrada gratuita em estabelecimentos comerciais.',
		'Discussão entre PRFs em serviço',
		'Exercício de atividade incompatível/ Acumulação ilegal de cargos',
		'Descumprimento de cartão programa ou ordem legal',
		'Falta/ atraso ao serviço, escalas extra ou reuniões',
		'Falta injustificada a audiências judiciais, administrativas ou perícias médicas',
		'Ausentar-se do serviço sem prévia autorização/ Troca de plantão sem autorização',
		'Responsabilidade da chefia por falta de controle administrativo',
		'Omissão ou atraso injustificado de atendimento de acidente de trânsito',
		'Irregularidades na liberação de veículos',
		'Irregularidades em Boletim de Acidente de Trânsito, inclusive atraso na entrega do BAT',
		'Irregularidades no preenchimento de Autos de Infração ou outros documentos de serviço',
		'Dormir em serviço',
		'Dar causa à prescrição processual / Atraso no andamento de documento, processo ou serviço/ Deixar de comunicar irregularidade em serviço',
		'Falha administrativa ou operacional com consequência grave para a Administração',
		'Envolvimento em crimes, exceto Contra a Administração',
		'Omissão/ Não cumprimento de dever legal',
		'Prestar declaração falsa ou apresentar documento falso',
		'Outros – especificar em OBSERVAÇÕES'

			);

		foreach ($array_tipo_infracao_disciplinar as $key => $value) {
			DB::table('tipo_infracao_disciplinars')->insert(array(
				array (
					'descricao_tipo_infracao_disciplinar' => $value
					)

			));
		}
		
	}
}