<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_pegawai") ?>

<form method="post" action="<?php echo site_url('riwayat/tambah_suami_istri') ?>">

  <?php foreach ($nip as $a): ?>

  <div>
   <label for="kodeprod" class="text text-danger">NIP:</label>
   <div>
     <input type="text" class="form-control" name="nip" value="<?php echo $a->nip ?>" readonly>
   </div>
 </div>

   <div>
    <label for="kodeprod" class="text text-danger">Nama Suami/Istri:</label>
    <div>
      <input type="text" class="form-control" name="nama_suami_istri">
    </div>
  </div>
  <div>
   <label for="kodeprod" class="text text-danger">Tempat Lahir:</label>
   <div>
     <input type="text" class="form-control" name="tmpt_lhr">
   </div>
 </div>
 <div>
  <label for="kodeprod" class="text text-danger">Tanggal Lahir:</label>
  <div>
    <input type="date" class="form-control" name="tgl_lhr">
  </div>
</div>
<div>
 <label for="kodeprod" class="text text-danger">Tanggal Nikah:</label>
 <div>
   <input type="date" class="form-control" name="tgl_nikah">
 </div>
</div>
<div>
 <label for="kodeprod" class="text text-danger">Istri Ke:</label>
 <div>
   <input type="number" class="form-control" name="istri_ke">
 </div>
</div>
<div>
 <label for="kodeprod" class="text text-danger">Tunjangan:</label>
 <div>
   <select class="form-control" id="tunjangan" name="tunjangan">
     <option> --</option>
     <option>Dapat</option>
     <option>Tidak</option>
   </select>
 </div>
 </div>
<br/><br/>
 <div class="footer">
   <center>
     <button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
  </center>
 </div>
 <?php endforeach; ?>
</form><br/><br/>


<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
