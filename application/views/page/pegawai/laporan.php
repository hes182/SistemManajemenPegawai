<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=datapegawai.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
  <center>
  <h3>Data Pegawai DP3AP2KB</h3>
  <center/>
<table>
  <thead>
    <tr>
      <th>Foto</th>
      <th>NIP</th>
      <th>Nama</th>
      <th>Tempat/Tanggal Lahir</th>
      <th>Gol/Ruang</th>
      <th>Pendidikan Terakhir</th>
      <th>Jenis/Nama Jabatan</th>
      <th>Eselon</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($all as $row): ?>
    <tr align="center">
      <td><img src="<?php echo base_url('upload/'.$row->image) ?>" class="rounded-circle" alt="" width="30" height="30"></td>
      <td><?php echo $row->nip ?></td>
      <td><?php echo $row->gelar_depan ?>&nbsp;<?php echo $row->nama_pegawai ?>&nbsp;<?php echo $row->gelar_belakang ?></td>
      <td><?php echo $row->tempat_lahir ?> /<?php echo $row->tanggal_lahir ?></td>
      <td><?php echo $row->gol_ruang_terakhir ?></td>
      <td><?php echo $row->pendidikan ?></td>
      <td><?php echo $row->jenis_jab ?>/<?php echo $row->nama_jab ?></td>
      <td><?php echo $row->eselon ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>

</table>
