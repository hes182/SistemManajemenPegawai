<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>


    <!-- DataTables Example -->
  <div class="card mb-3">
    <li class="list-group-item active" align="center">Data Pendidikan</li><br/>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr align="center">
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
                  <td><a href="<?php echo site_url('edit/up_pend/'.$s->id_pendidikan) ?>"><i class="far fa-edit fa-2x"></i></a></td>
                  <td><a href="<?php echo site_url('/edit/hapus_pen/'.$s->id_pendidikan) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"> <i class="fa fa-trash fa-2x"></i> </a></td>
                </tr>
              </tbody>

                <?php endforeach; ?>
            </table>
          </div>
        </div><br/>
      <br/>

      <?php $this->load->view("template/footer") ?>
      <?php $this->load->view("template/und") ?>
