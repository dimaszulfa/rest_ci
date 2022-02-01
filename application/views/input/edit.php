<?php echo form_open('input/edit');?>
<?php echo form_hidden('id_supplier',$datasupplier[0]->id_supplier);?>
<?php var_dump($datasupplier);?>
<table>
    <tr><td>ID</td><td><?php echo form_input('id_supplier',$datasupplier[0]->id_supplier,"disabled");?></td></tr>
    <tr><td>NAMA</td><td><?php echo form_input('nama',$datasupplier[0]->nama);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('no_hp',$datasupplier[0]->no_hp);?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('alamat',$datasupplier[0]->alamat);?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>