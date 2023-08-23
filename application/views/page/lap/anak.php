<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=dtaAnak.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<center><h3>Data Anak</h3></center><br/>
<table class="table table-bordered">
  <thead>
    <tr align="center">
      <th>NIP Pegawai</th>
      <th>Nama Anak</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Status</th>
      <th>Anak Dari</th>
      <th>Anak Ke</th>
      <th>Tunjangan</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <?php foreach ($nip as $s): ?>

  <tbody>
    <tr align="center">
      <td><?php echo $s->nip_anak ?></td>
      <td><?php echo $s->nama_anak ?></td>
      <td><?php echo $s->tmpt_lhr_anak ?></td>
      <td><?php echo $s->tgl_lhr_anak ?></td>
      <td><?php echo $s->status_anak ?></td>
      <td><?php echo $s->anak_dari ?></td>
      <td><?php echo $s->anak_ke ?></td>
      <td><?php echo $s->tunjangan ?></td>
      <td><a href="<?php echo site_url('edit/up_anak/'.$s->id_anak) ?>"><i class="far fa-edit fa-2x"></i></a></td>
      <td><a href="<?php echo site_url('/edit/hapus_an/'.$s->id_anak) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"> <i class="fa fa-trash fa-2x"></i> </a></td>
    </tr>
  </tbody>
    <?php endforeach; ?>
</table>
