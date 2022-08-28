<?php
if ($this->session->userdata('aplevel') == "admin") {
	$this->load->view('template/menu_admin');
} else if ($this->session->userdata('aplevel') == "user") {
	$this->load->view('template/menu_user');
} else {
	echo "Menu gagal di tampilkan";
}
