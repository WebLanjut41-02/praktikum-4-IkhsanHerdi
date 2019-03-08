<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Konsumen extends CI_Model {


	public function getAllKonsumen(){

	    $this->db->from('tb_konsumen');
			$this->db->order_by('substr(Id_Konsumen, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getKonsumen($id){
		$this->db->from('tb_konsumen');
		$this->db->where('Id_Konsumen',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputKonsumen($id_konsumen,$nama_konsumen,$no_tlp,$email,$foto){

 	$data = array(
        'Id_Konsumen' =>  $id_konsumen ,
        'Nama'=>  $nama_konsumen,
        'No_Telfon' => $no_tlp,
        'Email' => $email,
        'Foto_Profil' => $foto,
        'Aktivitas_Konsumen' => ''

	);
		$query = $this->db->insert('tb_konsumen', $data);
		if ($query) {
			# code...
			echo "Ok";
		}else{
			echo "not ok";
		}
	}

	// public function inputUser($akun,$password){

 // 	$data = array(
 //        'Akun' =>  $akun ,
 //        'Password'=>  $password,
 //        'Hak_Akses' => 'Konsumen'
	// );
	// 	$this->db->insert('user', $data);
	// }


	public function editKonsumen($id_konsumen,$nama_konsumen,$no_tlp,$email,$foto)
    {

     $data = array(
        'Nama'=>  $nama_konsumen,
        'No_Telfon' => $no_tlp,
        'Email' => $email,
        'Foto_Profil' => $foto,
        'Aktivitas_Konsumen' => ''

	);
        	$this->db->where('Id_Konsumen', $id_konsumen);
			$this->db->update('tb_konsumen', $data);
			//print_r($data);
	}



 //    public function hapusGuru($id)
 //    {

 //       $this->db->where('NIP',$id);
 //       $this->db->delete('guru');

 //    }

	public function getJumlahKonsumen()
		{

			$query = $this->db->query("SELECT COUNT('Id_Konsumen') as 'Jumlah'
																	FROM `tb_konsumen`")->result();
		 return $query;
		}
}



	?>
