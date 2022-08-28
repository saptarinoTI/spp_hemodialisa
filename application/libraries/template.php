<?php
class Template{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template,$data=null){
        $data['_content']=$this->_CI->load->view($template,$data,true);
        $data['_header']=$this->_CI->load->view('template/header',$data,true);
        $data['_sidebar']=$this->_CI->load->view('template/sidebar',$data,true);
        $this->_CI->load->view('/template.php',$data);
    }
	
	# Fungsi untuk membalik tanggal dari format Indo -> English
	function InggrisTgl($tanggal){
		$tgl=substr($tanggal,0,2);
		$bln=substr($tanggal,3,2);
		$thn=substr($tanggal,6,4);
		$awal="$thn-$bln-$tgl";
		return $awal;
	}

	# Fungsi untuk membalik tanggal dari format English -> Indo
	function IndonesiaTgl($tanggal){
		$tgl=substr($tanggal,8,2);
		$bln=substr($tanggal,5,2);
		$thn=substr($tanggal,0,4);
		$awal="$tgl-$bln-$thn";
		return $awal;
	}
	
	function Nilai_Bobot($na){
		if (($na >= 80.00) && ($na <=100)) {
			$bobot = 4.00;
			$huruf = "A";
		} else if (($na >= 77.50) && ($na<80)) {
			$bobot = 3.75;
			$huruf = "B";
		} else if (($na >= 75.00) && ($na<77.50)) {
			$bobot = 3.50;
			$huruf = "B";
		} else if (($na >= 72.50) && ($na<75.00)) {
			$bobot = 3.25;
			$huruf = "B";
		} else if (($na >= 70) && ($na<72.50)) {
			$bobot = 3.00;
			$huruf = "B";
		} else if (($na > 66) && ($na<70)) {
			$bobot = 2.75;
			$huruf = "C";
		} else if (($na > 62) && ($na<=66)) {
			$bobot = 2.50;
			$huruf = "C";
		} else if (($na > 58) && ($na<=62)) {
			$bobot = 2.25;
			$huruf = "C";
		} else if (($na > 55) && ($na<=58)) {
			$bobot = 2.00;
			$huruf = "C";	   	   	   	   	   	   	
		} else if (($na > 51) && ($na<=55)) {
			$bobot = 1.75;
			$huruf = "D";
		} else if (($na > 47) && ($na<=51)) {
			$bobot = 1.50;
			$huruf = "D";
		} else if (($na > 43) && ($na<=47)) {
			$bobot = 1.25;
			$huruf = "D";
		} else if (($na > 40) && ($na<=43)) {
			$bobot = 1.00;
			$huruf = "D";	   	   	   	   	   	   	
		} else {
			$bobot = 0.00;
			$huruf = "E";	 
    	}
		return $bobot;
	}

	function Nilai_Huruf($na){
		if (($na >= 80.00) && ($na <=100)) {
			$bobot = 4.00;
			$huruf = "A";
		} else if (($na >= 77.50) && ($na<80)) {
			$bobot = 3.75;
			$huruf = "B";
		} else if (($na >= 75.00) && ($na<77.50)) {
			$bobot = 3.50;
			$huruf = "B";
		} else if (($na >= 72.50) && ($na<75.00)) {
			$bobot = 3.25;
			$huruf = "B";
		} else if (($na >= 70) && ($na<72.50)) {
			$bobot = 3.00;
			$huruf = "B";
		} else if (($na > 66) && ($na<70)) {
			$bobot = 2.75;
			$huruf = "C";
		} else if (($na > 62) && ($na<=66)) {
			$bobot = 2.50;
			$huruf = "C";
		} else if (($na > 58) && ($na<=62)) {
			$bobot = 2.25;
			$huruf = "C";
		} else if (($na > 55) && ($na<=58)) {
			$bobot = 2.00;
			$huruf = "C";	   	   	   	   	   	   	
		} else if (($na > 51) && ($na<=55)) {
			$bobot = 1.75;
			$huruf = "D";
		} else if (($na > 47) && ($na<=51)) {
			$bobot = 1.50;
			$huruf = "D";
		} else if (($na > 43) && ($na<=47)) {
			$bobot = 1.25;
			$huruf = "D";
		} else if (($na > 40) && ($na<=43)) {
			$bobot = 1.00;
			$huruf = "D";	   	   	   	   	   	   	
		} else {
			$bobot = 0.00;
			$huruf = "E";	 
    	}
		return $huruf;
	}
}