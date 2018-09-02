<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cotacao extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario_m', 'usuario');
        $this->usuario->logged();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->model('Cotacao_m', 'cotacao_m');
    }
    
    public function index() {
     
        $cotacaoOleo = $this->cotacao_m->buscarUltimaCotacaoPorTipo('1');
		foreach($cotacaoOleo->result() as $oleo){}
		$data['cotacaoOleo'] = $this->formatarValor($oleo->valor, '3');
        
		$cotacaoTorta = $this->cotacao_m->buscarUltimaCotacaoPorTipo('2');
		foreach($cotacaoTorta->result() as $torta){}
		$data['cotacaoTorta'] = $this->formatarValor($torta->valor, '2');

        $data['cotacoesOleo'] = $this->cotacao_m->buscarTodasCotacaoPorTipo('1')->result_array();
       // $data['cotacoesOleoAsc'] = $this->cotacao_m->buscarTodasCotacaoPorTipoCrescente('1')->result_array();

        $data['cotacoesTorta'] = $this->cotacao_m->buscarTodasCotacaoPorTipo('2')->result_array();
     //   $data['cotacoesTortaAsc'] = $this->cotacao_m->buscarTodasCotacaoPorTipoCrescente('2')->result_array();

        $data_hoje_sql =date("Y-m-d");
        $data['dataAtual'] = $data_hoje_sql;
        
        
        $this->load->view('areaRestrita/template/header',$data);
        $this->load->view('areaRestrita/template/menu',$data);
        $this->load->view('areaRestrita/cotacao/listarCotacoes',$data);
        $this->load->view('areaRestrita/template/footer',$data);
    }

    private function formatarValor($valor, $numeroCadasDecimais){
		$valorFormatado = number_format($valor, $numeroCadasDecimais, ',', '.');
		return $valorFormatado;
    }
    
    public function salvarCotacao(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('optionTipo', 'Tipo de Produto', 'required');
        $this->form_validation->set_rules('inputValorCotacao', 'Valor da Cotação', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        $this->load->helper('array');

        if ($this->form_validation->run() == FALSE) {
            redirect('areaRestrita/Cotacao');
        }else{
            $valor= $this->input->post('inputValorCotacao');
            $valor_formatado = str_replace(".","",$valor );
            $valor_formatado2 = str_replace(",",".",$valor_formatado );
            
            $data_hoje_sql =date("Y-m-d");
            $data = array(       
                'idCotacao' => '',
                'valor' => $valor_formatado2,
                'data' => $data_hoje_sql,
                'tipo' => $this->input->post('optionTipo')
            );
            $idCotacao = $this->cotacao_m->salvarCotacao($data);
            if ($idCotacao > 0){
                redirect('areaRestrita/Cotacao');
            }else{
                redirect('areaRestrita/Cotacao');
            }
        }
    }

}