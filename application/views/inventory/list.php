<font color="orange">
<?php echo $this->session->flashdata('hasil');
var_dump($datakosong);


  ?>
</font>
<table border="1">
    <tr><th>Kode Barang</th><th>Nama Barang</th><th>Stok</th><th>Aksi</th></tr>
    <?php
         

    foreach ($datakosong->data as $data){
            echo "<tr>
            <td>$data->kode_barang</td>
            <td>$data->nama_barang</td>
            <td>$data->stock_akhir</td>
            <td>".anchor('inventory/inventory/tambah/'.$data->kode_barang,'Tambah Stok')."</td></tr>";
        

    }
    ?>
</table>
