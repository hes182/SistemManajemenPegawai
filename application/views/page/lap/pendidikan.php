<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=dtaPendidikan.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<center><h3>Data Pendidikan</h3></center><br/>
<table class="table table-bordered">
  <thead>
    <tr align="center">
      <th>NIP Pegawai</th>
      <th>Tingkat</th>
      <th>Sekolah/PT</th>
      <th>Lokasi Sekolah</th>
      <th>Jurusan</th>
      <th>Tanggal Ijasah</th>
      <th>No Ijasah</th>
      <th>Kepsek/Dir/Ketua/Rektor</th>
      <th>Gelar Depan</th>
      <th>Gelar Belakang</th>
      <th>Sekolah Pertama</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($nip as $s): ?>

  <tbody>
    <tr align="center">
      <td><?php echo $s->nip ?></td>
      <td><?php echo $s->tingkat ?></td>
      <td><?php echo $s->sekolah_pt ?></td>
      <td><?php echo $s->alamat_sek ?></td>
      <td><?php echo $s->jurusan ?></td>
      <td><?php echo $s->tgl_ijasah ?></td>
      <td><?php echo $s->no_ijasah ?></td>
      <td><?php echo $s->kepsek ?></td>
      <td><?php echo $s->gel_depan ?></td>
      <td><?php echo $s->gel_belakang ?></td>
      <td><?php echo $s->pertama ?></td>
    </tr>
  </tbody>

    <?php endforeach; ?>
</table>
