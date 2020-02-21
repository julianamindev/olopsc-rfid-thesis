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
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['msg'] = "";

		if(isset($_SESSION['username'])){
			//$this->load->model('users_model');
			//$result = $this->users_model->getUserByUsername($this->session->userdata('username'));
			$sessiondata = $this->getSessionData();


		}
		$data=array_merge($sessiondata, $data);
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);


		$this->load->view('account_view',$data);

	}


	public function update()
	{

		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		
		$data['user'] = array();
		$data['page'] = "account";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['msg'] = "";
		$sessiondata = array();
		$this->load->model('users_model');

	
		$sessiondata = $this->getSessionData();
		//$data=array_merge($sessiondata, $data);
		
		if(isset($_POST['submit'])){

			$id = $this->input->post('id');
			$formdata['username'] = $this->input->post('username') != "" ?$this->input->post('username') : "";
			$formdata['password'] =$this->input->post('password') != "" ? $this->input->post('password') : "";
			$formdata['firstname'] =$this->input->post('firstname') != "" ? $this->input->post('firstname') : "";
			$formdata['middlename'] = $this->input->post('middlename')!= "" ? $this->input->post('middlename') : "";
			$formdata['lastname'] = $this->input->post('lastname') != "" ? $this->input->post('lastname') : "";
			$formdata['id_image'] = $this->do_upload();
			$result = $this->users_model->updateAdmin($id,$formdata);

			if($result && !empty($formdata['id_image'])){
				$resultuser = $this->users_model->getUserById($id);		
				$this->session->set_userdata($resultuser);
				$sessiondata = $this->getSessionData();
				
				$data['msg'] = "<span style='color:#4c9447'>Successfully save!</span>";

			}else{
			    $data['msg'] = "<span style='color:red'>Error, Administrator cannot be save!</span>";
			}	
			
		}
		$data=array_merge($sessiondata, $data);
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('account_view',$data);

	}

	public function getSessionData(){


		$data['id'] = $this->session->userdata('id') != "" ? $this->session->userdata('id') : 0;
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

		return $data;
		
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
						print_r($error);exit();
						return false;
				}
				
				return $this->upload->data('file_name');
	

	
	}


}
