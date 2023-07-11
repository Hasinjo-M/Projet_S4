<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/SessionAdmin.php");
class Activite extends SessionAdmin {

    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('M_activite');
        $this->load->model('M_aliment');
    }


    public function insertactivite(){
        $nom =  trim($this->input->post('libelle'));
        $photo = "jkfhsjfhjs"; 
        $this->M_activite->insert($nom, $photo);
        redirect(site_url('Admin/index'));
    }

    public function index(){
        $data = array();
        $data['liste_activite'] = $this->M_activite->listeactivite();
        $data['page'] = "activiteliste";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $this->load->view('BackOffice/acceuil', $data);  
    }

    public function modifier(){
        $id = trim($this->input->get('idactivite'));
        $data['page'] = "modifactivite";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $data['activite'] = $this->M_activite->activite($id);
        $this->load->view('BackOffice/acceuil', $data);   
    }
    public function saveupdate(){
        $id = trim($this->input->post('idactivite'));
        $nom = trim($this->input->post('nom'));
        echo $id ."  ".$nom;
        $this->M_activite->update($id, $nom);
        $this->index();
    }

}