<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Mysession.php");
class Acceuil extends Mysession {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->accueilclient();
    }

    public function accueilclient($suggestion = array()) {
        $this->load->model('M_regime');

        $data['suggestions'] = $suggestion;
        $this->load->view('FrontOffice/menu', $data);
    }

    public function listAliment($semaine = 1) {
        $this->load->model('M_regime');

        if(!$this->M_regime->estConfirme()) {
            $this->accueilclient($this->M_regime->suggestion());
        } else {
            //var_dump($data['aliments'] = $this->M_regime->composition(1));
            $data['semaine'] = $semaine;
            $data['compositions'] = $this->M_regime->composition($semaine);
            $this->load->view('FrontOffice/nutrition', $data);
        }
    }

    public function listActivite() {
        $this->load->model('M_regime');

        if(!$this->M_regime->estConfirme()) {
            $this->accueilclient($this->M_regime->suggestion());
        } else {
            $data['activites'] = $this->M_regime->activite();
            $this->load->view('FrontOffice/activite', $data);
        }
    }

    public function sommeil() {
        $this->load->model('M_regime');

        if(!$this->M_regime->estConfirme()) {
            $this->accueilclient($this->M_regime->suggestion());
        } else {
            $data['sommeil'] = $this->M_regime->sommeil();
            $this->load->view('FrontOffice/sommeil', $data);
        }
    }

    public function detailCompte() {
        $this->load->model('M_utilisateur');
        $this->load->model('M_regime');

        if(!$this->M_regime->estConfirme()) {
            $this->accueilclient($this->M_regime->suggestion());
        } else {
            //var_dump($this->M_utilisateur->solde(1));
            $data['solde'] = $this->M_utilisateur->solde(1);
            $this->load->view('FrontOffice/monaie', $data);
        }
    }

    public function ajoutRegime() {
        $this->load->view('FrontOffice/ajoutRegime');
    }
}
