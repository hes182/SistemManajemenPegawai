<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model{

 private $_table = "user";

 public $id_user;
 public $username;
 public $nama;

 public function rules(){
   return[
     ['field' => 'id user',
      'label' => 'Id User',
      'rules' => 'require'],

      ['field' => 'username',
       'label' => 'Username',
       'rules' => 'require'],

       ['field' => 'nama_user',
        'label' => 'Nama User',
        'rules' => 'require']
   ];
 }

 public function getAll(){
   return $this->db->get($this->_table)->result();
 }

 public function insert_user($data,$table){
   $this->db->insert($table,$data);
 }

 public function update($where,$table){
   return $this->db->get_where($table,$where);
 }

 public function action_up($where,$data,$table){
   $this->db->where($where);
   $this->db->update($table,$data);
 }

 public function hapus($where,$table){
   $this->db->where($where);
   $this->db->delete($table);
 }

 public function jumlah(){
   $this->db->select('COUNT(nip) AS total');
   $query = $this->db->get('profil_pegawai');
   if ($query->num_rows()>0) {
     return $query->row()->total;
   }else {
     return 0;
   }
 }

}

  ?>
