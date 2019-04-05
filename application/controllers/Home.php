<?php


class Home extends CI_Controller
{
	public function index()
	{
		$data = array(
			'title' => 'CodeIgniter Starter',
			'page' => 'Home'
		);

		$this->load->view('Templates/Header', $data);
		$this->load->view('Pages/Home', $data);
		$this->load->view('Templates/Footer');
	}
}
