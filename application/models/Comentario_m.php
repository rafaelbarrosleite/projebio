<?php
class Comentario_m extends CI_Model {

    function buscarTodosComentarios(){
        $this->db->select('*');
        $this->db->from('comentario');
        return $this->db->get();
    }

    function salvarComentario($data){
        $this->db->insert('comentario', $data);
        return $this->db->insert_id();
    }
}
?>