<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class riwayat extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('pegawai_M');
      $this->load->model('riwayat_M');
    }

    public function view($nip){
        $where = array('nip_ortu' => $nip);
        $data2['nip'] = $this->riwayat_M->view_riwayat($where,'data_ortu')->result();
        $this->load->view('page/riwayat/data_ortu',$data2);
    }

    public function view_anak($nip){
        $where = array('nip_anak' => $nip);
        $data['nip'] = $this->riwayat_M->view_riwayat($where,'data_anak')->result();
        $this->load->view('page/riwayat/data_anak',$data);
    }

    public function view_suami_istri($nip){
        $where = array('nip_pas' => $nip);
        $data['nip'] = $this->riwayat_M->view_riwayat($where,'data_suami_istri')->result();
        $this->load->view('page/riwayat/data_suami_istri',$data);
    }

    public function view_pendidikan($nip){
        $where = array('nip' => $nip);
        $data['nip'] = $this->riwayat_M->view_riwayat($where,'data_pendidikan')->result();
        $this->load->view('page/riwayat/data_pendidikan',$data);
    }

    public function add_ortu($nip){
      $where = array('profil_pegawai.nip'  => $nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/riwayat/ortu',$data);
    }

    public function add_anak($nip){
      $where = array('profil_pegawai.nip'  => $nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/riwayat/anak',$data);
    }

    public function add_suami_istri($nip){
      $where = array('profil_pegawai.nip' => $nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/riwayat/suami_istri',$data);
    }

    public function add_pendidikan($nip){
      $where = array('profil_pegawai.nip' => $nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/riwayat/pendidikan',$data);
    }

    public function ortu_tambah(){
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

      $this->riwayat_M->add_ak($data,'data_ortu');
        $where = array('profil_pegawai.nip' => $nip);
        $data['nip'] = $this->pegawai_M->detail($where)->result();
        $this->load->view('page/pegawai/info_pegawai',$data);
    }

    public function anak_tambah(){
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

      $this->riwayat_M->add_ak($data,'data_anak');
        $where = array('profil_pegawai.nip' => $nip);
        $data['nip'] = $this->pegawai_M->detail($where)->result();
        $this->load->view('page/pegawai/info_pegawai',$data);
    }

    function tambah_suami_istri(){
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

      $this->riwayat_M->add_ak($data,'data_suami_istri');
        $where = array('profil_pegawai.nip' => $nip);
        $data['nip'] = $this->pegawai_M->detail($where)->result();
        $this->load->view('page/pegawai/info_pegawai',$data);
    }

    public function pendidikan_add(){
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

      $this->riwayat_M->add_ak($data,'data_pendidikan');
      $where = array('profil_pegawai.nip' => $nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/pegawai/info_pegawai',$data);

      }

  }

 ?>
