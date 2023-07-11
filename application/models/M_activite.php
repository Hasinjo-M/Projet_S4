<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_activite extends CI_Model{

    public function insert($libelle, $photo){
        $requet = "insert into activite values(null, %s, %s)";
        $query = sprintf($requet,$this->db->escape($libelle),
        $this->db->escape($photo)
        );
        return $this->db->query($query);     
    }

    public function listeactivite(){
        $requet = "select * from activite";  
        return $this->db->query($requet)->result_array(); 
    }

    public function activite($id){
        $requet = "select * from activite where id = %d";
        $requet = sprintf($requet,$this->db->escape((int)$id));
        return $this->db->query($requet)->row_array(); 
    }

    public function update($id, $nom){
        $requet = "update activite set nom = %s where id = %d";
        $requet = sprintf($requet,$this->db->escape($nom),
            $this->db->escape((int)$id)); 
        $this->db->query($requet); 
    }
}