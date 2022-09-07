<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('auth_model');
	// 	if(!$this->auth_model->current_user()){
	// 		redirect('auth/login');
	// 	}
	// }
	public function index()
	{
        $this->load->model('jadwal_model');
		// $this->load->model('feedback_model');
		$data2['poli'] =  $this->jadwal_model->get_poli();
		// $data['jadwal_dok'] = $this->jadwal_model->get_dokter(); 

		$this->load->view('jadwal.php', $data2);;
	}
    public function tampil()
	{
		$data = $this->input->post();
		$this->load->model('jadwal_model');
		$get_data = $this->jadwal_model->get_dokter(); 

		if($get_data->num_rows()==0){
			$data['result'] = $get_data->result();
			$this->load->view('jadwalkosong.php',$data);
		}else {
			$data['result'] = $get_data->result();
			$this->load->view('jadwaltampil.php', $data);
		}
	}
	
}