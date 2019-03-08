<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Login extends CI_Model {

	 function proseslogin($user, $pass){

	 	  $this->db->from('tb_akun');
		  $this->db->where('Username',$user);
		  $this->db->where('Password',$pass);

		  $query = $this->db->get();
		  // if ($query) {
		  // 	# code...
		  // 	echo "ok dong";
		  // }else {
		  // 	# code...
		  // 	echo "not ok dong";
		  // }
		 return $query->result();
 	}

}
?>