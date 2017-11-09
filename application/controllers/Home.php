<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/header_product');
		$this->load->view('guest/home');
		$this->load->view('guest/footer');
	}
	public function add_product()
	{
		$this->load->view('guest/head');
		$this->load->view('guest/header');
		$this->load->view('guest/header_product');
		$this->load->view('guest/add_product');
		$this->load->view('guest/footer');
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */