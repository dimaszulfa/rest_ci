<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Request extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

 
    //Menampilkan data supplier
    function index_get() {
        $id = $this->get('id_order');
        if ($id == '') {
            $dataSupplier = $this->db->get('tbl_order')->result();
        } else {
            $this->db->where('id_order', $id);
            $dataSupplier = $this->db->get('tbl_order')->result();
        }
        $this->response($dataSupplier, 200);
    }
    

    
     //Mengirim atau menambah data kontak baru
     function index_post() {
        
        $data = array(
                    'kode_barang'          => $this->post('kode_barang'),
                    'nama_barang'          => $this->post('nama_barang'),
                    'stok'          => $this->post('stok'),
                    'keterangan'    => $this->post('keterangan'));
        $insert = $this->db->insert('tbl_order', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    

     //Memperbarui data kontak yang telah ada
     function index_put() {
        $id = $this->put('id_order');
        $data = array(
            'id_order'    => $this->put('id_order'),
            'kode_barang'          => $this->post('kode_barang'),
            'nama_barang'          => $this->post('nama_barang'),
            'stok'          => $this->post('stok'),
            'keterangan'    => $this->post('keterangan'));
        $this->db->where('id_order', $id);
        $update = $this->db->update('tbl_order', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id_order');
        $this->db->where('id_order', $id);
        $delete = $this->db->delete('tbl_order');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>