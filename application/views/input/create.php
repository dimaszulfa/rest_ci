<?php echo form_open_multipart('input/create');?>
<table>
    <tr><td>NAMA</td><td><?php echo form_input('nama');?></td></tr>
    <tr><td>NOMOR</td><td><?php echo form_input('no_hp');?></td></tr>        
    <tr><td>NOMOR</td><td><?php echo form_input('alamat');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('input','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>