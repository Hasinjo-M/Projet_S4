<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_carte extends CI_Model{

    /**** insertion  carte  ***/
    public function insert($code, $valeur, $validationcode = 0){
        $requet = "insert into carte values (null, %s, %d)";
        $requet = sprintf($requet,$this->db->escape($code),
            $this->db->escape((double)$valeur)
        );
        $this->db->query($requet);
    }

    /**** Valuer d'un code ***/
    public function valeurcode($code){
        $requet = "select * from carte where code = %s";
        $requet = sprintf($requet,$this->db->escape($code));
        return $this->db->query($requet)->row_array();     
    }

    /**** insertion  carteutilisateur */
    public function insertcarteutilisateur($idutilisateur, $code){
        $requet = "insert into carteutilisateur values(null, %s, %d, 0)";
        $requet = sprintf($requet,
            $this->db->escape($code),
            $this->db->escape((int)$idutilisateur)
        );
        $this->db->query($requet);
    }

    /**** verification si le code est deja insert  ****/
    public function verification_code($code, $values){
        $requet = "select * from carteutilisateur where code = %s and validationcode = %d";
        $requet = sprintf($requet,
            $this->db->escape($code),
            $this->db->escape((int)$values)
        );
        return $this->db->query($requet)->row_array();    
    }

    /***** insertion code par utilisateur
     *  avec la verification si cette code existe
     *   *****/
    public function validationcodeutilisateur($code, $idutilisateur){
        $valeur =  $this->valeurcode($code);
        if($valeur != null){
            $rep = $this->verification_code($code, 0);
            $rep1 = $this->verification_code($code, 1);
            if($rep != null || $rep1 != null ){
                return "Ce code n'est plus disponible";
            }
            $this->insertcarteutilisateur($idutilisateur, $code);
            return 1;
        }
        return "cette code n'existe pas";
    }

    public function insertsolde($idutilisateur, $debit, $credit){
        $requet = "insert into solde values(null, %d, %d, %d, default) ";
        $requet = sprintf($requet,$this->db->escape((int)$idutilisateur),
            $this->db->escape((double)$debit),
            $this->db->escape((double)$credit)
        ); 
        $this->db->query($requet);
    }

    /**** update validation code  ***/
    public function updatecarteutilisateur($code){
        $requet = "update carteutilisateur set  validationcode=1 where code = %s";
        $requet = sprintf($requet,$this->db->escape($code));
        $this->db->query($requet);
    }

    /****!*  validation carte  par admin *****/
    public function validationparadmin($code, $idutilisateur){
        $valeur = $this->valeurcode($code);
        $this->updatecarteutilisateur($code);
        $this->insertsolde($idutilisateur, $valeur['valeur'], 0);
    } 

    /**** Liste de code non valider par admin mais utilisateur ***/
    public function scriptcode($contrainte){
        $requet = "select carteutilisateur.id as idcarteutilisateur, carteutilisateur.code as code,
            carteutilisateur.idutilisateur as idutilisateur,
            utilisateur.nom as nom , utilisateur.prenom,
            carteutilisateur.validationcode, 
            carte.valeur 
            from carteutilisateur
                join utilisateur on carteutilisateur.idutilisateur = utilisateur.id 
                join carte on carte.code = carteutilisateur.code
            where carteutilisateur.validationcode  = %d";
            return sprintf($requet,$this->db->escape((int)$contrainte));
    }
    public function listecodenonvalider(){
        $requet = $this->scriptcode(0);
        return $this->db->query($requet)->result_array();
    }
    

}