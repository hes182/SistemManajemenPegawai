<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav_pegawai") ?>

<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo site_url('dashboard/') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">
        <a href="<?php echo site_url('pegawai/') ?>">Kembali Ke Data Pegawai</a>
      </li>
		</ol>

		<?php foreach ($nip as $row): ?>

			<div class="container">
			</div><br/>
		<div class="container">

			<center>
				<img src="<?php echo base_url('upload/'.$row->image) ?>" alt="" width="200" height="200" class="rounded-circle">
			</center>
		</div><br/>
	    <li class="list-group-item active" align="center">Identitas Pegawai</li><br/>
	      <div class="container">
	            <div class="form-group">
	              <label for="nip">NIP :&nbsp;<?php echo $row->nip ?></label>
	            </div>
	            <div class="form-group">
	              <label for="nama">Nama :&nbsp;<?php echo $row->gelar_depan ?>&nbsp;<?php echo $row->nama_pegawai ?>&nbsp;<?php echo $row->gelar_belakang ?></label>
	            </div>
							<div class="form-group">
	              <label for="nama">Jenis Kelamin :&nbsp;<?php echo $row->jenkel ?></label>
	            </div>
							<div class="form-group">
								<label for="nama">Agama :&nbsp;<?php echo $row->agama ?></label>
							</div>
							<div class="form-group">
								<label for="nama">Tempat Lahir :&nbsp;<?php echo $row->tempat_lahir ?></label>
							</div>
	            <div class="form-group">
	              <label for="uname">Tanggal Lahir :&nbsp;<?php echo $row->tanggal_lahir ?></label>
	            </div>

	            <div class="form-group">
	              <label for="alamat">Alamat :&nbsp;<?php echo $row->alamat ?></label>
	            </div>
							<div class="form-group">
								<label for="alamat">Golongan Darah :&nbsp;<?php echo $row->gol_darah ?></label>
							</div>
							<div class="form-group">
							 <label for="alamat">Pendidikan Terakhir :&nbsp;<?php echo $row->pendidikan ?></label>
						 </div>
	      </div><br/>

	  <li class="list-group-item active" align="center">Data Kepegawaian</li><br/>
	    <div class="container">
	          <div class="form-group">
	            <label for="sk_cpns">SK CPNS : <?php echo $row->sk_cpns ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK CPNS :&nbsp;<?php echo $row->tgl_sk_cpns ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK CPNS :&nbsp;<?php echo $row->tmt_cpns ?></label>
	          </div>
						<div class="form-group">
							<label for="tmt_sk_cpns">Gol/Ruang :&nbsp;<?php echo $row->gol_ruang_cpns ?></label>
						</div><br/>
	          <div class="form-group">
	            <label for="sk_pns">SK PNS :&nbsp;<?php echo $row->sk_pns ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK PNS :&nbsp;<?php echo $row->tgl_sk_pns ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK PNS :&nbsp;<?php echo $row->tmt_pns ?></label>
	          </div>
						<div class="form-group">
 						 <label for="tmt_sk_cpns">Gol/Ruang :&nbsp;<?php echo $row->gol_ruang_pns ?></label>
 					 </div>
					 <div class="form-group">
						 <label for="tmt_sk_cpns">Sumpah/Janji :&nbsp;<?php echo $row->sumpah ?></label>
					 </div>
	          <div class="form-group">
	            <label for="thn_sumpah">Tahun Sumpah :&nbsp;<?php echo $row->thn_sumpah ?></label>
	          </div>

	          <div class="form-group">
	            <label for="sk_gol_terakhir">SK Golongan Terakhir :&nbsp;<?php echo $row->sk_gol_terakhir ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tgl_gol_terakhir">Tanggal Golongan Terakhir :&nbsp;<?php echo $row->tgl_sk_gol_terakhir ?></label>
	          </div>
	          <div class="form-group">
	            <label for="tmt_gol_terakhir">TMT SK Golongan Terakhir :&nbsp;<?php echo $row->tmt_sk_gol_terakhir ?></label>
	          </div>
						<div class="form-group">
 						 <label for="tmt_gol_terakhir">Gol/Ruang Terakhir :&nbsp;<?php echo $row->gol_ruang_terakhir ?></label>
 					 </div><br/>
					 <div class="form-group">
							<label for="tmt_gol_terakhir">Kedudukan :&nbsp;<?php echo $row->kedudukan ?></label>
						</div>
						<div class="form-group">
							<label for="thn_sumpah">Jenis Pegawai :&nbsp;<?php echo $row->jenis_pegawai ?></label>
						</div>
						<div class="form-group">
							<label for="thn_sumpah">Unit Kerja :&nbsp;<?php echo $row->unit_kerja ?></label>
						</div>
						<div class="form-group">
							<label for="thn_sumpah">SubUnit Kerja :&nbsp;<?php echo $row->sub_unit ?></label>
						</div>
	    </div><br/>

	  <li class="list-group-item active" align="center">Data Jabatan Terakhir</li><br/>
		<div class="container">
			<div class="form-group">
				<label for="thn_sumpah">Jenis Jabatan :&nbsp;<?php echo $row->jenis_jab ?></label>
			</div>
			<div class="form-group">
				<label for="thn_sumpah">Nama Jabatan :&nbsp;<?php echo $row->nama_jab ?></label>
			</div>
	      <div class="form-group">
	          <label for="jenjang_jab">Jenjang Jabatan :&nbsp;<?php echo $row->jenjang_jab ?></label>
	      </div>

				<div class="form-group">
					<label for="thn_sumpah">Eselon :&nbsp;<?php echo $row->eselon ?></label>
				</div>
	      <div class="form-group">
	        <label for="sk_jab_terakhir">SK Jabatan Terakhir :&nbsp;<?php echo $row->sk_jab_terakhir ?></label>
	      </div>
	      <div class="form-group">
	        <label for="tgl_sk_jab_terakhir">Tanggal SK Jabatan Terakhir :&nbsp;<?php echo $row->tgl_sk_jab_terakhir ?></label>
	      </div>
			</div><br/>

	  <li class="list-group-item active" align="center">Data Lain</li><br/>
			<div class="container">
		        <div class="form-group">
		          <label for="nik">NIK :&nbsp;<?php echo $row->nik ?></label>
		        </div>
		        <div class="form-group">
		          <label for="npwp">NPWP :&nbsp;<?php echo $row->npwp ?></label>
		        </div>
		        <div class="form-group">
		          <label for="karpeg">Karpeg :&nbsp;<?php echo $row->karpeg ?></label>
		        </div>
		        <div class="form-group">
		          <label for="karis">Karis/Karsu :&nbsp;<?php echo $row->karis_karsu ?></label>
		        </div>
		        <div class="form-group">
		          <label for="akses">Akses :&nbsp;<?php echo $row->akses ?></label>
		        </div>
		        <div class="form-group">
		            <label for="taspen">Taspen :&nbsp;<?php echo $row->taspen ?></label>
		        </div>
		        <div class="form-group">
		          <label for="no_hp">No.HP :&nbsp;<?php echo $row->no_hp ?></label>
		        </div>
		        <div class="form-group">
		          <label for="email">Email :&nbsp;<?php echo $row->email ?></label>
		        </div>
		        <div class="form-group">
		          <label for="bank">Rek Bank Gaji :&nbsp;<?php echo $row->bank ?></label>
		        </div>
				</div><br/>
				<?php endforeach; ?><br/>



<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
