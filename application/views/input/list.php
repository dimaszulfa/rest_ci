<font color="orange">
<?php echo $this->session->flashdata('hasil'); ?>
</font>
<table border="1">
    <tr><th>ID</th><th>NAMA</th><th>NOMOR</th><th></th></tr>
    <?php
    foreach ($datakontak as $kontak){
        echo "<tr>
              <td>$kontak->id_supplier</td>
              <td>$kontak->nama</td>
              <td>$kontak->no_hp</td>
              <td>$kontak->alamat</td>
              <td>".anchor('input/edit/'.$kontak->id_supplier,'Edit')."
                  ".anchor('input/delete/'.$kontak->id_supplier,'Delete')."</td>
              </tr>";
    }
    ?>
</table>
<a href="http://localhost/rest_ci/input/create">+ Tambah data<a>