<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('username')) {
			redirect('login');
		}
	}

	public function index()
	{
		$data['thn'] = date('Y');

		$data['website'] = $this->m_admin->website();
		$data['bln'] = $this->m_admin->data_tamu1();
		$data['thn1'] = $this->m_admin->jml_thn();
		$data['jml_tamu'] = $this->m_admin->jml_tamu();
		$data['hitungtamu2'] = $this->m_admin->hitungtamu2();
		$data['hitungtamuthn'] = $this->m_admin->hitungtamuthn();
		$this->load->view('template/Header', $data);
		$this->load->view('Dashboard', $data);
		$this->load->view('template/Footer', $data);
	}
}
