<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Rating extends CI_Model {


	public function getAllRating(){
	    $this->db->from('tb_rating r');
			$this->db->join('tb_vendor v','r.Id_Vendor = v.Id_Vendor');
	    $query = $this->db->get();
	    return $query->result();
	}

	public function getJumlahRating()
		{
			$query = $this->db->query("SELECT `Id_Vendor`, COUNT(`Id_Feedback`)  FROM `tb_feedback` GROUP BY `Id_Vendor`")->result();
		 return $query;
		}

	public function getJumlahPoin()
		{
			$query = $this->db->query("SELECT SUM(`Rating`) as 'Poin'  FROM `tb_feedback` GROUP BY `Id_Vendor`")->result();
		 return $query;
		}

		public function inputRating($id_vendor){

	 	$data = array(
	        'Id_Vendor' =>  $id_vendor,
	        'Total_Rating' => 0
		);
			$this->db->insert('tb_rating', $data);
		}

		public function editRating($id_vendor,$rate)
	    {
	    $query = $this->db->query("SELECT SUM(`Rating`) as 'Poin'  FROM `tb_feedback` WHERE Id_Vendor = '$id_vendor' ")->result();
	    $poin = $query['0']->Poin;
	     $data = array(
	       'Total_Rating' => $rate->Jumlah_Rating,
		);
	        	$this->db->where('Id_Vendor', $id_vendor);
				$this->db->update('tb_rating', $data);
				//print_r($data);
		}
}
	?>
