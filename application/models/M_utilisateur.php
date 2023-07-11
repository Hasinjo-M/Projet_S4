<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_utilisateur extends CI_Model{

    public function check_login($email,$password){
        $query = "select id,estadmin from utilisateur where email=%s and mdp=%s ";
        $query = sprintf($query,$this->db->escape($email),$this->db->escape($password));
        return $this->db->query($query)->row_array();     
    }	
	
    // Avoir le durée de sommeil du dernier regimeutilisateur
    public function solde($iduser) {
        $sql = "select sum(debit) as debit, sum(credit) as credit from solde where idutilisateur = ".$iduser." group by idutilisateur";
        $query = $this->db->query($sql);

        return $query->result();
    }
}