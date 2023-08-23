<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>

<form method="post" action="<?php echo site_url('edit/save_id') ?>">

  <?php foreach ($id as $a): ?>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div>
           <label for="kodeprod" class="text text-danger">Id Anak:</label>
           <div>
             <input type="text" class="form-control" name="id" value="<?php echo $a->id_anak ?>" readonly>
             </div>
             </div>
          <div>
           <label for="kodeprod" class="text text-danger">NIP:</label>
           <div>
             <input type="text" class="form-control" name="nip" value="<?php echo $a->nip_anak ?>" readonly>
             </div>
             </div>
              <div>
               <label for="kodeprod" class="text text-danger">Nama Anak:</label>
               <div>
                <input type="text" class="form-control" name="nama_anak" value="<?php echo $a->nama_anak ?>">
               </div>
               </div>
              <div>
               <label for="kodeprod" class="text text-danger">Tempat Lahir:</label>
               <div>
                 <input type="text" class="form-control" name="tmpt_lhr" value="<?php echo $a->tmpt_lhr_anak ?>">
               </div>
             </div>
             <div>
              <label for="kodeprod" class="text text-danger">Tanggal Lahir:</label>
              <div>
                <input type="date" class="form-control" name="tgl_lhr" value="<?php echo $a->tgl_lhr_anak ?>">
              </div>
            </div>
            </div>
          <div class="col-6">
            <div>
             <label for="kodeprod" class="text text-danger">Status:</label>
             <div>
               <input type="text" class="form-control" name="status" value="<?php echo $a->status_anak ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Anak Dari:</label>
             <div>
               <input type="text" class="form-control" name="anak_dari" value="<?php echo $a->anak_dari ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Anak Ke:</label>
             <div>
               <input type="number" class="form-control" name="anak_ke" value="<?php echo $a->anak_ke ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Tunjangan:</label>
             <div>
             <select class="form-control" id="tunjangan" name="tunjangan">
               <option value="<?php echo $a->tunjangan ?>"><?php echo $a->tunjangan ?></option>
               <option value="Dapat">Dapat</option>
               <option value="Tidak">Tidak</option>
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
     <a href="<?php echo site_url('./riwayat/view_anak/'.$a->nip_anak) ?>" class="btn btn-danger">Kembali Ke Data</a>
  </center>
 </div>
 <?php endforeach; ?>
</form><br/><br/>


<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
