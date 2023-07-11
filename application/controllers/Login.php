<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->helper('url');
        $this->load->model('M_login');
    }

    public function checklogin($email = "", $motsdepasse = ""){
        
        if($this->input->post('email')!=null && $this->input->post('motsdepasse')!= null){
            $email = trim($this->input->post('email'));
            $motsdepasse  = trim($this->input->post('motsdepasse'));    
        }

        echo $email."   ".$motsdepasse;
        $resulat = $this->M_login->check_login($email, $motsdepasse);
        if($resulat == null){
            $error['error'] = "Il y a une erreur ou ce compte n'est pas";
            echo $error['error']; 
        }
        if($resulat['estadmin'] == "0"){
            $utilisateur = array(
                'id' => $resulat['id']
            );
            $this->session->set_userdata('utilisateur',$utilisateur);
            $this->load->view('FrontOffice/acceuil');
        }

        $verifier = false;
        if($resulat['estadmin'] == "1"){
            $utilisateur = array(
                'id' => $resulat['id']
            );
            $verifier = true;
            $this->session->set_userdata('admin',$utilisateur);
            $this->load->view('BackOffice/acceuil');
        }
        if($this->input->post('admin') != null && $verifier == false){
            $this->load->view('BackOffice/login', $error);
        }
    }

    public function insertion(){
        $idgenre = trim($this->input->post('idgenre'));
        $nom = trim($this->input->post('nom'));
        $prenom = trim($this->input->post('prenom'));
        $datenaissance = trim($this->input->post('date'));
        $email = trim($this->input->post('email'));
        $mdp = trim($this->input->post('mdp'));
        $mdp1 = trim($this->input->post('mdp2'));
        if($nom!="" && $prenom != "" && $datenaissance != "" && $email != "" && $mdp != "" && $mdp1 != ""){
            if(strcmp($mdp, $mdp1) != 0){
                $erreur['erreur'] = "Les deux mots de passe doit etre identique";
                echo $erreur['erreur'];
                //$this->load->view('Inscription',$erreur);
            }else{
                $this->M_login->insertion($idgenre, $nom, $prenom, $datenaissance, 0, $email, $mdp);
                $this->checklogin($email, $mdp);
            }
        }else{
            $erreur['error'] = "Veuillez remplir tout les champs";
            echo  $erreur['error'];
            // $this->load->view('Inscription',$erreur);
        }




    }

    

}