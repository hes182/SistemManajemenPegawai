<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>


    <!-- DataTables Example -->
  <div class="card mb-3">
    <li class="list-group-item active" align="center">Data Suami Istri</li><br/>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr align="center">
                  <th>Nama Suami/Istri</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Tanggal Nikah</th>
                  <th>Istri Ke</th>
                  <th>Tunjangan</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <?php foreach ($nip as $s):?>
              <tbody>
              <tr align="center">
                <td><?php echo $s->nama_suami_istri ?></td>
                <td><?php echo $s->tempt_lhr_suami_istri ?></td>
                <td><?php echo $s->tgl_lhr_suami_istri ?></td>
                <td><?php echo $s->tgl_nikah ?></td>
                <td><?php echo $s->akta_nikah ?></td>
                <td><?php echo $s->tunjangan_nikah ?></td>
                <td><a href="<?php echo site_url('edit/up_suami_istri/'.$s->id_nikah) ?>"><i class="far fa-edit fa-2x"></i></a></td>
                <td><a href="<?php echo site_url('/edit/hapus_pas/'.$s->id_nikah) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"> <i class="fa fa-trash fa-2x"></i> </a></td>
              </tr>
              </tbody>
      
              <?php endforeach; ?>
            </table>
          </div>
        </div><br/>
      <br/>

      <?php $this->load->view("template/footer") ?>
      <?php $this->load->view("template/und") ?>
