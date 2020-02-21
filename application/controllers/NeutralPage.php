<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NeutralPage extends CI_Controller {

	public function index()
	{

		$data['header'] = $this->load->view('header', NULL, TRUE);
		$data['footer'] = $this->load->view('footer', NULL, TRUE);
        $this->load->view('neutral_page_view');
	}
}
