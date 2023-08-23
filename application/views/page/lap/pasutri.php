<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=dtaSuami_Istri.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>

<center><h3>Data Suami Istri</h3></center><br/>
<table class="table table-bordered">
  <thead>
    <tr align="center">
      <th>NIP Pegawai</th>
      <th>Nama Suami/Istri</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Tanggal Nikah</th>
      <th>Istri Ke</th>
      <th>Tunjangan</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($nip as $s):?>
  <tbody>
  <tr align="center">
    <td><?php echo $s->nip_pas ?></td>
    <td><?php echo $s->nama_suami_istri ?></td>
    <td><?php echo $s->tempt_lhr_suami_istri ?></td>
    <td><?php echo $s->tgl_lhr_suami_istri ?></td>
    <td><?php echo $s->tgl_nikah ?></td>
    <td><?php echo $s->akta_nikah ?></td>
    <td><?php echo $s->tunjangan_nikah ?></td>
  </tr>
  </tbody>
  <?php endforeach; ?>
</table>
