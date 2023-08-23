<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->model("user_model");
  }

  public function index(){
    $data['user'] = $this->user_model->getAll();
    $this->load->view("page/user/user",$data);
  }

  public function V_tambah(){
    $this->load->view('page/user/tambah');
  }

  public function tambah(){
    if (isset($_POST['tambah'])) {
      $username = $this->input->post('username');
      $password = MD5($this->input->post('password'));
      $nama = $this->input->post('nama');

      $data = array(
        'username' => $username,
        'password' => $password,
        'nama_user' => $nama
      );

      $this->user_model->insert_user($data,'user');
      redirect('user');
    }else {
      redirect('user');
    }
  }

  public function V_up($id){
    $where = array('id_user' => $id);
    if ($data['user'] =! $this->user_model->update($where,'user')->result()) {
        $this->load->view('page/user/error_404');
    }else {
      $data['user'] = $this->user_model->update($where,'user')->result();
        $this->load->view('page/user/update',$data);
    }

  }

  public function update(){
    if (isset($_POST['tambah'])) {
      $id = $this->input->post('id_user');
      $username = $this->input->post('username');
      $password = MD5($this->input->post('password'));
      $nama = $this->input->post('nama');

      $data = array(
        'username' => $username,
        'password' => $password,
        'nama_user' => $nama
      );
      $where = array(
        'id_user' => $id
      );
      $this->user_model->action_up($where,$data,'user');
      redirect('user');
    }else {
      redirect('user');
    }
  }

  public function del($id){
    $where = array('id_user' => $id);
    $this->user_model->hapus($where,'user');
    redirect('user');
  }

}
 ?>
