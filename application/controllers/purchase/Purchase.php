<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Purchase extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="https://tugassoa.herokuapp.com/api/v1";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data kontak
    function tambah(){
        $this->load->view('inventory/purchase');
    }
    
}
?>