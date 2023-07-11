<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_aliment extends CI_Model{

    public function insert($idcategorie, $nom, $prix){
        $requet = "insert into aliment values(null, %d, %s, %d)";
        $requet = sprintf($requet,
            $this->db->escape((int)$idcategorie),
            $this->db->escape($nom),
            $this->db->escape((double)$prix)
        );
        $this->db->query($requet);
        $id = $this->getiddernier();
        $sary = "kjyiusdfgh";
        $this->insertphoto($id['id'], $sary);
    }

    /**
    *  liste categorie
    */
    public function listecategorie(){
        $requet = "select * from categorie";
        return $this->db->query($requet)->result_array();             
    }





    /*** function dernier ligne insert  ***/
    public function getiddernier(){
        $requet = "select id from aliment order by id DESC limit 1";
        return $this->db->query($requet)->row_array();  
    }

    /**** insert photo ****/
    public function insertphoto($idaliment, $libelle){
        $requet = "insert photoaliment values (null, %d, %s)";
        $requet = sprintf($requet,
            $this->db->escape((int)$idaliment),
            $this->db->escape($libelle)
        );
        $this->db->query($requet);
    }

    /***** Script  photo  *****/
    public function scriptall(){
        $requet = "select categorie.id as idcategorie, categorie.nom as nom,
            aliment.id as idaliment, aliment.nom as nomaliment, aliment.prix as prixaliment,
            photoaliment.libelle as photo 
            from aliment 
            join categorie on categorie.id = aliment.idcategorie
            join photoaliment on photoaliment.idaliment = aliment.id";
        return $requet;
    }
    public function scriptparcategorie($idcategorie){
        $requet = "select categorie.id as idcategorie, categorie.nom as nom,
        aliment.id as idaliment, aliment.nom as nomaliment, aliment.prix as prixaliment,
        photoaliment.libelle as photo 
        from aliment 
            join categorie on categorie.id = aliment.idcategorie
            join photoaliment on photoaliment.idaliment = aliment.id
        where categorie.id = %d";
        $requet = $requet = sprintf($requet,
            $this->db->escape((int)$idcategorie)
        );
        return $requet;
    }

    public function scriptaliment($idaliment){
        $requet = "select categorie.id as idcategorie, categorie.nom as nom,
        aliment.id as idaliment, aliment.nom as nomaliment, aliment.prix as prixaliment,
        photoaliment.libelle as photo 
        from aliment 
            join categorie on categorie.id = aliment.idcategorie
            join photoaliment on photoaliment.idaliment = aliment.id
        where aliment.id = %d";
        $requet = sprintf($requet,
            $this->db->escape((int)$idaliment)
        );
        return $requet;   
    }

    /***
     * Liste de tout les aliments
     */
    public function listealiment(){
        $requet = $this->scriptall();
        return $this->db->query($requet)->result_array();    
    }

    /**
     * Liste aliment par categorie 
     */
    public function getlistealimentcategorie($idcategorie){
        $requet =  $this->scriptparcategorie($idcategorie);
        return $this->db->query($requet)->result_array();    
    }

    /****
     * Detail aliment 
     */

    public function getaliment($idaliment){
        $requet =  $this->scriptaliment($idaliment);
        return $this->db->query($requet)->row_array();    
    }


    /**** update aliment  */
    public function updatealiment($idcategorie, $nom, $prix, $id){
        $requet = "update  aliment set idcategorie=%d, nom=%s, prix=%d where id = %d";
        $requet = sprintf($requet, $this->db->escape((int)$idcategorie),
            $this->db->escape($nom),
            $this->db->escape((double)$prix),
            $this->db->escape((int)$id)
        );
        $this->db->query($requet);
    }

}