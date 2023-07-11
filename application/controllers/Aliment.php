<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aliment extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('M_aliment');
    }

    public function index(){
        $data = array();
        $data['liste_aliment'] = $this->M_aliment->listealiment();
        $data['page'] = "alimentliste";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $this->load->view('BackOffice/acceuil', $data);
    }

    public function insert(){
        $idcategorie = trim($this->input->post('idcategorie'));
        $libelle = trim($this->input->post('libelle'));
        $prix = trim($this->input->post('prix'));
        $this->M_aliment->insert($idcategorie, $libelle, $prix);
        $this->index();
    }

    public function modifier(){
        $idaliment = trim($this->input->get('idaliment'));    
        $data = array();
        $data['page'] = "modifaliment";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $data['aliment'] = $this->M_aliment->getaliment($idaliment);
        $this->load->view('BackOffice/acceuil', $data);
    }

    public function validationmodifier(){
        $idaliment = trim($this->input->post('idaliment'));  
        $nom = trim($this->input->post('nom'));
        $prix = trim($this->input->post('prix')); 
        $idcategorie =  trim($this->input->post('idcategorie'));  
        $this->M_aliment->updatealiment($idcategorie, $nom, $prix, $idaliment);
        $this->index(); 
    }
}