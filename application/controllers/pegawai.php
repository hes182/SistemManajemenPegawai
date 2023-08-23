<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class pegawai extends CI_Controller{
    public function __construct(){
      parent::__construct();
      $this->load->model('pegawai_M');
      $this->load->library('excel');
    }

    public function index(){
      $data['all'] = $this->pegawai_M->get_All();
      $this->load->view('page/pegawai/data_pegawai',$data);
    }


    public function insert(){
      $this->load->view('page/pegawai/add');
    }

    public function save(){
      $config['upload_path'] = FCPATH.'upload';
      $config['allowed_types'] = "jpg|png|jpeg";
      $config['max_size'] = '2048';
      $config['remove_space'] = TRUE;
      $config['overwrite'] = TRUE;

        $this->load->library('upload');
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');
        $finfo = $this->upload->data('file_name');
        $nama_foto = $finfo;

        $nip = $this->input->post('nip');
        $nama = $this->input->post('nama');
        $jenkel = $this->input->post('jenkel');
        $agama = $this->input->post('agama');
        $tmpt_lhr = $this->input->post('tmp_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $gol_darah = $this->input->post('darah');
        $pendidikan = $this->input->post('pendidikan');
        $gel_depan = $this->input->post('gel_depan');
        $gel_bel = $this->input->post('gel_belakang');

        $sk_cpns = $this->input->post('sk_cpns');
        $tgl_sk_cpns = $this->input->post('tgl_sk_cpns');
        $tmt_sk_cpns = $this->input->post('tmt_sk_cpns');
        $golruangcpns = $this->input->post('gol_cpns');

        $sk_pns = $this->input->post('sk_pns');
        $tgl__sk_pns = $this->input->post('tgl_sk_pns');
        $tmt_sk_pns = $this->input->post('tmt_sk_pns');
        $golruangpns = $this->input->post('gol_pns');

        $sumpah = $this->input->post('sumpah');
        $thn_smph = $this->input->post('thn_sumpah');
        $sk_golterakhir = $this->input->post('sk_gol_terakhir');
        $tgl_gol_terakhir = $this->input->post('tgl_gol_terakhir');
        $tmt_sk_gol_terakhir = $this->input->post('tmt_gol_terakhir');
        $golruang_terakhir = $this->input->post('gol_terakhir');
        $kedudukan = $this->input->post('kedudukan');
        $jenis_pegawai = $this->input->post('jenis_pegawai');
        $unit_kerja = $this->input->post('unit');
        $sub_unit = $this->input->post('sub_unit');

        $jenis_jabatan = $this->input->post('jenis_jab');
        $nama_jabatan = $this->input->post('nama_jab');
        $jenjang_jabatan = $this->input->post('jenjang_jab');
        $eselon = $this->input->post('eselon');
        $sk_jab_terakhir = $this->input->post('sk_jab_terakhir');
        $tgl_sk_jab_terakhir = $this->input->post('tgl_sk_jab_terakhir');

        $nik = $this->input->post('nik');
        $npwp = $this->input->post('npwp');
        $karpeg = $this->input->post('karpeg');
        $karis = $this->input->post('karis');
        $taspen = $this->input->post('taspen');
        $hp = $this->input->post('no_hp');
        $email = $this->input->post('email');
        $bank = $this->input->post('bank');
        $akses = $this->input->post('akses');

        $data1 = array(
          'nip' => $nip,
          'nama_pegawai' => $nama,
          'jenkel' => $jenkel,
          'agama' => $agama,
          'tempat_lahir' => $tmpt_lhr,
          'tanggal_lahir' => $tgl_lahir,
          'alamat' => $alamat,
          'gol_darah' => $gol_darah,
          'pendidikan' => $pendidikan,
          'gelar_depan' => $gel_depan,
          'gelar_belakang' => $gel_bel,
          'image' => $nama_foto
        );

        $data2 = array(
          'nip' => $nip,
          'sk_cpns' => $sk_cpns,
          'tgl_sk_cpns' => $tgl_sk_cpns,
          'tmt_cpns' => $tmt_sk_cpns,
          'gol_ruang_cpns' => $golruangcpns,
          'sk_pns' => $sk_pns,
          'tgl_sk_pns' => $tgl__sk_pns,
          'tmt_pns' => $tmt_sk_pns,
          'gol_ruang_pns' => $golruangpns,
          'sumpah' => $sumpah,
          'thn_sumpah' => $thn_smph,
          'sk_gol_terakhir' => $sk_golterakhir,
          'tgl_sk_gol_terakhir' => $tgl_gol_terakhir,
          'tmt_sk_gol_terakhir' => $tmt_sk_gol_terakhir,
          'gol_ruang_terakhir' => $golruang_terakhir,
          'kedudukan' => $kedudukan,
          'jenis_pegawai' => $jenis_pegawai,
          'unit_kerja' => $unit_kerja,
          'sub_unit' => $sub_unit
        );

        $data3 = array(
          'nip' => $nip,
          'jenis_jab' => $jenis_jabatan,
          'nama_jab' => $nama_jabatan,
          'jenjang_jab' => $jenjang_jabatan,
          'eselon' => $eselon,
          'sk_jab_terakhir' => $sk_jab_terakhir,
          'tgl_sk_jab_terakhir' => $tgl_sk_jab_terakhir
        );

        $data4 = array(
          'nip' => $nip,
          'nik' => $nik,
          'npwp' => $npwp,
          'karpeg' => $karpeg,
          'karis_karsu' => $karis,
          'akses' => $akses,
          'taspen' => $taspen,
          'no_hp' => $hp,
          'email' => $email,
          'bank' => $bank
        );

        $this->pegawai_M->insert_pegawai($data4,'data_lain');
        $this->pegawai_M->insert_pegawai($data3,'data_jabatan');
        $this->pegawai_M->insert_pegawai($data2,'data_pegawai');
        $this->pegawai_M->insert_pegawai($data1,'profil_pegawai');

        redirect('pegawai');

    }

    public function info($nip){
      $where = array('profil_pegawai.nip' => $nip);
        $data1['nip'] = $this->pegawai_M->detail($where)->result();
        $this->load->view('page/pegawai/info_pegawai',$data1);

    }

    public function up($nip){
      $where = array('profil_pegawai.nip'=>$nip);
      $data['nip'] = $this->pegawai_M->detail($where)->result();
      $this->load->view('page/pegawai/update',$data);
    }

    public function laporan(){
      $data['all'] = $this->pegawai_M->get_All();
      $this->load->view('page/pegawai/laporan',$data);

  }

  public function aksi_up(){
    $config['upload_path'] = FCPATH.'upload';
    $config['allowed_types'] = "jpg|png|jpeg";
    $config['max_size'] = '2048';
    $config['remove_space'] = TRUE;
    $config['overwrite'] = TRUE;

      $this->load->library('upload');
      $this->upload->initialize($config);
      $this->upload->do_upload('gambar');
      $finfo = $this->upload->data('file_name');
      $nama_foto = $finfo;

      $nip = $this->input->post('nip');
      $nama = $this->input->post('nama');
      $jenkel = $this->input->post('jenkel');
      $agama = $this->input->post('agama');
      $tmpt_lhr = $this->input->post('tmp_lahir');
      $tgl_lahir = $this->input->post('tgl_lahir');
      $alamat = $this->input->post('alamat');
      $gol_darah = $this->input->post('darah');
      $pendidikan = $this->input->post('pendidikan');
      $gel_depan = $this->input->post('gel_depan');
      $gel_bel = $this->input->post('gel_belakang');
      $ganti_foto = $this->input->post('ubah');

      $sk_cpns = $this->input->post('sk_cpns');
      $tgl_sk_cpns = $this->input->post('tgl_sk_cpns');
      $tmt_sk_cpns = $this->input->post('tmt_sk_cpns');
      $golruangcpns = $this->input->post('gol_cpns');

      $sk_pns = $this->input->post('sk_pns');
      $tgl__sk_pns = $this->input->post('tgl_sk_pns');
      $tmt_sk_pns = $this->input->post('tmt_sk_pns');
      $golruangpns = $this->input->post('gol_pns');

      $sumpah = $this->input->post('sumpah');
      $thn_smph = $this->input->post('thn_sumpah');
      $sk_golterakhir = $this->input->post('sk_gol_terakhir');
      $tgl_gol_terakhir = $this->input->post('tgl_gol_terakhir');
      $tmt_sk_gol_terakhir = $this->input->post('tmt_gol_terakhir');
      $golruang_terakhir = $this->input->post('gol_terakhir');
      $kedudukan = $this->input->post('kedudukan');
      $jenis_pegawai = $this->input->post('jenis_pegawai');
      $unit_kerja = $this->input->post('unit');
      $sub_unit = $this->input->post('sub_unit');

      $jenis_jabatan = $this->input->post('jenis_jab');
      $nama_jabatan = $this->input->post('nama_jab');
      $jenjang_jabatan = $this->input->post('jenjang_jab');
      $eselon = $this->input->post('eselon');
      $sk_jab_terakhir = $this->input->post('sk_jab_terakhir');
      $tgl_sk_jab_terakhir = $this->input->post('tgl_sk_jab_terakhir');

      $nik = $this->input->post('nik');
      $npwp = $this->input->post('npwp');
      $karpeg = $this->input->post('karpeg');
      $karis = $this->input->post('karis');
      $taspen = $this->input->post('taspen');
      $hp = $this->input->post('no_hp');
      $email = $this->input->post('email');
      $bank = $this->input->post('bank');
      $akses = $this->input->post('akses');

      $where = array('nip'=>$nip);

      if (isset($ganti_foto)) {
        $data1 = array(
          'nama_pegawai' => $nama,
          'jenkel' => $jenkel,
          'agama' => $agama,
          'tempat_lahir' => $tmpt_lhr,
          'tanggal_lahir' => $tgl_lahir,
          'alamat' => $alamat,
          'gol_darah' => $gol_darah,
          'pendidikan' => $pendidikan,
          'gelar_depan' => $gel_depan,
          'gelar_belakang' => $gel_bel,
          'image' => $nama_foto
        );

        $data2 = array(
          'sk_cpns' => $sk_cpns,
          'tgl_sk_cpns' => $tgl_sk_cpns,
          'tmt_cpns' => $tmt_sk_cpns,
          'gol_ruang_cpns' => $golruangcpns,
          'sk_pns' => $sk_pns,
          'tgl_sk_pns' => $tgl__sk_pns,
          'tmt_pns' => $tmt_sk_pns,
          'gol_ruang_pns' => $golruangpns,
          'sumpah' => $sumpah,
          'thn_sumpah' => $thn_smph,
          'sk_gol_terakhir' => $sk_golterakhir,
          'tgl_sk_gol_terakhir' => $tgl_gol_terakhir,
          'tmt_sk_gol_terakhir' => $tmt_sk_gol_terakhir,
          'gol_ruang_terakhir' => $golruang_terakhir,
          'kedudukan' => $kedudukan,
          'jenis_pegawai' => $jenis_pegawai,
          'unit_kerja' => $unit_kerja,
          'sub_unit' => $sub_unit
        );

        $data3 = array(
          'jenis_jab' => $jenis_jabatan,
          'nama_jab' => $nama_jabatan,
          'jenjang_jab' => $jenjang_jabatan,
          'eselon' => $eselon,
          'sk_jab_terakhir' => $sk_jab_terakhir,
          'tgl_sk_jab_terakhir' => $tgl_sk_jab_terakhir
        );

        $data4 = array(
          'nik' => $nik,
          'npwp' => $npwp,
          'karpeg' => $karpeg,
          'karis_karsu' => $karis,
          'akses' => $akses,
          'taspen' => $taspen,
          'no_hp' => $hp,
          'email' => $email,
          'bank' => $bank
        );
        $this->pegawai_M->ak_up($where,$data1,'profil_pegawai');
        $this->pegawai_M->ak_up($where,$data2,'data_pegawai');
        $this->pegawai_M->ak_up($where,$data3,'data_jabatan');
        $this->pegawai_M->ak_up($where,$data4,'data_lain');
        redirect('pegawai');
      }else {
        $data1 = array(
          'nama_pegawai' => $nama,
          'jenkel' => $jenkel,
          'agama' => $agama,
          'tempat_lahir' => $tmpt_lhr,
          'tanggal_lahir' => $tgl_lahir,
          'alamat' => $alamat,
          'gol_darah' => $gol_darah,
          'pendidikan' => $pendidikan,
          'gelar_depan' => $gel_depan,
          'gelar_belakang' => $gel_bel
        );

        $data2 = array(
          'sk_cpns' => $sk_cpns,
          'tgl_sk_cpns' => $tgl_sk_cpns,
          'tmt_cpns' => $tmt_sk_cpns,
          'gol_ruang_cpns' => $golruangcpns,
          'sk_pns' => $sk_pns,
          'tgl_sk_pns' => $tgl__sk_pns,
          'tmt_pns' => $tmt_sk_pns,
          'gol_ruang_pns' => $golruangpns,
          'sumpah' => $sumpah,
          'thn_sumpah' => $thn_smph,
          'sk_gol_terakhir' => $sk_golterakhir,
          'tgl_sk_gol_terakhir' => $tgl_gol_terakhir,
          'tmt_sk_gol_terakhir' => $tmt_sk_gol_terakhir,
          'gol_ruang_terakhir' => $golruang_terakhir,
          'kedudukan' => $kedudukan,
          'jenis_pegawai' => $jenis_pegawai,
          'unit_kerja' => $unit_kerja,
          'sub_unit' => $sub_unit
        );

        $data3 = array(
          'jenis_jab' => $jenis_jabatan,
          'nama_jab' => $nama_jabatan,
          'jenjang_jab' => $jenjang_jabatan,
          'eselon' => $eselon,
          'sk_jab_terakhir' => $sk_jab_terakhir,
          'tgl_sk_jab_terakhir' => $tgl_sk_jab_terakhir
        );

        $data4 = array(
          'nik' => $nik,
          'npwp' => $npwp,
          'karpeg' => $karpeg,
          'karis_karsu' => $karis,
          'akses' => $akses,
          'taspen' => $taspen,
          'no_hp' => $hp,
          'email' => $email,
          'bank' => $bank
        );
        $this->pegawai_M->ak_up($where,$data1,'profil_pegawai');
        $this->pegawai_M->ak_up($where,$data2,'data_pegawai');
        $this->pegawai_M->ak_up($where,$data3,'data_jabatan');
        $this->pegawai_M->ak_up($where,$data4,'data_lain');
        redirect('pegawai');
      }
  }

  public function del($nip){
    $where = array('nip'=>$nip);
    $this->pegawai_M->del_ak($where,'profil_pegawai');
    $this->pegawai_M->del_ak($where,'data_lain');
    $this->pegawai_M->del_ak($where,'data_jabatan');
    $this->pegawai_M->del_ak($where,'data_pegawai');
    redirect('pegawai');
  }

}

 ?>
