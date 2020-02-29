<?php
defined('BASEPATH') OR exit('No direct script access allowed');
define("ERR_STUD_REGISTERED", "Student number is already registered.");
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
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['id_image_h'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "pexels-photo-220453.png";

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
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['id_image_h'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "pexels-photo-220453.png";

		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['student_no'] = $this->input->post('student_no');
			//$formdata['username'] = substr($this->input->post('firstname'),0,1).$this->input->post('lastname');
			$formdata['username'] = $this->input->post('student_no');
			$formdata['password'] = $this->input->post('student_no');
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			$formdata['course'] = $this->input->post('course');
			$formdata['ordinal_year'] = $this->input->post('ordinal_year');
			$formdata['ref_rfid'] = $this->input->post('rfid_number');

			if($_FILES['id_image']['name']){
				$formdata['id_image'] = $this->do_upload();
			}	
			
			
			$formdata['isadmin'] = 0;
			$result = $this->student_model->addStudent($formdata);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Student successfully added!</span>";
				$rfiddate = array();
				$rfiddate['status'] = 1;
				$this->rfid_model->updateRfid($this->input->post('rfid_number'),$rfiddate);
			}else{
			    $data['msg'] = "<span style='color:red'>" . constant("ERR_STUD_REGISTERED") . "</span>";
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



	public function edit()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$data['msg'] = "";
		$data['page'] = "dashboard";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['id_image_h'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "pexels-photo-220453.png";
		$user_id = $this->uri->segment(3, 0);

		$data['form'] = $this->student_model->getStudentById($user_id);	

		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			$formdata['course'] = $this->input->post('course');
			$formdata['ordinal_year'] = $this->input->post('ordinal_year');

			if($_FILES['id_image']['name']){
				$formdata['id_image'] = $this->do_upload();
			}	
			
			if($this->input->post('ref_rfid') != ""){

				$formdata['ref_rfid'] = $this->input->post('ref_rfid');

			}

			$formdata['ordinal_year'] = $this->input->post('ordinal_year');
			$result = $this->student_model->updateStudent($this->input->post('id'),$formdata);

			$data['form'] = $this->student_model->getStudentById($this->input->post('id'));	
			//print_r($result);exit();

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Student successfully edited!</span>";

				
					if($this->input->post('ref_rfid') != ""){

							//update new rfid
							$rfiddate = array();
							$rfiddate['status'] = 1;
							$this->rfid_model->updateRfid($this->input->post('ref_rfid'),$rfiddate);
		
						//update OLD rfid
						$rfiddate = array();
						$rfiddate['status'] = 0;
						$this->rfid_model->updateRfid($this->input->post('old_ref_rfid'),$rfiddate);

					}





			}else{
			    $data['msg'] = "<span style='color:red'>" . constant("ERR_STUD_REGISTERED") . "</span>";
			}	
				
		}

		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$result2 = $this->course_model->getAllCourse();
		$result3 = $this->rfid_model->getAllRfidInactive();
		$data['course'] = $result2;
		$data['rfid'] = $result3;

	
	
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);

		$this->load->view('dashboard_edit',$data);

	}


	public function delete()
	{

	
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$data['msg'] = "";
		$data['page'] = "dashboard";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['id_image_h'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "pexels-photo-220453.png";
		$user_id = $this->uri->segment(3, 0);

		$data['form'] = $this->student_model->getStudentById($user_id);	

		if(isset($_POST['submit'])){

			$formdata =array();
			$id = $this->input->post('id');
			$ref_rfid = $this->input->post('ref_rfid');
			$result = $this->student_model->deleteStudent($id,$ref_rfid);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Administrator successfully deleted!</span>";
				redirect('/dashboard');

			}else{
			    $data['msg'] = "<span style='color:red'>Error, Administrator cannot be delete!</span>";
			}	
				
				
		}

		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$result2 = $this->course_model->getAllCourse();
		$result3 = $this->rfid_model->getAllRfidInactive();
		$data['course'] = $result2;
		$data['rfid'] = $result3;

	
	
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);

		$this->load->view('dashboard_delete',$data);

	}


	public function restore()
	{

	
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		$this->load->model('student_model');
		$this->load->model('course_model');
		$this->load->model('rfid_model');
		$data['msg'] = "";
		$data['page'] = "dashboard";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['id_image_h'] = $this->session->userdata('id_image') != "" ? $this->session->userdata('id_image') : "pexels-photo-220453.png";
		$user_id = $this->uri->segment(3, 0);

		$data['form'] = $this->student_model->getStudentById($user_id);	

		if(isset($_POST['submit'])){

			$formdata['password'] = $this->input->post('student_no');
			$result = $this->student_model->updateStudentPassword($this->input->post('student_no'),$formdata);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Password successfully restored!</span>";
				$data['form'] = $this->student_model->getStudentById($this->input->post('id'));	

			}else{
			    $data['msg'] = "<span style='color:red'>Error, password cannot be restore.</span>";
			}	
				
				
		}
		

	
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);

		$this->load->view('dashboard_restore',$data);

	}



	
	public function do_upload()
 	{

                $config['upload_path']          = './assets/img/';
				$config['allowed_types']        = 'gif|jpg|png';
				$config['max_size']     = '100';
				$config['max_width'] = '1024';
				$config['max_height'] = '768';

				$this->upload->initialize($config);



                if ( ! $this->upload->do_upload('id_image'))
                {
						$error = array('error' => $this->upload->display_errors());
					//	print_r($error);exit();
						return false;
				}
				
				return $this->upload->data('file_name');
	

	
	}




}
