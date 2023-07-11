<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_regimeadmin extends CI_Model{
    
    /***
     * insertion regime
     */
    public function insertRegime($but, $taillemin, $taillemax, $poidsmin, $poidsmax, $agemin, $agemax, $butmin, $butmax, $rythme){
        $requet = "insert into regime values (null, %d, %d, %d, %d, %d, %d,%d,%d,%d,%d )";
        $requet = sprintf($requet,$this->db->escape((int)$but),
            $this->db->escape((double)$taillemin),
            $this->db->escape((double)$taillemax),
            $this->db->escape((double)$poidsmin),
            $this->db->escape((double)$poidsmax),
            $this->db->escape((double)$agemin),
            $this->db->escape((double)$agemax),
            $this->db->escape((double)$butmin),
            $this->db->escape((double)$butmax),
            $this->db->escape((double)$rythme)
        );
        $this->db->query($requet);
    }

    public  function updateregime($id,  $taillemin, $taillemax, $poidsmin, $poidsmax, $agemin, $agemax, $butmin, $butmax, $rythme){
        $requet = "update  regime set but = %d, taillemin=%d, taillemax=%d,  poidsmin=%d, poidsmax=%d, agemin= %d, agemax = %d, butmin=%d,  butmax = %d, rythme = %d  where id = %d";
        $requet = sprintf($requet,$this->db->escape((int)$but),
            $this->db->escape((double)$taillemin),
            $this->db->escape((double)$taillemax),
            $this->db->escape((double)$poidsmin),
            $this->db->escape((double)$poidsmax),
            $this->db->escape((double)$agemin),
            $this->db->escape((double)$agemax),
            $this->db->escape((double)$butmin),
            $this->db->escape((double)$butmax),
            $this->db->escape((double)$rythme),
            $this->db->escape((double)$id)
        );
        $this->db->query($requet);
    }


    /*
    *   insert regimealiment
    */
    public function insertregimealiment($idregime, $idaliment){
        $requet = "insert into regimealiment values(null, %d, %d)";
        $requet = sprintf($requet,$this->db->escape((int)$idregime),
            $this->db->escape((double)$idaliment)
        );
        $this->db->query($requet);
    }

    /***
     * regime activite 
     */
    public function insertregimeactivite($idregime, $idactivite, $dure){
        $requet = "insert into regimeactivite values (null, %d, %d, %d)";
        $requet = sprintf($requet,$this->db->escape((int)$idregime),
            $this->db->escape((int)$idactivite),
            $this->db->escape((double)$dure)
        );
        $this->db->query($requet);
    }
       
    
  
}