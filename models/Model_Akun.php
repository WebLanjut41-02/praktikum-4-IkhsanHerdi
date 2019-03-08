<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Akun extends CI_Model {


	public function getAllAkun(){

	    $this->db->from('tb_akun');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function getAkun($id){

	    $this->db->from('tb_akun');
	    $this->db->where('Id_Akun',$id);
	    $query = $this->db->get();
	    return $query->result();
	}

	public function inputakun($id_akun,$username,$psw,$role,$aktifitas_akun,$status_akun,$created,$updated,$deleted){

 	$data = array(
        'Id_Akun' =>  $id_akun ,
        'Username'=>  $username,
        'Password' => $psw,
        'Role' => $role,
        'Aktifitas_AKun' => $aktifitas_akun,
        'Status_Akun' => $status_akun,
        'Created_at' => $created,
        'Update_at' => $updated,
        'Delete_at' => $deleted
	);
		$query = $this->db->insert('tb_akun', $data);
		
	}

	public function editakun($id_akun,$username,$role,$status_akun)
    {

   
     		$this->db->set('Username',$username);
     		$this->db->set('Role',$role);
     		$this->db->set('Status_AKun',$status_akun);
        	$this->db->where('Id_Akun', $id_akun);
			$this->db->update('tb_akun');
			//print_r($data);
	}

}


	?>
