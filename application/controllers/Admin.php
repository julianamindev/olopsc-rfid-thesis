<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$data['page'] = "admin";
		$this->load->model('users_model');
		$result = $this->users_model->getUserAdmin();
		$data['admin'] = $result;

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('admin_view',$data);

	}

	public function add()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}

		$data['msg'] = "";
		$data['page'] = "admin";
		$this->load->model('users_model');


		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['username'] = $this->input->post('username');
			$formdata['password'] = $this->input->post('password');
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			$formdata['isadmin'] = 1;
			$result = $this->users_model->addAdmin($formdata);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Administrator successfully added!</span>";

			}else{
			    $data['msg'] = "<span style='color:red'>Error, Administrator cannot be save!</span>";
			}	
				
		}



		$result = $this->users_model->getUserAdmin();
		$data['admin'] = $result;

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('admin_view',$data);

	}
}
