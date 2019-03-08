<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Dompet extends CI_Model {


	public function getAllDompet(){

	    $this->db->from('tb_dompet');
			$this->db->order_by('substr(Id_Dompet, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getDompet($id){
		$this->db->from('tb_dompet');
		$this->db->where('Id_Dompet',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputdompet($id_dompet,$id_konsumen,$nominal_dompet){

 	$data = array(
        'Id_Dompet' =>  $id_dompet ,
        'Id_Konsumen'=>  $id_konsumen,
        'Nominal_Dompet' => $nominal_dompet
	);
		$query = $this->db->insert('tb_dompet', $data);
		if ($query) {
			# code...
			echo "Ok";
		}else{
			echo "not ok";
		}
	}

	public function editdompet($id_dompet,$id_konsumen,$nominal_dompet)
    {

      $data = array(
            'Id_Dompet' =>  $id_dompet ,
            'Id_Konsumen'=>  $id_konsumen,
            'Nominal_Dompet' => $nominal_dompet

	);
        	$this->db->where('Id_Dompet', $id_dompet);
			$this->db->update('tb_dompet', $data);
			//print_r($data);
	}
}
	?>
