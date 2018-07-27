<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model
{

public function __construct()
	{
		parent::__construct();
	}
	function cek_login($username, $password){
		$where  = "password = md5('".$password."') and username = '".$username."' ";
		$this->db->from('user');
		$this->db->where($where);
		
		$query = $this->db->get();
		return $query;
	}

}
