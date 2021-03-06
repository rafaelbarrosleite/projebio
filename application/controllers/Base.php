<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base extends CI_Controller {

    function __construct() {
        parent::__construct();
		$this->load->model('comentario_m');
		$this->load->model('cotacao_m');
    }


	public function index()
	{
		$data['validacao'] = "primeiroAcesso";
		
		$cotacaoOleo = $this->cotacao_m->buscarUltimaCotacaoPorTipo('1');
		foreach($cotacaoOleo->result() as $oleo){}
		$data['cotacaoOleo'] = $this->formatarValor($oleo->valor, '3');
		
		$cotacaoTorta = $this->cotacao_m->buscarUltimaCotacaoPorTipo('2');
		foreach($cotacaoTorta->result() as $torta){}
		$data['cotacaoTorta'] = $this->formatarValor($torta->valor, '2');
		
		$this->load->view('projebio', $data);
	}

	private function formatarValor($valor, $numeroCadasDecimais){
		$valorFormatado = number_format($valor, $numeroCadasDecimais, ',', '.');
		return $valorFormatado;
	}

	public function salvarContato(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('telefone', 'telefone', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('comentario', 'comentario', 'required');
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->load->helper('array');

		if ($this->form_validation->run() == FALSE) {         
			$data['validacao'] = "erroValidacao";  
			$this->load->view('projebio', $data);
		} else{
			$data_hoje_sql =date("Y-m-d");
			$data = array(
				'idComentario' => '',
				'nomeCliente' => $this->input->post('nome'),
				'telefoneCliente' => $this->input->post('telefone'),
				'emailCliente' => $this->input->post('email'),
				'textoComentario' => $this->input->post('comentario'),
				'dataComentario' => $data_hoje_sql
			);

			$idComentario = $this->comentario_m->salvarComentario($data);

			if ($idComentario > 0) {
				$data['validacao'] = "comentarioEnviado";  
				$cotacaoOleo = $this->cotacao_m->buscarUltimaCotacaoPorTipo('1');
				foreach($cotacaoOleo->result() as $oleo){}
				$data['cotacaoOleo'] = $this->formatarValor($oleo->valor, '3');
				
				$cotacaoTorta = $this->cotacao_m->buscarUltimaCotacaoPorTipo('2');
				foreach($cotacaoTorta->result() as $torta){}
				$data['cotacaoTorta'] = $this->formatarValor($torta->valor, '2');
				
				$this->load->view('projebio', $data);
			} else {
				$data['validacao'] = "erroEnviarComentario";
				$cotacaoOleo = $this->cotacao_m->buscarUltimaCotacaoPorTipo('1');
				foreach($cotacaoOleo->result() as $oleo){}
				$data['cotacaoOleo'] = $this->formatarValor($oleo->valor, '3');
				
				$cotacaoTorta = $this->cotacao_m->buscarUltimaCotacaoPorTipo('2');
				foreach($cotacaoTorta->result() as $torta){}
				$data['cotacaoTorta'] = $this->formatarValor($torta->valor, '2');
				
				$this->load->view('projebio', $data);
			}
		}   
	}

	
}
