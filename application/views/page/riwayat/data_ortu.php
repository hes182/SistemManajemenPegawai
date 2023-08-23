<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_riwayat") ?>


    <!-- DataTables Example -->
  <div class="card mb-3">
    <li class="list-group-item active" align="center">Data Orangtua</li><br/>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr align="center">
                  <th>Orangtua</th>
                  <th>Nama Orangtua</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <?php foreach ($nip as $s):?>
              <tbody>
              <tr align="center">
                <td><?php echo $s->ortu ?></td>
                <td><?php echo $s->nama_ortu ?></td>
                <td><?php echo $s->tmpt_lhr ?></td>
                <td><?php echo $s->tgl_lhr ?></td>
                <td><a href="<?php echo site_url('edit/up_ortu/'.$s->id_ortu) ?>"><i class="far fa-edit fa-2x"></i></a></td>
                <td><a href="<?php echo site_url('/edit/hapus_or/'.$s->id_ortu) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"> <i class="fa fa-trash fa-2x"></i> </a></td>
              </tr>
            </tbody>
      
              <?php endforeach; ?>
            </table>
          </div>
        </div><br/>
      <br/>

      <?php $this->load->view("template/footer") ?>
      <?php $this->load->view("template/und") ?>
