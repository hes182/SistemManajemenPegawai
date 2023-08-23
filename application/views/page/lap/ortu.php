<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=dtaOrtu.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<center><h3>Data OrangTua</h3></center><br/>
<table class="table table-bordered">
  <thead>
    <tr align="center">
      <th>NIP Pegawai</th>
      <th>Orangtua</th>
      <th>Nama Orangtua</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($nip as $s):?>
  <tbody>
  <tr align="center">
    <td><?php echo $s->nip_ortu ?></td>
    <td><?php echo $s->ortu ?></td>
    <td><?php echo $s->nama_ortu ?></td>
    <td><?php echo $s->tmpt_lhr ?></td>
    <td><?php echo $s->tgl_lhr ?></td>
  </tr>
  </tbody>
  <?php endforeach; ?>
</table>
