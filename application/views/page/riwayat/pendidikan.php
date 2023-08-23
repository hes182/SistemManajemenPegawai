<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_pegawai") ?>

<form method="post" action="<?php echo site_url('riwayat/pendidikan_add') ?>">

  <?php foreach ($nip as $a): ?>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div>
           <label for="kodeprod" class="text text-danger">NIP:</label>
           <div>
             <input type="text" class="form-control " name="nip" value="<?php echo $a->nip ?>" readonly>
             </div>
             </div>
             <div>
                 <label for="sel1" class="text text-danger">Tingkat:</label>
                 <select class="form-control" name="tingkat">
                   <option> --</option>
                   <option>SD</option>
                   <option>SLTP</option>
                   <option>SLTA</option>
                   <option>D-I</option>
                   <option>D-II</option>
                   <option>D-III</option>
                   <option>SARMUD</option>
                   <option>D-IV</option>
                   <option>S1</option>
                   <option>S2</option>
                   <option>S3</option>
                 </select>
             </div>
              <div>
               <label for="kodeprod" class="text text-danger">Nama Sekolah/PT:</label>
               <div>
                 <input type="text" class="form-control" name="nama_sek">
               </div>
             </div>
             <div>
              <label for="kodeprod" class="text text-danger">Lokasi Sekolah:</label>
              <div>
                <input type="text" class="form-control" name="lok_sek">
              </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Jurusan:</label>
             <div>
               <input type="text" class="form-control" name="jurusan">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Tanggal Ijasah:</label>
             <div>
               <input type="date" class="form-control" name="tgl_ijasah">
             </div>
            </div>
            </div>
          <div class="col-6">
            <div>
             <label for="kodeprod" class="text text-danger">No.Ijasah:</label>
             <div>
               <input type="text" class="form-control" name="no_ijasah">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Kepsek/Dir/Ketua/Rektor:</label>
             <div>
               <input type="text" class="form-control" name="kepsek">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Gelar Depan:</label>
             <div>
               <input type="text" class="form-control" name="gel_depan">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Gelar Belakang:</label>
             <div>
               <input type="text" class="form-control" name="gel_belakang">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Pendidikan Pertma:</label>
             <div>
             <select class="form-control" id="tunjangan" name="pertama">
               <option> --</option>
               <option>Ya</option>
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
