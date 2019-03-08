<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Komplain extends CI_Model {


	public function getAllKomplain(){

	    $this->db->from('tb_komplain');
			$this->db->join('tb_konsumen','tb_komplain.Id_Konsumen = tb_konsumen.Id_Konsumen');
			$this->db->order_by('substr(Id_Komplain, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getKomplain($id){
		$this->db->from('tb_komplain');

		$this->db->where('Id_Komplain',$id);

		$query = $this->db->get();
		return $query->result();
	}

// 	public function getdetailfeedbackvendor($id){
// 		$this->db->from('tb_feedback');
// 		$this->db->join('tb_konsumen','tb_feedback.Id_Konsumen = tb_konsumen.Id_Konsumen');
// 		$this->db->join('tb_vendor','tb_feedback.Id_Vendor = tb_vendor.Id_Vendor');
// 		$this->db->where('tb_feedback.Id_Vendor',$id);

// 		$query = $this->db->get();
// 		return $query->result();
// 	}


	public function inputkomplain($id_komplain,$id_konsumen,$komplain,$tanggal){

 	$data = array(
        'Id_Komplain' =>  $id_komplain,
        'Id_Konsumen' => $id_konsumen,
        'isi_Komplain' => $komplain,
        'tanggal_komplain' => $tanggal
	);

		$this->db->insert('tb_komplain', $data);

	}

// 	public function getTotalRating($id_vendor)
// 		{
// 			$query = $this->db->query("SELECT round(((SUM(`Rating`))/COUNT(`Id_Feedback`)) , 1) as 'Jumlah_Rating'  FROM `tb_feedback` JOIN tb_vendor USING(`Id_Vendor`) WHERE `Id_Vendor`= '$id_vendor'")->result();
// 		 return $query;
// 		}

// 	// public function inputUser($akun,$password){

//  // 	$data = array(
//  //        'Akun' =>  $akun ,
//  //        'Password'=>  $password,
//  //        'Hak_Akses' => 'Konsumen'
// 	// );
// 	// 	$this->db->insert('user', $data);
// 	// }
	// public function getJumlahKomplain()
	// 	{
	// 		$query = $this->db->query("SELECT Id_Vendor,Nama_Vendor, COUNT(`Id_Komplain`) as 'Jumlah_Komplain' FROM `tb_komplain` JOIN tb_vendor USING(`Id_Vendor`) GROUP BY `Id_Vendor`")->result();
	// 	 return $query;
	// 	}

// 	public function editFeedback($id_feedback,$komentar,$rating)
//     {

//      $data = array(
//        'Id_Feedback' =>  $id_feedback ,
//        'Komentar' => $komentar,
//        'Rating' => $rating


// 	);
//         	$this->db->where('Id_Feedback', $id_feedback);
// 			$this->db->update('tb_feedback', $data);
// 			//print_r($data);
// 	}



    public function hapuskomplain($id)
    {

       $this->db->where('Id_Komplain',$id);
       $this->db->delete('tb_komplain');

    }
// /*
// 	public function getJumlahKonsumen()
// 		{

// 			$query = $this->db->query("SELECT COUNT('Id_Konsumen') as 'Jumlah'
// 																	FROM `tb_konsumen`")->result();
// 		 return $query;
//    }*/
}
	?>
