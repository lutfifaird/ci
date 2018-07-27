<?php
 
class Auth {
     
    public $core;
     
    public function __construct() {
        $this->core =& get_instance();
        $this->core->load->library('session');
    }
 
	public function authenticate(CI_DB_result $data) {
        $this->core->session->set_userdata('auth',array(
            'id' => $data->USERNAME,
			'username' => $data->ERP_USER_NAME,
        ));
    }
	
	public function get_id() {
        return $this->core->session->userdata('auth')['id'];
    }
	
	public function get_user() {
        return $this->core->session->userdata('auth')['user'];
    }
	
	public function logout() {
        $this->core->session->sess_destroy();
    }

}