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
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
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
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$this->load->model('users_model');


		if(isset($_POST['submit'])){

			$formdata =array();
			$formdata['username'] = $this->input->post('username');
			$formdata['password'] = $this->input->post('password');
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			//$formdata['id_image'] = $this->do_upload();
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


	public function edit()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}

		$data['msg'] = "";
		$data['page'] = "admin";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$this->load->model('users_model');
		$user_id = $this->uri->segment(3, 0);
		$datauser = $this->users_model->getUserById($user_id);		


		if(isset($_POST['submit'])){

			$formdata =array();
			$id = $this->input->post('id');
			$formdata['username'] = $this->input->post('username');
			$formdata['password'] = $this->input->post('password');
			$formdata['firstname'] = $this->input->post('firstname');
			$formdata['middlename'] = $this->input->post('middlename');
			$formdata['lastname'] = $this->input->post('lastname');
			//$formdata['id_image'] = $this->do_upload();
			$result = $this->users_model->updateAdmin($id,$formdata);
			$datauser = $this->users_model->getUserById($id);	

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Administrator successfully edit!</span>";

			}else{
			    $data['msg'] = "<span style='color:red'>Error, Administrator cannot be save!</span>";
			}	
				
		}

		$data = array_merge($datauser,$data);
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		

		$this->load->view('admin_edit',$data);

	}

	public function delete()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}

		$data['msg'] = "";
		$data['page'] = "admin";
		$data['search_url'] = "calendar/search";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$this->load->model('users_model');
		$user_id = $this->uri->segment(3, 0);
		$datauser = $this->users_model->getUserById($user_id);		


		if(isset($_POST['submit'])){

			$formdata =array();
			$id = $this->input->post('id');
			$result = $this->users_model->deleteAdmin($id);

			if($result){

				$data['msg'] = "<span style='color:#4c9447'>Administrator successfully deleted!</span>";
				redirect('/admin');

			}else{
			    $data['msg'] = "<span style='color:red'>Error, Administrator cannot be delete!</span>";
			}	
				
		}

		$data = array_merge($datauser,$data);
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		

		$this->load->view('admin_delete',$data);

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
