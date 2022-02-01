<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class Input extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/rest_ci/";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    
    // menampilkan data kontak
    function index(){
        $data['datakontak'] = json_decode($this->curl->simple_get($this->API.'/Supplier'));
        $this->load->view('input/list',$data);
    }
    
    // insert data kontak
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
                'nama'      =>  $this->input->post('nama'),
                'no_hp'=>  $this->input->post('no_hp'),
                'alamat'=>  $this->input->post('alamat'));
            $insert =  $this->curl->simple_post($this->API.'/supplier', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('input');
        }else{
            $this->load->view('input/create');
        }
    }
    
    // edit data kontak
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'id_supplier'       =>  $this->input->post('id_supplier'),
                'nama'      =>  $this->input->post('nama'),
                'no_hp'=>  $this->input->post('no_hp'),
                'alamat'      =>  $this->input->post('alamat'));

            $update =  $this->curl->simple_put($this->API.'/supplier', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('input');
        }else{
            $params = array('id_supplier'=>  $this->uri->segment(3));
            $data['datasupplier'] = json_decode($this->curl->simple_get($this->API.'/supplier',$params));
            $this->load->view('input/edit',$data);
        }
    }
    
    // delete data kontak
    function delete($id){
        if(empty($id)){
            redirect('input');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/supplier', array('id_supplier'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('input');
        }
    }
}
?>