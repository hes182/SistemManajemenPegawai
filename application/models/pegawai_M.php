<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class pegawai_M extends CI_Model{

    public function insert_pegawai($data,$table){
      $this->db->insert($table,$data);
    }

    public function get_All(){
      $this->db->select('*');
      $this->db->from('profil_pegawai');
      $this->db->join('data_jabatan','data_jabatan.nip=profil_pegawai.nip');
      $this->db->join('data_pegawai','data_pegawai.nip=profil_pegawai.nip');
      $query = $this->db->get();
      return $query->result();
    }

    public function detail($where){
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

    public function ak_up($where,$data,$table){
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    public function del_ak($where,$table){
      $this->db->where($where);
      $this->db->delete($table);
    }

  }

 ?>
