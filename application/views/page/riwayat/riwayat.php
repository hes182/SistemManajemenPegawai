<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_pegawai") ?>

    <?php foreach ($nip as $s):?>
        <!-- DataTables Example -->
      <div class="card mb-3">
        <li class="list-group-item active" align="center">Data Orangtua</li><br/>
        <div class="container">
          <a href="<?php echo site_url('/riwayat/add_ortu/'.$s->nip) ?>"><button type="submit" name="tambah" class="btn btn-success">Tambah</button></a><br/>
        </div>
      <?php endforeach; ?>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr align="center">
                  <th>Orangtua</th>
                  <th>Nama Orangtua</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahi</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <?php
                $this->load->view('page/riwayat/data_ortu');
               ?>
            </table>
          </div>
        </div><br/>

        <li class="list-group-item active" align="center">Data Anak</li><br/>
        <div class="container">
          <a href="<?php echo site_url('/riwayat/add_anak/'.$s->nip) ?>"><button type="submit" name="tambah" class="btn btn-success">Tambah</button></a><br/>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Nama Anak</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Status</th>
                  <th>Anak Dari</th>
                  <th>Anak Ke</th>
                  <th>Tunjangan</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><?php echo $s->nama_anak ?></td>
                  <td><?php echo $s->tmpt_lhr_anak ?></td>
                  <td><?php echo $s->tgl_lhr_anak ?></td>
                  <td><?php echo $s->status_anak ?></td>
                  <td><?php echo $s->anak_dari ?></td>
                  <td><?php echo $s->anak_ke ?></td>
                  <td><?php echo $s->tunjangan ?></td>
                  <td>Yes</td>
                  <td>Yes</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div><br/>

        <li class="list-group-item active" align="center">Data Suami/Istri</li><br/>
        <div class="container">
          <a href="<?php echo site_url('/riwayat/add_suami_istri/'.$s->nip) ?>"><button type="submit" name="tambah" class="btn btn-success">Tambah</button></a><br/>
        </div>

        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Suami/Istri</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Tanggal Nikah</th>
                  <th>Akta Nikah</th>
                  <th>Istri Ke</th>
                  <th>Tunjangan</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Anna</td>
                  <td>Pitt</td>
                  <td>35</td>
                  <td>New York</td>
                  <td>USA</td>
                  <td>Female</td>
                  <td>Yes</td>
                  <td>Yes</td>
                  <td>Yes</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

      <br/>
    <?php $this->load->view("template/footer") ?>
    <?php $this->load->view("template/und") ?>
