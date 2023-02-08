<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GestionProposition extends CI_Controller {
    public function getprop($id){
        $arr=array();
		$this->load->model('exchange');
        $this->exchange->insert_proposition($id,14);
    }
}
?>