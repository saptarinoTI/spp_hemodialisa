<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation', 'template'));
		$this->load->model('m_user');
		$this->load->model('m_pasien');
		$this->load->model('m_jadwal');
		$this->load->model('m_hemodialis');
		$this->load->model('m_dialisis_book');
		$this->load->helper('url');
	}

	function index()
	{
		$data['title'] = "Dashboard Admin";

		$data['tot_pasien'] = $this->m_pasien->tot_pasien();
		$data['tot_jadwal'] = $this->m_jadwal->tot_jadwal();
		$data['tot_hemodialis'] = $this->m_hemodialis->tot_hemodialis();
		$data['tot_dialisis'] = $this->m_dialisis_book->tot_dialisis_book();

		$this->template->display('dashboard/menu_tab', $data);
	}
}
