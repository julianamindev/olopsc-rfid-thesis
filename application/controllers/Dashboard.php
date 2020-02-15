<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('dashboard_view',$data);

	}

	public function add()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$data['msg'] = "";
		$data['page'] = "dashboard";

		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['student_no'] = $this->input->post('student_no');
			$formdata['username'] = substr($this->input->post('firstname'),0,1).$this->input->post('lastname');
			$formdata['password'] = $this->input->post('student_no');
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			$formdata['course'] = $this->input->post('course');
			$formdata['ordinal_year'] = $this->input->post('ordinal_year');
			$formdata['ref_rfid'] = $this->input->post('rfid_number');
			$formdata['isadmin'] = 0;
			$result = $this->student_model->addStudent($formdata);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Student successfully added!</span>";
				$rfiddate = array();
				$rfiddate['status'] = 1;
				$this->rfid_model->updateRfid($this->input->post('rfid_number'),$rfiddate);
			}else{
			    $data['msg'] = "<span style='color:red'>Error, Student cannot be save!</span>";
			}	
				
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

		


		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('dashboard_view',$data);

	}


}
