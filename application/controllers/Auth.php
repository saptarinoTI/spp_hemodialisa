<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('form_validation', 'session'));
		$this->load->model('m_user');
		$this->load->helper(array('url'));

		//$this->cekLogin();
		$this->lang->load('auth');
	}

	public function login()
	{

		$this->data['title'] = 'FORM LOGIN';
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == true) {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');

			$cek = $this->m_user->login($user, $pass, "admin");
			if ($cek->num_rows() > 0) {
				// Create session
				$this->session->set_userdata('is_login', true);
				$this->session->set_userdata('apusername', $user);
				$this->session->set_userdata('aplevel', "admin");
				$this->session->set_userdata('apfoto', $cek->row()->user_foto);

				redirect('dashboard');
			} else {
				$data['message'] = "<div class='alert alert-danger'>Username atau Password salah</div>";
				$this->load->view('login/index', $data);
			}
		} else {
			$data['message'] = "";
			$this->load->view('login/index', $data);
		}
	}

	// log the user out
	public function logout()
	{
		$this->data['title'] = "Logout";

		$this->session->sess_destroy();

		// redirect them to the login page
		$this->session->set_flashdata('message', 'Terima Kasih');
		redirect('home', 'refresh');
	}

	// change password

	public function _render_page($view, $data = null, $returnhtml = false) //I think this makes more sense
	{

		$this->viewdata = (empty($data)) ? $this->data : $data;

		$view_html = $this->load->view($view, $this->viewdata, $returnhtml);

		if ($returnhtml) return $view_html; //This will return html on 3rd argument being true
	}
}
