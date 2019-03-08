<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Konten_Statis extends CI_Model {


	public function getAllKonten_Statis(){

	    $this->db->from('tb_konten_statis');
			$this->db->order_by('substr(Id_Konten_Statis, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getKonten_Statis($id){
		$this->db->from('tb_konten_statis');
		$this->db->where('Id_Konten_Statis',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputKonten_Statis($id_konten_statis,$judul,$konten){

 	$data = array(
        'Id_Konten_Statis' =>  $id_konten_statis,
        'Judul' => $judul,
        'Konten' => $konten
	);

		$this->db->insert('tb_konten_statis', $data);
	}

	public function editKonten_Statis($id_konten_statis,$judul,$konten)
    {

     $data = array(
       'Judul' => $judul,
       'Konten' => $konten


	);
        	$this->db->where('Id_Konten_Statis', $id_konten_statis);
			$this->db->update('tb_konten_statis', $data);
			//print_r($data);
	}
}
	?>
