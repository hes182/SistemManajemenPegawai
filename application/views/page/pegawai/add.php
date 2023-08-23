<?php $this->load->view("template/head") ?>
<?php $this->load->view("template/nav") ?>

<!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo site_url('dashboard/') ?>">Dashboard</a>
			</li>
			<li class="breadcrumb-item active">
        <a href="<?php echo site_url('pegawai/') ?>">Kembali</a>
      </li>
		</ol>

		<?php echo form_open_multipart('pegawai/save'); ?>
	    <li class="list-group-item active" align="center">Identitas Pegawai</li><br/>
	      <div class="container">
	        <div class="row">
	          <div class="col-6">
	            <div class="form-group">
	              <label for="nip">NIP:</label>
	              <input type="number" class="form-control" id="nip" name="nip" required>
	              <div class="valid-feedback">Valid.</div>
	              <div class="invalid-feedback">Please fill out this field.</div>
	            </div>
	            <div class="form-group">
	              <label for="nama">Nama:</label>
	              <input type="text" class="form-control" id="nama" name="nama" required>
	              <div class="valid-feedback">Valid.</div>
	              <div class="invalid-feedback">Please fill out this field.</div>
	            </div>
	            <div class="form-group">
	                <label for="sel1">Jenis Kelamin:</label>
	                <select class="form-control" id="jenkel" name="jenkel">
	                  <option> --</option>
	                  <option>Laki - Laki</option>
	                  <option>Perempuan</option>
	                </select>
	            </div>
	              <div class="form-group">
	                  <label for="sel1">Agama:</label>
	                  <select class="form-control" id="agama" name="agama">
	                    <option> --</option>
	                    <option>Islam</option>
	                    <option>Kristen</option>
	                    <option>Hindu</option>
	                    <option>Budha</option>
	                    <option>Khatolik</option>
											<option>Konghucu</option>
											<option>Lainnya</option>
	                  </select>
	              </div>
	            <div class="form-group">
	              <label for="uname">Tempat Lahir:</label>
	              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" required>
	              <div class="valid-feedback">Valid.</div>
	              <div class="invalid-feedback">Please fill out this field.</div>
	            </div>
	            <div class="form-group">
	              <label for="uname">Tanggal Lahir:</label>
	              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
	            </div>
	          </div>

	          <div class="col-6">
	            <div class="form-group">
	              <label for="alamat">Alamat:</label>
	              <textarea class="form-control" rows="2" id="alamat" name="alamat"></textarea>
	            </div>
	            <div class="form-group">
	                <label for="sel1">Golongan Darah:</label>
	                <select class="form-control" id="darah" name="darah">
	                  <option> --</option>
	                  <option>A</option>
	                  <option>B</option>
	                  <option>O</option>
	                  <option>AB</option>
	                </select>
	            </div>
	              <div class="form-group">
	                  <label for="sel1">Pendidikan Terakhir:</label>
	                  <select class="form-control" id="pendidikan" name="pendidikan">
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
	              <div class="form-group">
	                <label for="gelar">Gelar Depan:</label>
	                <input type="text" class="form-control" id="gel_depan" name="gel_depan">
	              </div>
	            <div class="form-group">
	              <label for="uname">Gelar Belakang:</label>
	              <input type="text" class="form-control" id="gel_belakang" name="gel_belakang">
	            </div>
							<div class="form-group">
								<label for="gambar">Upload Foto Pegawai:</label><br/>
								<input type="file" name="gambar">
							</div>
					 </div>
	        </div>
	      </div><br/>

	  <li class="list-group-item active" align="center">Data Kepegawaian</li><br/>
	    <div class="container">
	      <div class="row">
	        <div class="col-6">
	          <div class="form-group">
	            <label for="sk_cpns">SK CPNS:</label>
	            <input type="text" class="form-control" id="sk_cpns" name="sk_cpns" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Please fill out this field.</div>
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK CPNS:</label>
	            <input type="date" class="form-control" id="tgl_sk_cpns" name="tgl_sk_cpns" required>
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK CPNS:</label>
	            <input type="date" class="form-control" id="tmt_sk_cpns" name="tmt_sk_cpns" required>
	          </div>
	            <div class="form-group">
	                <label for="sel1">Golongan/Ruang:</label>
	                <select class="form-control" id="gol_cpns" name="gol_cpns">
	                  <option> --</option>
	                  <option>I/a</option>
	                  <option>I/b</option>
	                  <option>I/c</option>
	                  <option>I/d</option>
										<option>II/a</option>
	                  <option>II/b</option>
	                  <option>II/c</option>
	                  <option>II/d</option>
										<option>III/a</option>
	                  <option>III/b</option>
	                  <option>III/c</option>
	                  <option>III/d</option>
										<option>IV/a</option>
	                  <option>IV/b</option>
	                  <option>IV/c</option>
	                  <option>IV/d</option>
										<option>IV/e</option>
	                </select>
	            </div><br/>
	          <div class="form-group">
	            <label for="sk_pns">SK PNS:</label>
	            <input type="text" class="form-control" id="sk_pns" name="sk_pns" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Please fill out this field.</div>
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK PNS:</label>
	            <input type="date" class="form-control" id="tgl_sk_pns" name="tgl_sk_pns" required>
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK PNS:</label>
	            <input type="date" class="form-control" id="tmt_sk_cpns" name="tmt_sk_pns" required>
	          </div>
	          <div class="form-group">
	              <label for="sel1">Golongan/Ruang:</label>
	              <select class="form-control" id="gol_pns" name="gol_pns">
	                <option> --</option>
									<option>I/a</option>
									<option>I/b</option>
									<option>I/c</option>
									<option>I/d</option>
									<option>II/a</option>
									<option>II/b</option>
									<option>II/c</option>
									<option>II/d</option>
									<option>III/a</option>
									<option>III/b</option>
									<option>III/c</option>
									<option>III/d</option>
									<option>IV/a</option>
									<option>IV/b</option>
									<option>IV/c</option>
									<option>IV/d</option>
									<option>IV/e</option>
	              </select>
	          </div>
	          <div class="form-group">
	              <label for="sumpah">Sumpah/Janji:</label>
	              <select class="form-control" id="sumpah" name="sumpah">
	                <option> --</option>
	                <option>Sudah</option>
	                <option>Belum</option>
	              </select>
	          </div>
	          <div class="form-group">
	            <label for="thn_sumpah">Tahun Sumpah:</label>
	            <input type="text" class="form-control" id="thn_sumpah" name="thn_sumpah" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Please fill out this field.</div>
	          </div>
	        </div>

	        <div class="col-6">
	          <div class="form-group">
	            <label for="sk_gol_terakhir">SK Golongan Terakhir:</label>
	            <input type="text" class="form-control" id="sk_gol_terakhir" name="sk_gol_terakhir" required>
	            <div class="valid-feedback">Valid.</div>
	            <div class="invalid-feedback">Please fill out this field.</div>
	          </div>
	          <div class="form-group">
	            <label for="tgl_gol_terakhir">Tanggal Golongan Terakhir:</label>
	            <input type="date" class="form-control" id="tgl_gol_terakhir" name="tgl_gol_terakhir" required>
	          </div>
	          <div class="form-group">
	            <label for="tmt_gol_terakhir">TMT SK Golongan Terakhir:</label>
	            <input type="date" class="form-control" id="tmt_gol_terakhir" name="tmt_gol_terakhir" required>
	          </div>
	          <div class="form-group">
	              <label for="sel1">Golongan/Ruang Terakhir:</label>
	              <select class="form-control" id="gol_terakhir" name="gol_terakhir">
	                <option> --</option>
									<option>I/a</option>
									<option>I/b</option>
									<option>I/c</option>
									<option>I/d</option>
									<option>II/a</option>
									<option>II/b</option>
									<option>II/c</option>
									<option>II/d</option>
									<option>III/a</option>
									<option>III/b</option>
									<option>III/c</option>
									<option>III/d</option>
									<option>IV/a</option>
									<option>IV/b</option>
									<option>IV/c</option>
									<option>IV/d</option>
									<option>IV/e</option>
	              </select>
	          </div><br/>
	          <div class="form-group">
	              <label for="sel1">Kedudukan Pegawai:</label>
	              <select class="form-control" id="kedudukan" name="kedudukan">
	                <option> --</option>
									<option>PEGAWAI AKTIF</option>
	                <option>PEJABAT NEGARA</option>
	                <option>CUTI DILUAR TANGGUNGAN NEGARA</option>
	                <option>PENERIMA UANG TUNGGU</option>
	                <option>BEBAS TUGAS</option>
									<option>TUGAS BELAJAR</option>
									<option>SKORSING</option>
									<option>PEMBEBASAN JAB.ORGANIK</option>
									<option>MASA PERSIAPAN PENSIUN</option>
									<option>INAKTIV</option>
	              </select>
	          </div>
						<div class="form-group">
							<label for="thn_sumpah">Jenis Pegawai:</label>
							<input type="text" class="form-control" id="jenis_pegawai" name="jenis_pegawai" required>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
						<div class="form-group">
							<label for="thn_sumpah">Unit Kerja:</label>
							<input type="text" class="form-control" id="unit" name="unit" value="Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana" readonly>
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out this field.</div>
						</div>
	          <div class="form-group">
	              <label for="sub_unit">Sub Unit Kerja:</label>
	              <select class="form-control" id="sub_unit" name="sub_unit">
	                <option> --</option>
	                <option>Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
	                <option>Sekretaris</option>
	                <option>Kepala Subag Program</option>
	                <option>Kepala Subag Keuangan</option>
	                <option>Kepala Subag Umum dan Kepegawaian</option>
									<option>Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak</option>
									<option>Seksi Pemberdayaan Perempuan</option>
									<option>Seksi Perlindungan Anak</option>
									<option>Kepala Bidang Keluarga Berencana</option>
									<option>Seksi Pembinaan dan Pelayanan Keluarga Berencana</option>
									<option>Seksi Sarana Prasarana Keluarga Berencana</option>
									<option>Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan</option>
									<option>Seksi Pengendalian Penduduk</option>
									<option>Seksi Penyuluhan dan Penggerakan</option>
									<option>Kepala Bidang Ketahanan dan Kesejahteraan Keluarga</option>
									<option>Seksi Pembinaan Ketahanan Keluarga</option>
									<option>Seksi Pemberdayaan Kesejahteraan Keluarga</option>
									<option>Jabatan Fungsional</option>
									<option>Staff</option>
	              </select>
	          </div>
	        </div>
	      </div>
	    </div><br/>

	  <li class="list-group-item active" align="center">Data Jabatan Terakhir</li><br/>
		<div class="container">
	  <div class="row">
	    <div class="col-6">
	      <div class="form-group">
	          <label for="jenis_jab">Jenis Jabatan:</label>
	          <select class="form-control" id="jenis_jab" name="jenis_jab">
	            <option> --</option>
	            <option>STRUKTURAL</option>
	            <option>JFT/JFK</option>
	            <option>JFU</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="nama_jab">Nama Jabatan:</label>
	          <select class="form-control" id="nama_jab" name="nama_jab">
	            <option> --</option>
							<option>Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
							<option>Sekretaris</option>
							<option>Kepala Subag Program</option>
							<option>Kepala Subag Keuangan</option>
							<option>Kepala Subag Umum dan Kepegawaian</option>
							<option>Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak</option>
							<option>Seksi Pemberdayaan Perempuan</option>
							<option>Seksi Perlindungan Anak</option>
							<option>Kepala Bidang Keluarga Berencana</option>
							<option>Seksi Pembinaan dan Pelayanan Keluarga Berencana</option>
							<option>Seksi Sarana Prasarana Keluarga Berencana</option>
							<option>Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan</option>
							<option>Seksi Pengendalian Penduduk</option>
							<option>Seksi Penyuluhan dan Penggerakan</option>
							<option>Kepala Bidang Ketahanan dan Kesejahteraan Keluarga</option>
							<option>Seksi Pembinaan Ketahanan Keluarga</option>
							<option>Seksi Pemberdayaan Kesejahteraan Keluarga</option>
							<option>Jabatan Fungsional</option>
							<option>Staff</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="jenjang_jab">Jenjang Jabatan:</label>
	          <select class="form-control" id="jenjang_jab" name="jenjang_jab">
	            <option></option>

	          </select>
	      </div>
	    </div>
	    <div class="col-6">
	      <div class="form-group">
	          <label for="jenjang_jab">Eselon:</label>
	          <select class="form-control" id="eselon" name="eselon">
	            <option> --</option>
							<option>I/a</option>
							<option>I/b</option>
							<option>I/c</option>
							<option>I/d</option>
							<option>II/a</option>
							<option>II/b</option>
							<option>II/c</option>
							<option>II/d</option>
							<option>III/a</option>
							<option>III/b</option>
							<option>III/c</option>
							<option>III/d</option>
							<option>IV/a</option>
							<option>IV/b</option>
							<option>IV/c</option>
							<option>IV/d</option>
							<option>IV/e</option>
	          </select>
	      </div>
	      <div class="form-group">
	        <label for="sk_jab_terakhir">SK Jabatan Terakhir:</label>
	        <input type="text" class="form-control" id="sk_jab_terakhir" name="sk_jab_terakhir" required>
	        <div class="valid-feedback">Valid.</div>
	        <div class="invalid-feedback">Please fill out this field.</div>
	      </div>
	      <div class="form-group">
	        <label for="tgl_sk_jab_terakhir">Tanggal SK Jabatan Terakhir:</label>
	        <input type="date" class="form-control" id="tgl_sk_jab_terakhir" name="tgl_sk_jab_terakhir" required>
	      </div>
	    </div>
	  </div>
		</div><br/>

	  <li class="list-group-item active" align="center">Data Lain</li><br/>
		<div class="container">
	    <div class="row">
	      <div class="col-6">
	        <div class="form-group">
	          <label for="nik">NIK:</label>
	          <input type="number" class="form-control" id="nik" name="nik" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	        <div class="form-group">
	          <label for="npwp">NPWP:</label>
	          <input type="number" class="form-control" id="npwp" name="npwp" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	        <div class="form-group">
	          <label for="karpeg">Karpeg:</label>
	          <input type="text" class="form-control" id="karpeg" name="karpeg" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	        <div class="form-group">
	          <label for="karis">Karis/Karsu:</label>
	          <input type="text" class="form-control" id="karis" name="karis" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	        <div class="form-group">
	          <label for="akses">Akses:</label>
	          <input type="text" class="form-control" id="akses" name="akses" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	      </div>
	      <div class="col-6">
	        <div class="form-group">
	            <label for="taspen">Taspen:</label>
	            <select class="form-control" id="taspen" name="taspen">
	              <option> --</option>
	              <option>Sudah</option>
	              <option>Belum</option>
	            </select>
	        </div>
	        <div class="form-group">
	          <label for="no_hp">No.HP:</label>
	          <input type="text" class="form-control" id="no_hp" name="no_hp" required>
	          <div class="valid-feedback">Valid.</div>
	          <div class="invalid-feedback">Please fill out this field.</div>
	        </div>
	        <div class="form-group">
	          <label for="email">Email:</label>
	          <input type="text" class="form-control" id="email" name="email">
	        </div>
	        <div class="form-group">
	          <label for="bank">Rek Bank Gaji:</label>
	          <input type="text" class="form-control" id="bank" name="bank">
	        </div>
	      </div>
	    </div><br/>
			<center>
				<button type="submit" class="btn btn-success btn-lg">Simpan</button>
				<a href="<?php echo site_url('./pegawai/') ?>" class="btn btn-danger btn-lg">Kembali</a>
			</center>
			</div>
		<?php echo form_close(); ?><br/><br/>

<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
