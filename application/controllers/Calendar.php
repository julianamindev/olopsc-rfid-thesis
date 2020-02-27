<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

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
		$data['page'] = "calendar";
		$data['msg'] = "";
		$data['search_url'] = "calendar/search";

		$data['name'] =  $this->session->userdata('s-name') != "" ? $this->session->userdata('s-name') : "";
		$data['student_no'] = $this->session->userdata('s-student_no') != "" ? $this->session->userdata('s-student_no') : "";
		$data['course'] = $this->session->userdata('s-course') != "" ? $this->session->userdata('s-course') : "";
		$data['sid'] = $this->session->userdata('s-id') != "" ? $this->session->userdata('s-id') : "";
		$data['id_image'] = $this->session->userdata('s-id_image') != "" ? $this->session->userdata('s-id_image') : "pexels-photo-220453.png";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
		$this->load->view('calendar_view',$data);

	}



	public function getLog()
	{
		

		//print_r($this->input->post());exit();
		$this->load->model('student_model');
		$result = $this->student_model->getStudentLog($this->input->post('date'),$this->input->post('sid'));

	
		$html = "<table border='1' class='logtable'>";
		$html .= "<tr><td>Time in</td><td>Time out</td></tr>";
		

		if(count($result) > 0){

			$chunk = array_chunk($result, 2);

			foreach($chunk as $ch){

				$html .= "<tr>";
				foreach($ch as $logs){

					$html .= "<td>".date('h:i a ', strtotime($logs['time_in']))."</td>";
				
				}

				$html .= "</tr>";
					
			}
		
		}else{

			$html .= "<tr><td colspan='2'>No time log found.</td></tr>";

		}

		$html .= "</table>";

		echo $html;



	}




	public function search()
	{
		if(!$this->session->has_userdata('username')){
			redirect('/login');
		}
		$data['page'] = "calendar";
		$data['msg'] = "";
		$data['isadmin'] =  $this->session->userdata('isadmin') != "" ? $this->session->userdata('isadmin') : "";
		$data['search_url'] = "calendar/search";
		$this->load->model('student_model');


		if(isset($_POST['search'])){


			$result = $this->student_model->getStudentByStudentNo($this->input->post('search'));
			
			if($result){
				$data['s-name'] = $result['firstname']." ".$result['middlename']." ".$result['lastname'];
				$data['s-student_no'] = $result['student_no'];
				$data['s-id'] = $result['id'];
				$data['s-course'] = $result['name'];
				$data['s-id_image'] = $result['id_image'];
				$this->session->set_userdata($data);
				
			}else{
				$this->session->unset_userdata('s-name');
				$this->session->unset_userdata('s-student_no');
				$this->session->unset_userdata('s-id');
				$this->session->unset_userdata('s-course');
				$this->session->unset_userdata('s-id_image');
				$data['msg'] = "No student no. found!";
			}	
					
		}

		$data['name'] =  $this->session->userdata('s-name') != "" ? $this->session->userdata('s-name') : "";
		$data['student_no'] = $this->session->userdata('s-student_no') != "" ? $this->session->userdata('s-student_no') : "";
		$data['sid'] = $this->session->userdata('s-id') != "" ? $this->session->userdata('s-id') : "";
		$data['course'] = $this->session->userdata('s-course') != "" ? $this->session->userdata('s-course') : "";
		$data['id_image'] = $this->session->userdata('s-id_image') != "" ? $this->session->userdata('s-id_image') : "pexels-photo-220453.png";

	
		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', $data, TRUE);
		$this->load->view('calendar_view',$data);

	}

}
