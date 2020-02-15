<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neutral extends CI_Controller {

	public function index()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}

		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$result = $this->student_model->getAllStudent();
		$result2 = $this->course_model->getAllCourse();
		$result3 = $this->rfid_model->getAllRfidInactive();
		$data['student'] = $result;
		$data['course'] = $result2;
		$data['rfid'] = $result3;
		$data['msg'] = "";
		$data['page'] = "dashboard";

		$data['header'] = $this->load->view('default-header.php', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('neutral_view',$data);
	}

}
