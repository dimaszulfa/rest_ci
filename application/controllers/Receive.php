<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Receive extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }

 
    //Menampilkan data supplier
    function index_get() {
        $status = $this->get('status_pembayaran');
        $date = $this->get('tgl_transaksi');
        // $tgl_transaksi = date('Y-m-d', strtotime($date));

        // && $tgl_transaksi == ''

        if ($status== '' ) {
            $receiveSupply = $this->db->get('tbl_receive_supply')->result();
        } 
        // else if($tgl_transaksi != null){
        //     $this->db->where('tgl_transaksi', $tgl_transaksi);
        //     $receiveSupply = $this->db->select_sum('total_harga_barang')->get('tbl_receive_supply')->result();
        //     var_dump($tgl_transaksi);
        // }
        else {
            $this->db->where('status_pembayaran', $status);
            $receiveSupply = $this->db->get('tbl_receive_supply')->result();
        } 
        $this->response($receiveSupply, 200);
    }

     //Mengirim atau menambah data kontak baru
     function index_post() {
        
        $data = array(
                    'id_supplier'          => $this->post('id_supplier'),
                    'kode_barang'          => $this->post('kode_barang'),
                    'nama_barang'          => $this->post('nama_barang'),
                    'jumlah_barang'          => $this->post('jumlah_barang'),
                    'satuan_barang'          => $this->post('satuan_barang'),
                    'harga_satuan_barang'          => $this->post('harga_satuan_barang'),
                    'total_harga_barang'          => $this->post('total_harga_barang'),
                    'ket_barang'          => $this->post('ket_barang'),
                    'status_pembayaran'    => $this->post('status_pembayaran'));
        $insert = $this->db->insert('tbl_receive_supply', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    

     //Memperbarui data kontak yang telah ada
     function index_put() {
        $id = $this->put('id_receive');
        $data = array(
            'id_supplier'          => $this->put('id_supplier'),
            'kode_barang'          => $this->put('kode_barang'),
            'nama_barang'          => $this->put('nama_barang'),
            'jumlah_barang'          => $this->put('jumlah_barang'),
            'satuan_barang'          => $this->put('satuan_barang'),
            'harga_satuan_barang'          => $this->put('harga_satuan_barang'),
            'total_harga_barang'          => $this->put('total_harga_barang'),
            'ket_barang'          => $this->put('ket_barang'),
            'status_pembayaran'    => $this->put('status_pembayaran'));
        $this->db->where('id_receive', $id);
        $update = $this->db->update('tbl_receive_supply', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $id = $this->delete('id_receive');
        $this->db->where('id_receive', $id);
        $delete = $this->db->delete('tbl_receive_supply');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
}
?>