<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class riwayat_M extends CI_Model{

    public function add_ak($data,$table){
      $this->db->insert($table,$data);
    }

    public function view_riwayat($where,$table){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($where);
      return $this->db->get();
    }

    public function update($where,$table){
      return $this->db->get_where($table,$where);
    }

    public function aksi_ed($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function laporan($where){

      $this->db->select('*');
      $this->db->from(
        'profil_pegawai'
      );
      $this->db->join('data_pegawai','data_pegawai.nip=profil_pegawai.nip');
      $this->db->join('data_jabatan','data_jabatan.nip=profil_pegawai.nip');
      $this->db->join('data_lain','data_lain.nip=profil_pegawai.nip');    
      $this->db->where($where);
      return $this->db->get_where();

    }

  }

 ?>
