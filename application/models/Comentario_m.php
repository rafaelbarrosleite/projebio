<?php
class Comentario_m extends CI_Model {

    function buscarTodosComentarios(){
        $this->db->select('*');
        $this->db->from('comentario');
        $this->db->order_by('idComentario','DESC');
        return $this->db->get();
    }

    function salvarComentario($data){
        $this->db->insert('comentario', $data);
        return $this->db->insert_id();
    }

    public function excluirMensagem($idMensagem){
        $this->db->where('idComentario', $idMensagem);
        $this->db->delete('comentario');
    }

}
?>