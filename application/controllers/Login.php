<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."controllers/Mysession.php");
class Login extends Mysession{

    public function checklogin(){

    }

    public function connect(){
        //$this->session->user;
        echo "huhu";
    }
}
