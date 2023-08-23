<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>

<form method="post" action="<?php echo site_url('edit/ak_pendidikan') ?>">

  <?php foreach ($id as $a): ?>

    <div class="container">
      <div class="row">
        <div class="col-6">
          <div>
           <label for="kodeprod" class="text text-danger">Id Pendidikan:</label>
           <div>
             <input type="text" class="form-control " name="id" value="<?php echo $a->id_pendidikan ?>" readonly>
             </div>
             </div>
          <div>
           <label for="kodeprod" class="text text-danger">NIP:</label>
           <div>
             <input type="text" class="form-control " name="nip" value="<?php echo $a->nip ?>" readonly>
             </div>
             </div>
             <div>
                 <label for="sel1" class="text text-danger">Tingkat:</label>
                 <select class="form-control" name="tingkat">
                   <option value="<?php echo $a->tingkat ?>"><?php echo $a->tingkat ?></option>
                   <option value="SD">SD</option>
                   <option value="SLTP">SLTP</option>
                   <option value="SLTA">SLTA</option>
                   <option value="D-I">D-I</option>
                   <option value="D-II">D-II</option>
                   <option value="D-III">D-III</option>
                   <option value="SARMUD">SARMUD</option>
                   <option value="D-IV">D-IV</option>
                   <option value="S1">S1</option>
                   <option value="S2">S2</option>
                   <option value="S3">S3</option>
                 </select>
             </div>
              <div>
               <label for="kodeprod" class="text text-danger">Nama Sekolah/PT:</label>
               <div>
                 <input type="text" class="form-control" name="nama_sek" value="<?php echo $a->sekolah_pt ?>">
               </div>
             </div>
             <div>
              <label for="kodeprod" class="text text-danger">Lokasi Sekolah:</label>
              <div>
                <input type="text" class="form-control" name="lok_sek" value="<?php echo $a->alamat_sek ?>">
              </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Jurusan:</label>
             <div>
               <input type="text" class="form-control" name="jurusan" value="<?php echo $a->jurusan ?>">
             </div>
            </div>
            </div>
          <div class="col-6">
            <div>
             <label for="kodeprod" class="text text-danger">Tanggal Ijasah:</label>
             <div>
               <input type="date" class="form-control" name="tgl_ijasah" value="<?php echo $a->tgl_ijasah ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">No.Ijasah:</label>
             <div>
               <input type="text" class="form-control" name="no_ijasah" value="<?php echo $a->no_ijasah ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Kepsek/Dir/Ketua/Rektor:</label>
             <div>
               <input type="text" class="form-control" name="kepsek" value="<?php echo $a->kepsek ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Gelar Depan:</label>
             <div>
               <input type="text" class="form-control" name="gel_depan" value="<?php echo $a->gel_depan ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Gelar Belakang:</label>
             <div>
               <input type="text" class="form-control" name="gel_belakang" value="<?php echo $a->gel_belakang ?>">
             </div>
            </div>
            <div>
             <label for="kodeprod" class="text text-danger">Pendidikan Pertma:</label>
             <div>
             <select class="form-control" id="tunjangan" name="pertama">
               <option value="<?php echo $a->pertama ?>"><?php echo $a->pertama ?></option>
               <option value="Ya">Ya</option>
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
     <a href="<?php echo site_url('./riwayat/view_pendidikan/'.$a->nip) ?>" class="btn btn-danger">Kembali Ke Data</a>
  </center>
 </div>
 <?php endforeach; ?>
</form><br/><br/>


<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
