<?php 
if($this->session->userdata('aplevel') == "user") {
	$this->load->view('dashboard/menu_tab_user');
}else{
	echo "Menu gagal di tampilkan";
}
?>
