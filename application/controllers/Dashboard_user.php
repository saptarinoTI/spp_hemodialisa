<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','template'));
		$this->load->model('m_pasien');
		$this->load->helper('url');
	}

	function index(){
		$data['title']="Dashboard User";
				
		$data['tot_pasien']=$this->m_pasien->tot_pasien();

		$this->template->display('dashboard/menu_tab_user',$data);	
	}

}