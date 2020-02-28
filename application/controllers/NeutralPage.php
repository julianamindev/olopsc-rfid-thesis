<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NeutralPage extends CI_Controller {

	public function index()
	{

		$data['error'] = "";
		$data['page'] = "neutral";
		$data['student']['firstname'] = "";
		$data['student']['middlename'] = "";
		$data['student']['lastname'] = "";
		$data['student']['student_no'] = "";
		$data['student']['name'] = "";
		$data['student']['id_image'] = "pexels-photo-220453.png";

		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
        $this->load->view('neutral_page_view',$data);
	}


	public function timein()
	{

		$data['error'] = "";
		$data['page'] = "neutral";
		$data['isadmin'] = 0;
		$this->load->model('student_model');

		if(isset($_POST['submit'])){

		
			$result = $this->student_model->getStudentByRfid($this->input->post('ref_rfid'));
			if(count($result)){

				$log['student_ref_id'] = $result['id'];
				$this->student_model->addLogStudent($result['student_no'],$log);	

				$data['student'] = $result;
				$data['error'] = "Welcome! You log at ".date('h:i A ');
			}else{
				$data['student']['firstname'] = "";
				$data['student']['middlename'] = "";
				$data['student']['lastname'] = "";
				$data['student']['student_no'] = "";
				$data['student']['name'] = "";
				$data['student']['id_image'] = "pexels-photo-220453.png";
				$data['error'] = "Card not registered. Please contact administrator.";
			}

			
			
		}else{
			$data['student']['firstname'] = "";
			$data['student']['middlename'] = "";
			$data['student']['lastname'] = "";
			$data['student']['student_no'] = "";
			$data['student']['name'] = "";
			$data['student']['id_image'] = "pexels-photo-220453.png";
			$data['error'] = "Card not registered. Please contact administrator.";



		}	



		$data['header'] = $this->load->view('header', $data, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
        $this->load->view('neutral_page_view',$data);
	}

}
