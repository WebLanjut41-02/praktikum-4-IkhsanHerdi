<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Bank extends CI_Model {


	public function getAllBank(){

	    $this->db->from('tb_bank');
			$this->db->order_by('substr(Id_Bank, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getBank($id){
		$this->db->from('tb_Bank');
		$this->db->where('Id_Bank',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputbank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank){

 	$data = array(
        'Id_Bank' =>  $id_bank,
        'Nama_Bank' => $nama_bank,
        'No_Rekening'=>  $no_rekening,
        'Deskripsi' => $deskripsi,
        'Logo_Bank' => $logo_bank
	);

		$this->db->insert('tb_bank', $data);
	}

	public function editBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank)
    {

     $data = array(
       'Nama_Bank' => $nama_bank,
       'No_Rekening'=>  $no_rekening,
       'Deskripsi' => $deskripsi,
       'Logo_Bank' => $logo_bank


	);
        	$this->db->where('Id_Bank', $id_bank);
			$this->db->update('tb_bank', $data);
			//print_r($data);
	}
}
	?>
