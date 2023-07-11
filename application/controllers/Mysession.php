<?php ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mysession extends CI_Controller {

	public function __construct(){
        parent::__construct();
        if ($this->session->has_userdata('utilisateur') == false){
            $this->load->view('FrontOffice/acceuil');
            
        }
        
            
    }
}
