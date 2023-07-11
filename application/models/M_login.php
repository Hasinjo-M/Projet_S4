<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model{

    public function check_login($email,$password){
        $query = "select id,estadmin from utilisateur where email=%s and mdp=%s ";
        $query = sprintf($query,$this->db->escape($email),$this->db->escape($password));
        return $this->db->query($query)->row_array();     
    }

    public function insertion($idgenre, $nom, $prenom, $datenaissance, $estadmin, $email, $mdp){
        $query = "insert into utilisateur values (null,%d,%s,%s,%s,%d,%s,%d)";
        $query = sprintf($query,$this->db->escape((int)$idgenre), $this->db->escape($nom), $this->db->escape($prenom),
            $this->db->escape($datenaissance), $this->db->escape((int)$estadmin), $this->db->escape($email),$this->db->escape($mdp));
        $this->db->query($query);
    }
   


	
	
}