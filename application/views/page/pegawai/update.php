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
		</ol><br/>

    <?php foreach ($nip as $a): ?>

		<?php echo form_open_multipart('pegawai/aksi_up'); ?>
	    <li class="list-group-item active" align="center">Identitas Pegawai</li><br/>
	      <div class="container">
	        <div class="row">
	          <div class="col-6">
	            <div class="form-group">
	              <label for="nip">NIP:</label>
	              <input type="number" class="form-control" id="nip" name="nip" value="<?php echo $a->nip ?>" readonly>
	            </div>
	            <div class="form-group">
	              <label for="nama">Nama:</label>
	              <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $a->nama_pegawai ?>">
	            </div>
	            <div class="form-group">
	                <label for="sel1">Jenis Kelamin:</label>
	                <select class="form-control" id="jenkel" name="jenkel">
	                  <option value="<?php echo $a->jenkel ?>"><?php echo $a->jenkel ?></option>
	                  <option value="Laki - Laki">Laki - Laki</option>
	                  <option value="Perempuan">Perempuan</option>
	                </select>
	            </div>
	              <div class="form-group">
	                  <label for="sel1">Agama:</label>
	                  <select class="form-control" id="agama" name="agama">
	                    <option value="<?php echo $a->agama ?>"><?php echo $a->agama ?></option>
	                    <option value="Islam">Islam</option>
	                    <option value="Kristen">Kristen</option>
	                    <option value="Hindu">Hindu</option>
	                    <option value="Budha">Budha</option>
	                    <option value="Khatolik">Khatolik</option>
											<option value="Konghucu">Konghucu</option>
											<option value="Lainnya">Lainnya</option>
	                  </select>
	              </div>
	            <div class="form-group">
	              <label for="uname">Tempat Lahir:</label>
	              <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir" value="<?php echo $a->tempat_lahir ?>">
	            </div>
	            <div class="form-group">
	              <label for="uname">Tanggal Lahir:</label>
	              <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?php echo $a->tanggal_lahir ?>">
	            </div>
	          </div>

	          <div class="col-6">
	            <div class="form-group">
	              <label for="alamat">Alamat:</label>
	              <textarea class="form-control" rows="2" id="alamat" name="alamat"><?php echo $a->alamat ?></textarea>
	            </div>
	            <div class="form-group">
	                <label for="sel1">Golongan Darah:</label>
	                <select class="form-control" id="darah" name="darah">
	                  <option value="<?php echo $a->gol_darah ?>"><?php echo $a->gol_darah ?></option>
	                  <option value="A">A</option>
	                  <option value="B">B</option>
	                  <option value="O">O</option>
	                  <option value="AB">AB</option>
	                </select>
	            </div>
	              <div class="form-group">
	                  <label for="sel1">Pendidikan Terakhir:</label>
	                  <select class="form-control" id="pendidikan" name="pendidikan">
	                    <option value="<?php echo $a->pendidikan ?>"><?php echo $a->pendidikan ?></option>
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
	              <div class="form-group">
	                <label for="gelar">Gelar Depan:</label>
	                <input type="text" class="form-control" id="gel_depan" name="gel_depan" value="<?php echo $a->gelar_depan ?>">
	              </div>
	            <div class="form-group">
	              <label for="uname">Gelar Belakang:</label>
	              <input type="text" class="form-control" id="gel_belakang" name="gel_belakang" value="<?php echo $a->gelar_belakang ?>">
	            </div><br/>
              <div class="form-check">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="ubah">Klik tombol jika ingin ubah foto pegawai
                </label>
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
	            <input type="text" class="form-control" id="sk_cpns" name="sk_cpns"value="<?php echo $a->sk_cpns ?>">
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK CPNS:</label>
	            <input type="date" class="form-control" id="tgl_sk_cpns" name="tgl_sk_cpns" value="<?php echo $a->tgl_sk_cpns ?>">
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK CPNS:</label>
	            <input type="date" class="form-control" id="tmt_sk_cpns" name="tmt_sk_cpns" value="<?php echo $a->tmt_cpns ?>">
	          </div>
	            <div class="form-group">
	                <label for="sel1">Golongan/Ruang:</label>
	                <select class="form-control" id="gol_cpns" name="gol_cpns">
	                  <option value="<?php echo $a->gol_ruang_cpns ?>"><?php echo $a->gol_ruang_cpns ?></option>
	                  <option value="I/a">I/a</option>
	                  <option value="I/b">I/b</option>
	                  <option value="I/c">I/c</option>
	                  <option value="I/d">I/d</option>
										<option value="II/a">II/a</option>
	                  <option value="II/b">II/b</option>I
	                  <option value="II/c">II/c</option>
	                  <option value="II/d">II/d</option>
										<option value="III/a">III/a</option>
	                  <option value="III/b">III/b</option>
	                  <option value="III/c">III/c</option>
	                  <option value="III/d">III/d</option>
										<option value="IV/a">IV/a</option>
	                  <option value="IV/b">IV/b</option>
	                  <option value="IV/c">IV/c</option>
	                  <option value="IV/d">IV/d</option>
										<option value="IV/e">IV/e</option>
	                </select>
	            </div><br/>
	          <div class="form-group">
	            <label for="sk_pns">SK PNS:</label>
	            <input type="text" class="form-control" id="sk_pns" name="sk_pns" value="<?php echo $a->sk_pns ?>">
	          </div>
	          <div class="form-group">
	            <label for="tgl_sk_cpns">Tanggal SK PNS:</label>
	            <input type="date" class="form-control" id="tgl_sk_pns" name="tgl_sk_pns" value="<?php echo $a->tgl_sk_pns ?>">
	          </div>
	          <div class="form-group">
	            <label for="tmt_sk_cpns">TMT SK PNS:</label>
	            <input type="date" class="form-control" id="tmt_sk_cpns" name="tmt_sk_pns"value="<?php echo $a->tmt_pns ?>">
	          </div>
	          <div class="form-group">
	              <label for="sel1">Golongan/Ruang:</label>
	              <select class="form-control" id="gol_pns" name="gol_pns">
	                <option value="<?php echo $a->gol_ruang_pns ?>"><?php echo $a->gol_ruang_pns ?></option>
                  <option value="I/a">I/a</option>
                  <option value="I/b">I/b</option>
                  <option value="I/c">I/c</option>
                  <option value="I/d">I/d</option>
                  <option value="II/a">II/a</option>
                  <option value="II/b">II/b</option>I
                  <option value="II/c">II/c</option>
                  <option value="II/d">II/d</option>
                  <option value="III/a">III/a</option>
                  <option value="III/b">III/b</option>
                  <option value="III/c">III/c</option>
                  <option value="III/d">III/d</option>
                  <option value="IV/a">IV/a</option>
                  <option value="IV/b">IV/b</option>
                  <option value="IV/c">IV/c</option>
                  <option value="IV/d">IV/d</option>
                  <option value="IV/e">IV/e</option>
	              </select>
	          </div>
	          <div class="form-group">
	              <label for="sumpah">Sumpah/Janji:</label>
	              <select class="form-control" id="sumpah" name="sumpah">
	                <option value="<?php echo $a->sumpah ?>"><?php echo $a->sumpah ?></option>
	                <option value="Sudah">Sudah</option>
	                <option value="Belum">Belum</option>
	              </select>
	          </div>
	          <div class="form-group">
	            <label for="thn_sumpah">Tahun Sumpah:</label>
	            <input type="text" class="form-control" id="thn_sumpah" name="thn_sumpah" value="<?php echo $a->thn_sumpah ?>">
	          </div>
	        </div>

	        <div class="col-6">
	          <div class="form-group">
	            <label for="sk_gol_terakhir">SK Golongan Terakhir:</label>
	            <input type="text" class="form-control" id="sk_gol_terakhir" name="sk_gol_terakhir" value="<?php echo $a->sk_gol_terakhir ?>">
	          </div>
	          <div class="form-group">
	            <label for="tgl_gol_terakhir">Tanggal Golongan Terakhir:</label>
	            <input type="date" class="form-control" id="tgl_gol_terakhir" name="tgl_gol_terakhir" value="<?php echo $a->tgl_sk_gol_terakhir ?>">
	          </div>
	          <div class="form-group">
	            <label for="tmt_gol_terakhir">TMT SK Golongan Terakhir:</label>
	            <input type="date" class="form-control" id="tmt_gol_terakhir" name="tmt_gol_terakhir" value="<?php echo $a->tmt_sk_gol_terakhir ?>">
	          </div>
	          <div class="form-group">
	              <label for="sel1">Golongan/Ruang Terakhir:</label>
	              <select class="form-control" id="gol_terakhir" name="gol_terakhir">
	                <option value="<?php echo $a->gol_ruang_terakhir ?>"><?php echo $a->gol_ruang_terakhir ?></option>
                  <option value="I/a">I/a</option>
                  <option value="I/b">I/b</option>
                  <option value="I/c">I/c</option>
                  <option value="I/d">I/d</option>
                  <option value="II/a">II/a</option>
                  <option value="II/b">II/b</option>I
                  <option value="II/c">II/c</option>
                  <option value="II/d">II/d</option>
                  <option value="III/a">III/a</option>
                  <option value="III/b">III/b</option>
                  <option value="III/c">III/c</option>
                  <option value="III/d">III/d</option>
                  <option value="IV/a">IV/a</option>
                  <option value="IV/b">IV/b</option>
                  <option value="IV/c">IV/c</option>
                  <option value="IV/d">IV/d</option>
                  <option value="IV/e">IV/e</option>
	              </select>
	          </div><br/>
	          <div class="form-group">
	              <label for="sel1">Kedudukan Pegawai:</label>
	              <select class="form-control" id="kedudukan" name="kedudukan">
	                <option value="<?php echo $a->kedudukan ?>"><?php echo $a->kedudukan ?></option>
									<option value="PEGAWAI AKTIF">PEGAWAI AKTIF</option>
	                <option value="PEJABAT NEGARA">PEJABAT NEGARA</option>
	                <option value="CUTI DILUAT TANGGUNGAN NEGARA">CUTI DILUAR TANGGUNGAN NEGARA</option>
	                <option value="PENERIMA UANG TUNGGU">PENERIMA UANG TUNGGU</option>
	                <option value="BEBAS TUGAS">BEBAS TUGAS</option>
									<option value="TUGAS BELAJAR">TUGAS BELAJAR</option>
									<option value="SKORSING">SKORSING</option>
									<option value="PEMBEBASAN">PEMBEBASAN JAB.ORGANIK</option>
									<option value="MASA PERSIAPAN PENSIUN">MASA PERSIAPAN PENSIUN</option>
									<option value="INAKTIV">INAKTIV</option>
	              </select>
	          </div>
						<div class="form-group">
							<label for="thn_sumpah">Jenis Pegawai:</label>
							<input type="text" class="form-control" id="jenis_pegawai" name="jenis_pegawai" value="<?php echo $a->jenis_jab ?>">
						</div>
						<div class="form-group">
							<label for="thn_sumpah">Unit Kerja:</label>
							<input type="text" class="form-control" id="unit" name="unit" value="Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana" readonly>
						</div>
	          <div class="form-group">
	              <label for="sub_unit">Sub Unit Kerja:</label>
	              <select class="form-control" id="sub_unit" name="sub_unit">
	                <option value="<?php echo $a->sub_unit ?>"><?php echo $a->sub_unit ?></option>
	                <option value="Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana">Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
	                <option value="Sekretaris">Sekretaris</option>
	                <option value="Kepala Subag Program">Kepala Subag Program</option>
	                <option value="Kepala Subag Keuangan">Kepala Subag Keuangan</option>
	                <option value="Kepala Subag Umum dan Kepegawaian">Kepala Subag Umum dan Kepegawaian</option>
									<option value="Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak">Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak</option>
									<option value="Seksi Pemberdayaan Perempuan">Seksi Pemberdayaan Perempuan</option>
									<option value="Seksi Perlindungan Anak">Seksi Perlindungan Anak</option>
									<option value="Kepala Bidang Keluarga Berencana">Kepala Bidang Keluarga Berencana</option>
									<option value="Seksi Pembinaan dan Pelayanan Keluarga Berencana">Seksi Pembinaan dan Pelayanan Keluarga Berencana</option>
									<option value="Seksi Sarana Prasarana Keluarga Berencana">Seksi Sarana Prasarana Keluarga Berencana</option>
									<option value="Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan">Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan</option>
									<option value="Seksi Pengendalian Penduduk">Seksi Pengendalian Penduduk</option>
									<option value="Seksi Penyuluhan dan Penggerakan">Seksi Penyuluhan dan Penggerakan</option>
									<option value="Kepala Bidang Ketahanan dan Kesejahteraan Keluarga">Kepala Bidang Ketahanan dan Kesejahteraan Keluarga</option>
									<option value="Seksi Pembinaan Ketahanan Keluarga">Seksi Pembinaan Ketahanan Keluarga</option>
									<option value="Seksi Pemberdayaan Kesejahteraan Keluarga">Seksi Pemberdayaan Kesejahteraan Keluarga</option>
									<option value="Jabatan Fungsional">Jabatan Fungsional</option>
									<option value="Staff">Staff</option>
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
	            <option value="<?php echo $a->jenis_jab ?>"><?php echo $a->jenis_jab ?></option>
	            <option value="STRUKTURAL">STRUKTURAL</option>
	            <option value=JFT/JFK"">JFT/JFK</option>
	            <option value="JFU">JFU</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="nama_jab">Nama Jabatan:</label>
	          <select class="form-control" id="nama_jab" name="nama_jab">
	            <option value="<?php echo $a->nama_jab ?>"><?php echo $a->nama_jab ?></option>
              <option value="Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana">Kepala Dinas Pemberdayaan Perempuan dan Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana</option>
              <option value="Sekretaris">Sekretaris</option>
              <option value="Kepala Subag Program">Kepala Subag Program</option>
              <option value="Kepala Subag Keuangan">Kepala Subag Keuangan</option>
              <option value="Kepala Subag Umum dan Kepegawaian">Kepala Subag Umum dan Kepegawaian</option>
              <option value="Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak">Kepala Bidang Pemberdayaan Perempuan dan Perlindungan Anak</option>
              <option value="Seksi Pemberdayaan Perempuan">Seksi Pemberdayaan Perempuan</option>
              <option value="Seksi Perlindungan Anak">Seksi Perlindungan Anak</option>
              <option value="Kepala Bidang Keluarga Berencana">Kepala Bidang Keluarga Berencana</option>
              <option value="Seksi Pembinaan dan Pelayanan Keluarga Berencana">Seksi Pembinaan dan Pelayanan Keluarga Berencana</option>
              <option value="Seksi Sarana Prasarana Keluarga Berencana">Seksi Sarana Prasarana Keluarga Berencana</option>
              <option value="Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan">Kepala Bidang Pengendalian Penduduk, Penyuluhan dan Penggerakan</option>
              <option value="Seksi Pengendalian Penduduk">Seksi Pengendalian Penduduk</option>
              <option value="Seksi Penyuluhan dan Penggerakan">Seksi Penyuluhan dan Penggerakan</option>
              <option value="Kepala Bidang Ketahanan dan Kesejahteraan Keluarga">Kepala Bidang Ketahanan dan Kesejahteraan Keluarga</option>
              <option value="Seksi Pembinaan Ketahanan Keluarga">Seksi Pembinaan Ketahanan Keluarga</option>
              <option value="Seksi Pemberdayaan Kesejahteraan Keluarga">Seksi Pemberdayaan Kesejahteraan Keluarga</option>
              <option value="Jabatan Fungsional">Jabatan Fungsional</option>
              <option value="Staff">Staff</option>
	          </select>
	      </div>
	      <div class="form-group">
	          <label for="jenjang_jab">Jenjang Jabatan:</label>
	          <select class="form-control" id="jenjang_jab" name="jenjang_jab">
	           
	          </select>
	      </div>
	    </div>
	    <div class="col-6">
	      <div class="form-group">
	          <label for="jenjang_jab">Eselon:</label>
	          <select class="form-control" id="eselon" name="eselon">
	            <option value="<?php echo $a->eselon ?>"><?php echo $a->eselon ?></option>
              <option value="I/a">I/a</option>
              <option value="I/b">I/b</option>
              <option value="I/c">I/c</option>
              <option value="I/d">I/d</option>
              <option value="II/a">II/a</option>
              <option value="II/b">II/b</option>I
              <option value="II/c">II/c</option>
              <option value="II/d">II/d</option>
              <option value="III/a">III/a</option>
              <option value="III/b">III/b</option>
              <option value="III/c">III/c</option>
              <option value="III/d">III/d</option>
              <option value="IV/a">IV/a</option>
              <option value="IV/b">IV/b</option>
              <option value="IV/c">IV/c</option>
              <option value="IV/d">IV/d</option>
              <option value="IV/e">IV/e</option>
	          </select>
	      </div>
	      <div class="form-group">
	        <label for="sk_jab_terakhir">SK Jabatan Terakhir:</label>
	        <input type="text" class="form-control" id="sk_jab_terakhir" name="sk_jab_terakhir" value="<?php echo $a->sk_jab_terakhir ?>">
	      </div>
	      <div class="form-group">
	        <label for="tgl_sk_jab_terakhir">Tanggal SK Jabatan Terakhir:</label>
	        <input type="date" class="form-control" id="tgl_sk_jab_terakhir" name="tgl_sk_jab_terakhir" value="<?php echo $a->tgl_sk_jab_terakhir ?>">
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
	          <input type="number" class="form-control" id="nik" name="nik" value="<?php echo $a->nik ?>">
	        </div>
	        <div class="form-group">
	          <label for="npwp">NPWP:</label>
	          <input type="number" class="form-control" id="npwp" name="npwp" value="<?php echo $a->npwp ?>">
	        </div>
	        <div class="form-group">
	          <label for="karpeg">Karpeg:</label>
	          <input type="text" class="form-control" id="karpeg" name="karpeg" value="<?php echo $a->karpeg ?>">
	        </div>
	        <div class="form-group">
	          <label for="karis">Karis/Karsu:</label>
	          <input type="text" class="form-control" id="karis" name="karis" value="<?php echo $a->karis_karsu ?>">
	        </div>
	        <div class="form-group">
	          <label for="akses">Akses:</label>
	          <input type="text" class="form-control" id="akses" name="akses" value="<?php echo $a->akses ?>">
	        </div>
	      </div>
	      <div class="col-6">
	        <div class="form-group">
	            <label for="taspen">Taspen:</label>
	            <select class="form-control" id="taspen" name="taspen">
	              <option value="<?php echo $a->taspen ?>"><?php echo $a->taspen ?></option>
	              <option value="Sudah">Sudah</option>
	              <option value="Belum">Belum</option>
	            </select>
	        </div>
	        <div class="form-group">
	          <label for="no_hp">No.HP:</label>
	          <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $a->no_hp ?>">
	        </div>
	        <div class="form-group">
	          <label for="email">Email:</label>
	          <input type="text" class="form-control" id="email" name="email" value="<?php echo $a->email ?>">
	        </div>
	        <div class="form-group">
	          <label for="bank">Rek Bank Gaji:</label>
	          <input type="text" class="form-control" id="bank" name="bank" value="<?php echo $a->bank ?>">
	        </div>
	      </div>
	    </div><br/>
			<center>
				<button type="submit" class="btn btn-success btn-lg">Simpan</button>
			</center>
			</div>
		<?php echo form_close(); ?>
    <?php endforeach; ?>
    <br/><br/>

<?php $this->load->view("template/footer") ?>
<?php $this->load->view("template/und") ?>
