<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class edit extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->model('riwayat_M');
    $this->load->model('user_model');
    $this->load->library('pdf');
  }

  public function up_ortu($id){
    $where = array('id_ortu' => $id);
    $data['id'] = $this->riwayat_M->update($where,'data_ortu')->result();
    $this->load->view('page/edit/e_ortu',$data);
  }

  public function save_up(){
    $id = $this->input->post('id');
    $nip = $this->input->post('nip');
    $ortu = $this->input->post('ortu');
    $nama = $this->input->post('nama_ortu');
    $tmpt = $this->input->post('tmpt_lhr');
    $tgl = $this->input->post('tgl_lhr');

    $data = array(
      'nip_ortu' => $nip,
      'ortu' => $ortu,
      'nama_ortu' => $nama,
      'tmpt_lhr' => $tmpt,
      'tgl_lhr' => $tgl
    );

     $where = array('id_ortu' => $id);
    $this->riwayat_M->aksi_ed($where,$data,'data_ortu');
    redirect('pegawai');
  }

  public function up_anak($id){
    $where = array('id_anak' => $id);
    $data['id'] = $this->riwayat_M->update($where,'data_anak')->result();
    $this->load->view('page/edit/e_anak',$data);
  }

  public function save_id(){
    $id = $this->input->post('id');
    $nip = $this->input->post('nip');
    $nama = $this->input->post('nama_anak');
    $tmpt = $this->input->post('tmpt_lhr');
    $tgl = $this->input->post('tgl_lhr');
    $status = $this->input->post('status');
    $anak_dari = $this->input->post('anak_dari');
    $anak_ke = $this->input->post('anak_ke');
    $tunjangan = $this->input->post('tunjangan');

    $data = array(
      'nip_anak' => $nip,
      'nama_anak' => $nama,
      'tmpt_lhr_anak' => $tmpt,
      'tgl_lhr_anak' => $tgl,
      'status_anak' => $status,
      'anak_dari' => $anak_dari,
      'anak_ke' => $anak_ke,
      'tunjangan' => $tunjangan
    );
    $where = array('id_anak' => $id);
   $this->riwayat_M->aksi_ed($where,$data,'data_anak');
   redirect('pegawai');

  }

  public function up_suami_istri($id){
    $where = array('id_nikah' => $id);
    $data['id'] = $this->riwayat_M->update($where,'data_suami_istri')->result();
    $this->load->view('page/edit/e_suami_istri',$data);
  }

  public function save_ad(){
    $id = $this->input->post('id');
    $nip = $this->input->post('nip');
    $nama = $this->input->post('nama_suami_istri');
    $tmpt = $this->input->post('tmpt_lhr');
    $tgl = $this->input->post('tgl_lhr');
    $nikah = $this->input->post('tgl_nikah');
    $istri_ke = $this->input->post('istri_ke');
    $tunjangan = $this->input->post('tunjangan');

    $data = array(
      'nip_pas' => $nip,
      'nama_suami_istri' => $nama,
      'tempt_lhr_suami_istri' => $tmpt,
      'tgl_lhr_suami_istri' => $tgl,
      'tgl_nikah' => $nikah,
      'akta_nikah' => $istri_ke,
      'tunjangan_nikah' => $tunjangan
    );

    $where = array('id_nikah' => $id);
    $this->riwayat_M->aksi_ed($where,$data,'data_suami_istri');
    redirect('pegawai');
  }

  public function up_pend($id){
    $where = array('id_pendidikan' => $id);
    $data['id'] = $this->riwayat_M->update($where,'data_pendidikan')->result();
    $this->load->view('page/edit/e_pendidikan',$data);
  }

  public function ak_pendidikan(){
    $id = $this->input->post('id');
    $nip = $this->input->post('nip');
    $tingkat = $this->input->post('tingkat');
    $nama_sek = $this->input->post('nama_sek');
    $lok_sek = $this->input->post('lok_sek');
    $jurusan = $this->input->post('jurusan');
    $tgl_ijasah = $this->input->post('tgl_ijasah');
    $no_ijasah = $this->input->post('no_ijasah');
    $kepsek = $this->input->post('kepsek');
    $gel_depan = $this->input->post('gel_depan');
    $gel_belakang = $this->input->post('gel_belakang');
    $pertama = $this->input->post('pertama');

  $data = array(
    'nip' => $nip,
    'tingkat' => $tingkat,
    'sekolah_pt' => $nama_sek,
    'alamat_sek' => $lok_sek,
    'jurusan' => $jurusan,
    'tgl_ijasah' => $tgl_ijasah,
    'no_ijasah' => $no_ijasah,
    'kepsek' => $kepsek,
    'gel_depan' => $gel_depan,
    'gel_belakang' => $gel_belakang,
    'pertama' => $pertama
  );

  $where = array('id_pendidikan' => $id);
  $this->riwayat_M->aksi_ed($where,$data,'data_pendidikan');
  redirect('pegawai');
  }

  public function hapus_or($id){
    $where = array('id_ortu' => $id);
    $this->user_model->hapus($where,'data_ortu');
    redirect('pegawai');
  }

  public function hapus_an($id){
    $where = array('id_anak' => $id);
    $this->user_model->hapus($where,'data_anak');
    redirect('pegawai');
  }
  public function hapus_pen($id){
    $where = array('id_pendidikan' => $id);
    $this->user_model->hapus($where,'data_pendidikan');
    redirect('pegawai');
  }

  public function hapus_pas($id){
    $where = array('id_nikah' => $id);
    $this->user_model->hapus($where,'data_suami_istri');
    redirect('pegawai');
  }

  public function lapor($nip){
    $where = array('profil_pegawai.nip' => $nip);
      $data1['nip'] = $this->riwayat_M->laporan($where)->result();
      $this->load->view('page/riwayat/lapor',$data1);
  }


}
