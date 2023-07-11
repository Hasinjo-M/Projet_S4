<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_regime extends BDDObject {
    protected $table = 'regimeutilisateur';

    // Vérifier si l'utilisateur a deja choisie un régime
    public function estConfirme() {
        $idregime = $this->idRegimeActif();

        if($idregime != null) {
            return true;
        }
        return false;
    }
    // Avoir la listre des suggestions par rapport au dernier regimeutilisateur
    public function suggestion() {
        $sql = "SELECT * FROM regime";
        $query = $this->db->query($sql);

        return $query->result();
    }

    // Avoir l'id regime du dernier regimeutilisateur
    public function idRegimeActif() {
        $sql = "SELECT idregime FROM regimeutilisateur order by id desc limit 1";
        $query = $this->db->query($sql);

        return $query->row(0)->idregime;
    }

    // Avoir l'id du dérnier regimeutilisateur
    public function idRegimeAjouteRecement() {
        $sql = "SELECT max(id) as max FROM regimeutilisateur";
        $query = $this->db->query($sql);

        return $query->row(0)->max;
    }

    // Fonction qui confirme un regime parmis les proposés
    public function validerRegime($idRegime) {
        $filtre = array("id" => $this->idRegimeAjouteRecement());
        $options_echappees = array(
            "idregime" => $idRegime
        );
        $options_non_echappees = array('debut' => 'now()');

        $this->update($filtre, $options_echappees, $options_non_echappees);
    }

    // Avoir la liste des aliments pour le régime choisie
    public function nutrition($idregime) {
        $sql = "select aliment.nom, aliment.prix, regimealiment.* from regimealiment
            join aliment on regimealiment.idaliment = aliment.id
            where idregime = ".$idregime;
        $query = $this->db->query($sql);

        return $query->result();
    }

    // Avoir la liste des aliments pour le régime choisie
    public function activite() {
        $sql = "select activite.nom, regimeactivite.* from regimeactivite
            join activite on regimeactivite.idactivite = activite.id
            where idregime = ".$this->idRegimeActif();
        $query = $this->db->query($sql);

        return $query->result();
    }

    // Avoir le durée de sommeil du dernier regimeutilisateur
    public function sommeil() {
        $sql = "SELECT dureesommeil FROM regime where id =  ".$this->idRegimeActif();
        $query = $this->db->query($sql);

        return $query->row(0)->dureesommeil;
    }

    // Ajout regimeutilisateur
    public function inserer($input, $idUser) {
        $options_echappees = array(
            "idutilisateur" => $idUser,
            "taille" => $input->post('taille'),
            "poids" => $input->post('poids'),
            "objectif" => $input->post('objectif'),
            "ossature" => $input->post('ossature'),
            "rythme" => $input->post('rythme')
        );
        $options_non_echappees = array(
            'id' => 'default',
            'idregime' => 'null',
            'debut' => 'null',
            'fin' => 'null'
        );
        
        $this->create($options_echappees, $options_non_echappees);
    }

    public function prixRegimeAliment($aliments) {
        $prix = 0;
        foreach($aliments as $aliment) {
            $prix += $aliment->prix; 
        }
        return $prix;
    }

    public function prixApproximatifRegime($idregime) {
        $aliments = $this->nutrition($idregime);
        $prix_ens = $this->prixRegimeAliment($aliments);
        $nbJours = 30;
        $frequences = $nbJours / count($aliments);

        return $prix_ens * $frequences;
    }

    public function composition($semaine) {
        $compositions = array();
        $aliments = $this->nutrition($this->idRegimeActif());
        $nbJours = 30;
        $repasjrs = 3;
        $id = 0;
        $istart =  7 * ($semaine - 1) * 3;
        $jrs = 0;
        $unt_jrs = 0;

        for($i = 0; $i < $nbJours * $repasjrs; $i++) {
            if($i >= $istart) {
                $compositions[$jrs][$unt_jrs] = $aliments[$id];
                if($unt_jrs == $repasjrs - 1) {
                    $jrs++;
                    $unt_jrs = -1;
                }
                if($jrs == 7) {
                    break;
                }
                $unt_jrs++;
            }
            if($id == count($aliments) - 1) {
                $id = -1;
            }
            $id++;
        }
        return $compositions;
    }



    /***** Regime admin  ****/

    
}
