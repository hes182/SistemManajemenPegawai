<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>

<form method="post" action="<?php echo site_url('edit/save_up') ?>">

  <?php foreach ($id as $a): ?>

    <div>
     <label for="kodeprod" class="text text-danger">Id Ortu:</label>
     <div>
       <input type="text" class="form-control" name="id" value="<?php echo $a->id_ortu ?>" readonly>
     </div>
   </div>
  <div>
   <label for="kodeprod" class="text text-danger">NIP:</label>
   <div>
     <input type="text" class="form-control" name="nip" value="<?php echo $a->nip_ortu ?>" readonly>
   </div>
 </div>
  <div>
   <label for="kodeprod" class="text text-danger">Orang Tua:</label>
   <div>
     <select class="form-control" id="ortu" name="ortu">
       <option value="<?php echo $a->ortu ?>"><?php echo $a->ortu ?></option>
       <option value="Ayah">Ayah</option>
       <option value="Ibu">Ibu</option>
     </select>
   </div>
   </div>
   <div>
    <label for="kodeprod" class="text text-danger">Nama Ortu:</label>
    <div>
      <input type="text" class="form-control" name="nama_ortu" value="<?php echo $a->nama_ortu ?>">
    </div>
  </div>
  <div>
   <label for="kodeprod" class="text text-danger">Tempat Lahir:</label>
   <div>
     <input type="text" class="form-control" name="tmpt_lhr" value="<?php echo $a->tmpt_lhr ?>">
   </div>
 </div>
 <div>
  <label for="kodeprod" class="text text-danger">Tanggal Lahir:</label>
  <div>
    <input type="date" class="form-control" name="tgl_lhr" value="<?php echo $a->tgl_lhr ?>">
  </div>
</div><br/><br/>
 <div class="footer">
   <center>
     <button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
     <a href="<?php echo site_url('./riwayat/view/'.$a->nip_ortu) ?>" class="btn btn-danger">Kembali Ke Data</a>
  </center>
 </div>
 <?php endforeach; ?>
</form><br/><br/>


<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
