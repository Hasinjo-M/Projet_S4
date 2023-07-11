<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regime extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->accueilclient();
    }

    public function confirmer($id) {
        $this->load->model('M_regime');

        $this->M_regime->validerRegime($id);
        $this->load->view('FrontOffice/accueil');
    }

    public function nouveau() {
        $this->load->model('M_regime');

        $this->M_regime->inserer($this->input, 1);
        $this->load->view('FrontOffice/accueil');
    }
}
