<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Supplier extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

 
    //Menampilkan data supplier
    function index_get() {
        $id = $this->get('id_supplier');
        if ($id == '') {
            $dataSupplier = $this->db->get('tbl_supplier')->result();
        } else {
            $this->db->where('id_supplier', $id);
            $dataSupplier = $this->db->get('tbl_supplier')->result();
        }
        $this->response($dataSupplier, 200);
    }

     //Mengirim atau menambah data kontak baru
     function index_post() {
        
        $data = array(
                    'nama'          => $this->post('nama'),
                    'no_hp'          => $this->post('no_hp'),
                    'alamat'    => $this->post('alamat'));
        $insert = $this->db->insert('tbl_supplier', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    

     //Memperbarui data kontak yang telah ada
     function index_put() {
        $id = $this->put('id_supplier');
        $data = array(
            'id_supplier'    => $this->put('id_supplier'),
            'nama'          => $this->put('nama'),
            'no_hp'          => $this->put('no_hp'),
            'alamat'    => $this->put('alamat'));
        $this->db->where('id_supplier', $id);
        $update = $this->db->update('tbl_supplier', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id_supplier');
        $this->db->where('id_supplier', $id);
        $delete = $this->db->delete('tbl_supplier');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>