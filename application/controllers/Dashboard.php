<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('user_model');
    }

	public function index()
	{
    $data['total'] = $this->user_model->jumlah();
		if($this->admin->logged_id())
		{
      $this->load->view("template/head");
      $this->load->view("template/nav");
			$this->load->view("dashboard",$data);
      $this->load->view("template/footer");
      $this->load->view("template/und");

		}else{

			//jika session belum terdaftar, maka redirect ke halaman login
			redirect("login");

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

}
