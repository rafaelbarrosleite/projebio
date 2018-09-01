<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('array');       
        $this->load->model('usuario_m', 'usuario');
                
    }

    function index() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('login', 'Login', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        

        $query = $this->usuario->validate();
        if ($this->form_validation->run() == FALSE) {
           // $this->load->view('templates/header');
            $this->load->view('login/login');
            //$this->load->view('templates/footer');
        } else {
            if ($query) { // VERIFICA LOGIN E SENHA\
                foreach ($query->result_array() as $row)
                {
                    $usuario = $row['login'];
                    $id_usuario = $row['idUsuario'];
                }              
                    $data = array(
                        'login' => $usuario,
                        'idUsuario' => $id_usuario,
                        'logged' => true,
                        'status' => '1'
                    );
                    $this->session->set_userdata($data);
                 redirect('areaRestrita/Cotacao');
            
            } else {
                //redirect('login');
                //$this->load->view('templates/header');
                $this->load->view('login/login');
               // $this->load->view('templates/footer');
                echo "Usuário ou senha inválidos";
				//redirect($this->index());
            }
        }
    }
	
	function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
	
	
}