<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Mensagem extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('usuario_m', 'usuario');
        $this->usuario->logged();
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->model('Comentario_m', 'comentario_m');
    }
    
    public function index() {
        $data_hoje_sql =date("Y-m-d");
        $data['dataAtual'] = $data_hoje_sql;
        $data['mensagens'] = $this->comentario_m->buscarTodosComentarios()->result_array();
        $this->load->view('areaRestrita/template/header',$data);
        $this->load->view('areaRestrita/template/menu',$data);
        $this->load->view('areaRestrita/mensagem/listarMensagens',$data);
        $this->load->view('areaRestrita/template/footer',$data);
    }

    private function formatarValor($valor, $numeroCadasDecimais){
		$valorFormatado = number_format($valor, $numeroCadasDecimais, ',', '.');
		return $valorFormatado;
    }
    
    public function excluirMensagem($idMensagem){
        $this->comentario_m->excluirMensagem($idMensagem);
        redirect('areaRestrita/Mensagem');
    }

}