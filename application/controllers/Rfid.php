<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rfid extends CI_Controller {

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

		$data['msg'] = "";
		$data['page'] = "rfid";
		$this->load->model('rfid_model');
		$result = $this->rfid_model->getAllRfid();
		$data['rfid'] = $result;

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('rfid_view',$data);

	}

	public function add()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}

		$this->load->model('rfid_model');
		$data['msg'] = "";
		$data['page'] = "rfid";

		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['rfid_number'] = $this->input->post('rfid_number');
			$formdata['status']  = 0;
			$result = $this->rfid_model->addRfid($formdata);

			if($result){
				$data['msg'] = "<span style='color:#4c9447'>Rfid successfully added!</span>";
			}else{
				$data['msg'] = "<span style='color:red'>Error! Rfid cannot be save!</span>";
			}	
				
		}

		$this->load->model('rfid_model');
		$result = $this->rfid_model->getAllRfid();
		$data['rfid'] = $result;


		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('rfid_view',$data);

	}


}
