<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		if($this->session->has_userdata('username')){
			redirect('/dashboard');
		}

		//
		//print_r($this->users_model->getAllUser());

		$data['error'] = "";
		$data['page'] = "login";
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('login_view',$data);

	}


	public function validate()
	{
		$this->load->model('users_model');
		$data['error'] = "";
		$data['page'] = "login";
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);

		if(isset($_POST['submit'])){
		
			$result = $this->users_model->validateUser($this->input->post());
			if(count($result)){
				$this->session->set_userdata($result);
				
				if($result['isadmin'] > 0){
					redirect('/dashboard');
				}else{

					
					$data['s-name'] = $result['firstname']." ".$result['middlename']." ".$result['lastname'];
					$data['s-student_no'] = $result['student_no'];
					$data['s-id'] = $result['id'];
					$data['s-course'] = $result['name'];
					$data['s-id_image'] = $result['id_image'];
					$this->session->set_userdata($data);
					redirect('/calendar');
				}

				
			}

			$data['error'] = "Invalid username or password!";
			
		}else{
			$data['error'] = "Invalid username or password!";

		}

		$this->load->view('login_view',$data);
		

	}

}
