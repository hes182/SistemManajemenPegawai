<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>

<form method="post" action="<?php echo site_url('edit/save_ad') ?>">

  <?php foreach ($id as $a): ?>
    <div class="row">
      <div class="col-6">
        <div>
         <label for="kodeprod" class="text text-danger">Id Suami/Istri:</label>
         <div>
           <input type="text" class="form-control" name="id" value="<?php echo $a->id_nikah ?>" readonly>
         </div>
        </div>
      <div>
       <label for="kodeprod" class="text text-danger">NIP:</label>
       <div>
         <input type="text" class="form-control" name="nip" value="<?php echo $a->nip_pas ?>" readonly>
       </div>
     </div>
       <div>
        <label for="kodeprod" class="text text-danger">Nama Suami/Istri:</label>
        <div>
          <input type="text" class="form-control" name="nama_suami_istri" value="<?php echo $a->nama_suami_istri ?>">
        </div>
      </div>
      <div>
       <label for="kodeprod" class="text text-danger">Tempat Lahir:</label>
       <div>
         <input type="text" class="form-control" name="tmpt_lhr" value="<?php echo $a->tempt_lhr_suami_istri ?>">
       </div>
     </div>
      </div>
      <div class="col-6">
        <div>
         <label for="kodeprod" class="text text-danger">Tanggal Lahir:</label>
         <div>
           <input type="date" class="form-control" name="tgl_lhr" value="<?php echo $a->tgl_lhr_suami_istri ?>">
         </div>
       </div>
       <div>
        <label for="kodeprod" class="text text-danger">Tanggal Nikah:</label>
        <div>
          <input type="date" class="form-control" name="tgl_nikah" value="<?php echo $a->tgl_nikah ?>">
        </div>
       </div>
       <div>
        <label for="kodeprod" class="text text-danger">Istri Ke:</label>
        <div>
          <input type="number" class="form-control" name="istri_ke" value="<?php echo $a->akta_nikah ?>">
        </div>
       </div>
       <div>
        <label for="kodeprod" class="text text-danger">Tunjangan:</label>
        <div>
          <select class="form-control" id="tunjangan" name="tunjangan">
            <option value="<?php echo $a->tunjangan_nikah ?>"><?php echo $a->tunjangan_nikah ?></option>
            <option value="Dapat">Dapat</option>
            <option value="Tidak">Tidak</option>
          </select>
        </div>
        </div>
      </div>
    </div>


<br/><br/>
 <div class="footer">
   <center>
     <button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
     <a href="<?php echo site_url('./riwayat/view_suami_istri/'.$a->nip_pas) ?>" class="btn btn-danger">Kembali Ke Data</a>
  </center>
 </div>
 <?php endforeach; ?>
</form><br/><br/>


<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
