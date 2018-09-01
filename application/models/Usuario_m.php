<?php
class Usuario_m extends CI_Model {

    # VALIDA USUÁRIO
    function validate() {
        $this->db->where('login', $this->input->post('login')); 
        $this->db->where('senha', $this->input->post('senha'));
        $this->db->where('status', 1); // Verifica o status do usuário
        $query = $this->db->get('usuario');    
       if ($query->num_rows() == 1) { 
			return $query;
        }
    }

    # VERIFICA SE O USUÁRIO ESTÁ LOGADO
    function logged() {
        $logged = $this->session->userdata('logged');
        $status = $this->session->userdata('status');
        if (!isset($logged) || $logged != true || $status != '1') {
            redirect('login');
			echo 'Voce nao tem permissao para entrar nessa pagina.';
            die();
        }
    }
}