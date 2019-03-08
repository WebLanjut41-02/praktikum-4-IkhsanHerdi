<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Menu extends CI_Model {


	public function getAllMenu(){

	    $this->db->from('tb_menu_paket');
			$this->db->join('tb_vendor','tb_menu_paket.Id_Vendor = tb_vendor.Id_Vendor');
			$this->db->order_by('substr(Id_Paket, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getMenu($id){
		$this->db->from('tb_menu_paket');
		$this->db->join('tb_vendor','tb_menu_paket.Id_Vendor = tb_vendor.Id_Vendor');
		$this->db->where('Id_Paket',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getdetailmenu($id){
    $this->db->from('tb_menu_paket');
		$this->db->join('tb_vendor','tb_menu_paket.Id_Vendor = tb_vendor.Id_Vendor');
		$this->db->where('tb_menu_paket.Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputmenu($id_paket,$nama_paket,$gambar_paket,$harga_paket,$deskripsi_paket,$kategori_paket,$id_vendor){

 	$data = array(
        'Id_Paket' =>  $id_paket,
        'Nama_Paket' => $nama_paket,
        'Gambar_Paket'=>  $gambar_paket,
        'Harga_Paket' => $harga_paket,
        'Deskripsi_Paket' => $deskripsi_paket,
				'Kategori_Paket' => $kategori_paket,
        'Id_Vendor' => $id_vendor
	);

		$this->db->insert('tb_menu_paket', $data);
		// $query = $this->db->query("UPDATE `tb_rating` SET `Id_Vendor`='$id_vendor',`Total_Rating`= round(((SUM(`Rating`))/COUNT(`Id_Feedback`)) , 1) WHERE ")->result();
	 // return $query;
		// if ($query) {
		// 	# code...
		// 	echo "Ok";
		// }else{
		// 	echo "not ok";
		// }
	}

	public function editmenu($id_paket,$nama_paket,$gambar_paket,$harga_paket,$deskripsi_paket,$kategori_paket,$id_vendor)
    {

     $data = array(
			 'Id_Paket' =>  $id_paket,
			 'Nama_Paket' => $nama_paket,
			 'Gambar_Paket'=>  $gambar_paket,
			 'Harga_Paket' => $harga_paket,
			 'Deskripsi_Paket' => $deskripsi_paket,
			 'Kategori_Paket' => $kategori_paket,
			 'Id_Vendor' => $id_vendor

	);

	$this->db->where('Id_Paket', $id_paket);
$this->db->update('tb_menu_paket', $data);
//print_r($data);
}
	// public function inputUser($akun,$password){

 // 	$data = array(
 //        'Akun' =>  $akun ,
 //        'Password'=>  $password,
 //        'Hak_Akses' => 'Konsumen'
	// );
	// 	$this->db->insert('user', $data);
	// }
	public function getJumlahMenu()
		{
			$query = $this->db->query("SELECT Id_Vendor,Nama_Vendor, COUNT(`Id_Paket`) as 'Jumlah_Menu', Kategori_Vendor FROM `tb_menu_paket` JOIN tb_vendor USING(`Id_Vendor`) GROUP BY `Id_Vendor`")->result();
		 return $query;
		}


 //    public function hapusGuru($id)
 //    {

 //       $this->db->where('NIP',$id);
 //       $this->db->delete('guru');

 //    }
/*
	public function getJumlahKonsumen()
		{

			$query = $this->db->query("SELECT COUNT('Id_Konsumen') as 'Jumlah'
																	FROM `tb_konsumen`")->result();
		 return $query;
   }*/
}
	?>
