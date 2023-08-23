<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_pegawai") ?>

<form method="post" action="<?php echo site_url('riwayat/anak_tambah') ?>">

  <?php foreach ($nip as $a): ?>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div>
           <label for="kodeprod" class="text text-danger">NIP:</label>
           <div>
             <input type="text" class="form-control" name="nip" value="<?php echo $a->nip ?>" readonly>
             </div>
             </div>
              <div>
               <label for="kodeprod" class="text text-danger">Nama Anak:</label>
               <div>
                <input type="text" class="form-control" name="nama_anak">
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
            </div>
          <div class="col-6">
            <div>
             <label for="kodeprod" class="text text-danger">Status:</label>
             <div>
               <input type="text" class="form-control" name="status">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Anak Dari:</label>
             <div>
               <input type="text" class="form-control" name="anak_dari">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Anak Ke:</label>
             <div>
               <input type="number" class="form-control" name="anak_ke">
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
        </div>
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
