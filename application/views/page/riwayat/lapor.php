<?php foreach ($nip as $row): ?>
<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=$row->nip $row->nama_pegawai.xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
  <center>
  <h3>Data Pegawai DP3AP2KB</h3>
  <center/><br/>

      <center>
        <h4>Identitas Pegawai</h4>
      </center><br/>
      <center>
        <h3><img src="<?php echo base_url('upload/'.$row->image) ?>" alt="" width="50" height="50" class="rounded-circle"></h3>
      </center>
      <table>
        <tr align="left">
          <td>NIP</td><td>:</td><td><?php echo $row->nip ?></td>
        </tr>
        <tr align="left">
          <td>Nama Pegawai</td><td>:</td><td><?php echo $row->gelar_depan ?> <?php echo $row->nama_pegawai ?> <?php echo $row->gelar_belakang ?></td>
        </tr>
        <tr align="left">
          <td>Jenis Kelamin</td><td>:</td><td><?php echo $row->jenkel ?></td>
        </tr>
        <tr align="left">
          <td>Agama</td><td>:</td><td><?php echo $row->agama ?></td>
        </tr align="left">
        <tr>
          <td>Tempat/Tanggal Lahir</td><td>:</td><td><?php echo $row->tempat_lahir ?>/<?php echo $row->tanggal_lahir ?></td>
        </tr>
        <tr align="left">
          <td>Alamat</td><td>:</td><td><?php echo $row->alamat ?></td>
        </tr>
        <tr align="left">
          <td>Golongan Darah</td><td>:</td><td><?php echo $row->gol_darah ?></td>
        </tr>
        <tr align="left">
          <td>Pendidikan terakhir</td><td>:</td><td><?php echo $row->pendidikan ?></td>
        </tr>
      </table><br/>
      <center>
        <h4>Data Kepegawaian</h4>
      </center><br/>
      <table>
        <tr align="left">
          <td>SK CPNS</td><td>:</td><td><?php echo $row->sk_cpns ?></td>
        </tr>
        <tr align="left">
          <td>Tanggal SK CPNS</td><td>:</td><td><?php echo $row->tgl_sk_cpns ?></td>
        </tr>
        <tr align="left">
          <td>TMT SK CPNS</td><td>:</td><td><?php echo $row->tmt_cpns ?></td>
        </tr>
        <tr align="left">
          <td>Gol/Ruang</td><td>:</td><td><?php echo $row->gol_ruang_cpns ?></td>
        </tr>
        <tr align="left">
          <td>SK PNS</td><td>:</td><td><?php echo $row->sk_pns ?></td>
        </tr>
        <tr align="left">
          <td>Tanggal SK PNS</td><td>:</td><td><?php echo $row->tgl_sk_pns ?></td>
        </tr>
        <tr align="left">
          <td>TMT SK PNS</td><td>:</td><td><?php echo $row->tmt_pns ?></td>
        </tr>
        <tr align="left">
          <td>Gol/Ruang</td><td>:</td><td><?php echo $row->sumpah ?></td>
        </tr>
        <tr align="left">
          <td>Tahun Sumpah</td><td>:</td><td><?php echo $row->thn_sumpah ?></td>
        </tr>
        <tr align="left">
          <td>SK Golongan Terakhir</td><td>:</td><td><?php echo $row->sk_gol_terakhir ?></td>
        </tr>
        <tr align="left">
          <td>Tanggal Golongan Terakhir</td><td>:</td><td><?php echo $row->tgl_sk_gol_terakhir ?></td>
        </tr>
        <tr align="left">
          <td>TMT Golongan Terakhir</td><td>:</td><td><?php echo $row->tmt_sk_gol_terakhir ?></td>
        </tr>
        <tr align="left">
          <td>Gol/Ruang</td><td>:</td><td><?php echo $row->gol_ruang_terakhir ?></td>
        </tr>
        <tr align="left">
          <td>Kedudukan</td><td>:</td><td><?php echo $row->kedudukan ?></td>
        </tr>
        <tr align="left">
          <td>Jenis Pegawai</td><td>:</td><td><?php echo $row->jenis_pegawai ?></td>
        </tr>
        <tr align="left">
          <td>Unit Kerja</td><td>:</td><td><?php echo $row->unit_kerja ?></td>
        </tr>
        <tr align="left">
          <td>Sub Unit Kerja</td><td>:</td><td><?php echo $row->sub_unit ?></td>
        </tr>
      </table><br/>
      <center>
        <h4>Data Jabatan Terakhir</h4>
      </center><br/>
      <table>
        <tr align="left">
          <td>Jenis Jabatan</td><td>:</td><td><?php echo $row->jenis_jab ?></td>
        </tr>
        <tr align="left">
          <td>Nama Jabatan</td><td>:</td><td><?php echo $row->nama_jab ?></td>
        </tr>
        <tr align="left">
          <td>Jenjang Jabatan</td><td>:</td><td><?php echo $row->jenjang_jab ?></td>
        </tr>
        <tr align="left">
          <td>Eselon</td><td>:</td><td><?php echo $row->eselon ?></td>
        </tr>
        <tr align="left">
          <td>SK Jabatan Terakhir</td><td>:</td><td><?php echo $row->sk_jab_terakhir ?></td>
        </tr>
        <tr align="left">
          <td>Tanggal SK Jabatan Terakhir</td><td>:</td><td><?php echo $row->tgl_sk_jab_terakhir ?></td>
        </tr>
      </table><br/>
      <center>
        <h4>Data Lain</h4>
      </center><br/>
      <table>
        <tr align="left">
          <td>NIK</td><td>:</td><td><?php echo $row->nik ?></td>
        </tr>
        <tr align="left">
          <td>NPWP</td><td>:</td><td><?php echo $row->npwp ?></td>
        </tr>
        <tr align="left">
          <td>Karpeg</td><td>:</td><td><?php echo $row->karpeg ?></td>
        </tr>
        <tr align="left">
          <td>Karis/Karsu</td><td>:</td><td><?php echo $row->karis_karsu ?></td>
        </tr>
        <tr align="left">
          <td>Akses</td><td>:</td><td><?php echo $row->akses ?></td>
        </tr>
        <tr align="left">
          <td>Taspen</td><td>:</td><td><?php echo $row->taspen ?></td>
        </tr>
        <tr align="left">
          <td>No.HP</td><td>:</td><td><?php echo $row->no_hp ?></td>
        </tr>
        <tr align="left">
          <td>Email</td><td>:</td><td><?php echo $row->email ?></td>
        </tr>
        <tr align="left">
          <td>REk.Bank</td><td>:</td><td><?php echo $row->bank ?></td>
        </tr>
      </table>

    <?php endforeach; ?>
