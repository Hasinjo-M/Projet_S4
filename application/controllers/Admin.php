<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/SessionAdmin.php");
class Admin extends SessionAdmin {
    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('M_carte');
        $this->load->model('M_aliment');
    }

    public function index(){
        $data = array();
        $data['page'] = "board";
        $data['categorie'] = $this->M_aliment->listecategorie();
        $this->load->view('BackOffice/acceuil', $data);
    }

    /*********/
    public function pagecarte(){
        $data = array();
        $data['page'] = "carte";
        $data['liste'] =  $this->M_carte->listecodenonvalider();
        $data['categorie'] = $this->M_aliment->listecategorie();
        $this->load->view('BackOffice/acceuil', $data);
       
    }

    

}