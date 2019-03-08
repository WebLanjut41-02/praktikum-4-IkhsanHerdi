<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Feedback extends CI_Model {


	public function getAllFeedback(){

	    $this->db->from('tb_feedback');
			$this->db->join('tb_konsumen','tb_feedback.Id_Konsumen = tb_konsumen.Id_Konsumen');
			$this->db->order_by('substr(Id_Feedback, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getFeedback($id){
		$this->db->from('tb_feedback');
		$this->db->join('tb_konsumen','tb_feedback.Id_Konsumen = tb_konsumen.Id_Konsumen');
		$this->db->join('tb_vendor','tb_feedback.Id_Vendor = tb_vendor.Id_Vendor');
		$this->db->where('Id_Feedback',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getdetailfeedbackvendor($id){
		$this->db->from('tb_feedback');
		$this->db->join('tb_konsumen','tb_feedback.Id_Konsumen = tb_konsumen.Id_Konsumen');
		$this->db->join('tb_vendor','tb_feedback.Id_Vendor = tb_vendor.Id_Vendor');
		$this->db->where('tb_feedback.Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputfeedback($id_feedback,$id_konsumen,$id_vendor,$komentar,$rating,$tanggal_feedback){

 	$data = array(
        'Id_Feedback' =>  $id_feedback,
        'Id_Konsumen' => $id_konsumen,
        'Id_Vendor'=>  $id_vendor,
        'Komentar' => $komentar,
        'Rating' => $rating,
				'Tanggal_Feedback' => $tanggal_feedback
	);

		$this->db->insert('tb_feedback', $data);
		// $query = $this->db->query("UPDATE `tb_rating` SET `Id_Vendor`='$id_vendor',`Total_Rating`= round(((SUM(`Rating`))/COUNT(`Id_Feedback`)) , 1) WHERE ")->result();
	 // return $query;
		// if ($query) {
		// 	# code...
		// 	echo "Ok";
		// }else{
		// 	echo "not ok";
		// }
	}

	public function getTotalRating($id_vendor)
		{
			$query = $this->db->query("SELECT round(((SUM(`Rating`))/COUNT(`Id_Feedback`)) , 1) as 'Jumlah_Rating'  FROM `tb_feedback` JOIN tb_vendor USING(`Id_Vendor`) WHERE `Id_Vendor`= '$id_vendor'")->result();
		 return $query;
		}

	// public function inputUser($akun,$password){

 // 	$data = array(
 //        'Akun' =>  $akun ,
 //        'Password'=>  $password,
 //        'Hak_Akses' => 'Konsumen'
	// );
	// 	$this->db->insert('user', $data);
	// }
	public function getJumlahFeedback()
		{
			$query = $this->db->query("SELECT Id_Vendor,Nama_Vendor, COUNT(`Id_Feedback`) as 'Jumlah_Feedback', round(((SUM(`Rating`))/COUNT(`Id_Feedback`)) , 1) as 'Jumlah_Rating'  FROM `tb_feedback` JOIN tb_vendor USING(`Id_Vendor`) GROUP BY `Id_Vendor`")->result();
		 return $query;
		}

	public function editFeedback($id_feedback,$komentar,$rating,$tanggal_feedback,$status)
    {

     $data = array(
       'Id_Feedback' =>  $id_feedback ,
       'Komentar' => $komentar,
       'Rating' => $rating,
	   'Tanggal_Feedback' => $tanggal_feedback,
	   'Status_Feedback' =>	$status

	);
        	$this->db->where('Id_Feedback', $id_feedback);
			$this->db->update('tb_feedback', $data);
			//print_r($data);
	}




/*
	public function getJumlahKonsumen()
		{

			$query = $this->db->query("SELECT COUNT('Id_Konsumen') as 'Jumlah'
																	FROM `tb_konsumen`")->result();
		 return $query;
   }*/
}
	?>
