<?php
class Template_repo{
    protected $_CI;
    function __construct(){
        $this->_CI=&get_instance();
    }
    
    function display($template_repo, $data=null){
        $data['_content']=$this->_CI->load->view($template_repo, $data, true);
        $this->_CI->load->view('/template_repo.php',$data);
    }		
}
/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */