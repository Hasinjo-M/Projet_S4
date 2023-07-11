<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/SessionAdmin.php");
class Carte extends SessionAdmin {
    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('M_carte');
    }


    public function insertcarte(){
        $code = trim($this->input->post('code'));
        $valeur = trim($this->input->post('valeur'));
        $this->M_carte->insert($code, $valeur, 0);
        $data = array();
        redirect(site_url('Admin/pagecarte'));
    }

    public function insertioncodeutilisateur(){
        $code = trim($this->input->post('code'));
        $id = trim($this->input->post('idutilisateur'));
        $rep =  $this->M_carte->validationcodeutilisateur($code, $id);
        if($rep != 1){
            echo $rep;
        }
    }

    /**** Validateur par admin */
    public function validationcodeadmin(){
        $code = trim($this->input->get('code'));
        $id = trim($this->input->get('idutilisateur'));
        $this->M_carte->validationparadmin($code,$id);
        redirect(site_url('Admin/pagecarte'));
    }

}