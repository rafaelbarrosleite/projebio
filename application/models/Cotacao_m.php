<?php
class Cotacao_m extends CI_Model {

    function buscarTodosCotacoes(){
        $this->db->select('*');
        $this->db->from('cotacao');
        return $this->db->get();
    }

    function salvarCotacao($data){
        $this->db->insert('cotacao', $data);
        return $this->db->insert_id();
    }

    function buscarTodasCotacaoPorTipo($tipo){
        $this->db->select('*');
        $this->db->from('cotacao');
        $this->db->where('tipo', $tipo);
        $this->db->order_by('idCotacao','DESC');
        return $this->db->get();
    }

    function buscarTodasCotacaoPorTipoCrescente($tipo){
        $this->db->select('*');
        $this->db->from('cotacao');
        $this->db->where('tipo', $tipo);
        $this->db->order_by('idCotacao','ASC');
        return $this->db->get();
    }

    function buscarUltimaCotacaoPorTipo($tipo){
        $this->db->select('*');
        $this->db->from('cotacao');
        $this->db->limit(1);
        $this->db->where('tipo', $tipo);
        $this->db->order_by('idCotacao','DESC');
        return $this->db->get();
    }
}
?>