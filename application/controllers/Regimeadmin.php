<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/SessionAdmin.php");
class Regimeadmin extends SessionAdmin {
    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('M_regimeadmin');
        $this->load->model('M_aliment');
        $this->load->model('M_activite');
    }

    public function index(){
        $data = array();
        $data['page'] = "listeregime";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $data['aliment'] = $this->M_aliment->getaliment($idaliment);
        $this->load->view('BackOffice/acceuil', $data);
    }

    public function viewinsertion(){
        $data = array();
        $data['page'] = "insertionregime";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $data['activite'] = $this->M_activite->listeactivite();
        $data['aliment'] = $this->M_aliment->listealiment();
        $this->load->view('BackOffice/acceuil', $data);
    }




}