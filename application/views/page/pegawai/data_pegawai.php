<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav") ?>

<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo site_url('dashboard/') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">
        <a href="<?php echo site_url('/pegawai/insert') ?>">Tambah Pegawai</a>
      </li>
		</ol>

		<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
			Data Pegawai</div><br/>
			<div class="container">
				<form action="<?php echo site_url('/pegawai/laporan') ?>" method="post">
					<input type="submit" name="export" class="btn btn-success" value="EXPORT">
				</form>
			</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
						  <th>Foto</th>
						  <th>NIP</th>
						  <th>Nama</th>
						  <th>Tempat/<br/>Tanggal Lahir</th>
						  <th>Gol/Ruang</th>
						  <th>Pendidikan <br/> Terakhir</th>
						  <th>Jenis/<br/>Nama Jabatan</th>
						  <th>Eselon</th>
						  <th></th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
					</tfoot>

					<tbody>
						<?php foreach ($all as $row): ?>
					  <tr align="center">
					    <td><img src="<?php echo base_url('upload/'.$row->image) ?>" class="rounded-circle" alt="" width="70" height="70"></td>
					    <td><?php echo $row->nip ?></td>
					    <td><?php echo $row->gelar_depan ?>&nbsp;<?php echo $row->nama_pegawai ?>&nbsp;<?php echo $row->gelar_belakang ?></td>
					    <td><?php echo $row->tempat_lahir ?> /<br/><?php echo $row->tanggal_lahir ?></td>
					    <td><?php echo $row->gol_ruang_terakhir ?></td>
					    <td><?php echo $row->pendidikan ?></td>
					    <td><?php echo $row->jenis_jab ?> /<br/><?php echo $row->nama_jab ?></td>
					    <td><?php echo $row->eselon ?></td>
					    <td><a href="<?php echo site_url('/pegawai/info/'.$row->nip) ?>"> <i class="fa fa-info-circle fa-2x"></i> </a><br/><a href="<?php echo site_url('/pegawai/del/'.$row->nip) ?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')"> <i class="fa fa-trash fa-2x"></i></a></td>
							<td><a href="<?php echo site_url('/edit/lapor/'.$row->nip) ?>"> <i class="fas fa-file-download fa-2x"></i> </a><br/></td>
					  </tr>
						<?php endforeach; ?>
					</tbody>

				</table>
			</div>
		</div>
		
	</div><br/>
    <?php $this->load->view("template/footer") ?>
    <?php $this->load->view("template/und") ?>
