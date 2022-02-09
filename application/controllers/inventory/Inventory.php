<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Inventory extends CI_Controller{
    
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
    function index(){
        $data['datakosong'] = json_decode($this->curl->simple_get($this->API.'/barangkosong'));
        $this->load->view('inventory/list',$data);
    }
    function tambah(){
        $params = array('kode_barang'=>  $this->uri->segment(4));
        $data['datakosong'] = json_decode($this->curl->simple_get($this->API.'/barangkosong',$params));
        $this->load->view('inventory/purchase', $data);
    }
    
}
?>