<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		
		$data['user'] = array();
		$data['page'] = "account";

		if(isset($_SESSION['username'])){
			//$this->load->model('users_model');
			//$result = $this->users_model->getUserByUsername($this->session->userdata('username'));
			$data['username'] = $this->session->userdata('username') != "" ? $this->session->userdata('username') : "";
			$data['password'] = $this->session->userdata('password')!= "" ? $this->session->userdata('password') : "";
			$data['firstname'] = $this->session->userdata('firstname') != "" ? $this->session->userdata('firstname') : "";
			$data['middlename'] = $this->session->userdata('middlename') != "" ?$this->session->userdata('middlename') : "";
			$data['lastname'] = $this->session->userdata('lastname')  != "" ? $this->session->userdata('lastname') : "";
			$data['course'] = $this->session->userdata('course') != "" ? $this->session->userdata('course') : "";
			$data['ordinal_year'] =$this->session->userdata('ordinal_year') != "" ? $this->session->userdata('ordinal_year') : "";
			$data['semester'] =$this->session->userdata('semester') != "" ? $this->session->userdata('semester') : "";
			$data['id_image'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "";
			$data['ref_rfid'] = $this->session->userdata('ref_rfid') != "" ? $this->session->userdata('ref_rfid') : "";
			$data['isadmin'] = $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
			$data['email'] = $this->session->userdata('email') != "" ? $this->session->userdata('email') : "";

		}

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('account_view',$data);

	}
}
