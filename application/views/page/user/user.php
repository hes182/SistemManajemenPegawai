<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav") ?>

<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo site_url('dashboard/') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">
        <a href="<?php echo site_url('/user/V_tambah') ?>">Tambah User</a>
      </li>
		</ol>

        <!-- DataTables Example -->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data User</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr align="center">
                  <th>Id User</th>
                  <th>Username</th>
                  <th>Nama User</th>
									<th>Delete</th>
									<th>Update</th>
                </tr>
              </thead>
              <tfoot>
              </tfoot>
              <tbody>
                <?php foreach ($user as $user): ?>
                <tr align="center">
                  <td>
                    <?php echo $user->id_user ?>
                  </td>
                  <td>
                    <?php echo $user->username ?>
                  </td>
                  <td>
                    <?php echo $user->nama_user ?>
                  </td>
									<td><a href="<?php echo site_url('user/del/'.$user->id_user) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash fa-2x"></i></a></td>
                  <td><a href="<?php echo site_url('user/V_up/'.$user->id_user) ?>"><i class="far fa-edit fa-2x"></i></a></td>
                  </td>
                </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
        
      </div><br/>
    <?php $this->load->view("template/footer") ?>
    <?php $this->load->view("template/und") ?>
