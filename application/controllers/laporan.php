<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class laporan extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model('riwayat_M');
  }

  public function lap_ortu($nip){
    $where = array('nip_ortu' => $nip);
    $data['nip'] = $this->riwayat_M->update($where,'data_ortu')->result();
    $this->load->view('page/lap/ortu',$data);
  }

  public function lap_anak($nip){
    $where = array('nip_anak' => $nip);
    $data['nip'] = $this->riwayat_M->update($where,'data_anak')->result();
    $this->load->view('page/lap/anak',$data);
  }

  public function lap_pas($nip){
    $where = array('nip_pas' => $nip);
    $data['nip'] = $this->riwayat_M->update($where,'data_suami_istri')->result();
    $this->load->view('page/lap/pasutri',$data);
  }

  public function lap_pend($nip){
    $where = array('nip' => $nip);
    $data['nip'] = $this->riwayat_M->update($where,'data_pendidikan')->result();
    $this->load->view('page/lap/pendidikan',$data);
  }

}
