
<?php echo form_open('input/edit');?>
<?php foreach($datakosong->data as $data):
var_dump($data);
echo form_hidden('kode_barang',$data->kode_barang);?>
<table>
    <tr><td>ID</td><td><?php echo form_input('id_supplier',$data->kode_barang,"disabled");?></td></tr>
    <tr><td>ID Supplier</td><td><?php echo form_input('nama',$data->nama_barang);?></td></tr>
    <tr><td>Kode Barang</td><td><?php echo form_input('nama',$data->nama_barang);?></td></tr>
    <tr><td>Kode Barang</td><td><?php echo form_input('nama',$data->stock_akhir);?></td></tr>
    <!-- <tr><td>Tanggal Transaksi</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Nama Barang</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Jumlah Barang</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Satuan Barang</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Harga Satuan Barang</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Total Harga Barang</td><td><?php echo form_input('nama',$data[0]->nama);?></td></tr>
    <tr><td>Keterangan Barang</td><td><?php echo form_input('no_hp',$data[0]->no_hp);?></td></tr>
    <tr><td>Status Pembayaran</td><td><?php echo form_input('alamat',$data[0]->alamat);?></td></tr> -->
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php endforeach; ?>


<?php
echo form_close();


?>