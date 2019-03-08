<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Vendor extends CI_Model {


	public function getAllVendor(){

		$id_akun = 'Id_Akun';
	    $this->db->from('tb_vendor');
	    $this->db->join('tb_akun',$id_akun);
	    $this->db->order_by('substr(Id_Vendor, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getVendor($id){
		$id_akun = 'Id_Akun';
		$this->db->from('tb_vendor');
		 $this->db->join('tb_akun',$id_akun);
		$this->db->where('Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputVendor($id_vendor,$nama_vendor,$kategori_vendor,$no_tlp,$email,$alamat_vendor,$deskripsi_vendor,$foto,$nama_pemilik,$no_ktp,$kuota_pemesanan,$status_vendor,$id_akun,$status_akun){
	
 	$data = array(
        'Id_Vendor' =>  $id_vendor ,
        'Nama_Vendor'=>  $nama_vendor,
        'Kategori_Vendor' => $kategori_vendor,
        'No_Telfon_Vendor' => $no_tlp,
        'Email_Vendor' => $email,
        'Alamat_Vendor' => $alamat_vendor,
        'Deskripsi_Vendor' => $deskripsi_vendor,
        'Foto_Profil_Vendor' => $foto,
        'Nama_Pemilik' => $nama_pemilik,
        'No_KTP' => $no_ktp,
        'Kuota_Pemesanan' => $kuota_pemesanan,
        'Status_Vendor' => $status_vendor,
        'Id_Akun' => $id_akun,
        'Status_Akun' => $status_akun

	);
		$this->db->insert('tb_vendor', $data);
		// if ($query) {
		// 	# code...
		// 	echo "Ok";
		// }else{
		// 	echo "not ok";
		// }
	}

	public function inputUser($username,$password){

 	$data = array(
        'Akun' =>  $username ,
        'Password'=>  $password,
        'Hak_Akses' => 'Vendor'
	);
		$this->db->insert('user', $data);
	}


	public function editVendor($id_vendor,$nama_vendor,$kategori_vendor,$no_tlp,$email,$alamat_vendor,$deskripsi_vendor,$foto,$nama_pemilik,$no_ktp,$kuota_pemesanan,$status_vendor,$id_akun,$status_akun)
    {
	
      $data = array(
        'Id_Vendor' =>  $id_vendor ,
        'Nama_Vendor'=>  $nama_vendor,
        'Kategori_Vendor' => $kategori_vendor,
        'No_Telfon_Vendor' => $no_tlp,
        'Email_Vendor' => $email,
        'Alamat_Vendor' => $alamat_vendor,
        'Deskripsi_Vendor' => $deskripsi_vendor,
        'Foto_Profil_Vendor' => $foto,
        'Nama_Pemilik' => $nama_pemilik,
        'No_KTP' => $no_ktp,
        'Kuota_Pemesanan' => $kuota_pemesanan,
        'Status_Vendor' => $status_vendor,
        'Id_Akun' => $id_akun,
        'Status_Akun' => $status_akun

	);
        	$this->db->where('Id_Vendor', $id_vendor);
			$this->db->update('tb_vendor', $data);
			//print_r($data);
	}



 //    public function hapusGuru($id)
 //    {

 //       $this->db->where('NIP',$id);
 //       $this->db->delete('guru');

 //    }

	public function getJumlahVendor()
		{

			$query = $this->db->query("SELECT COUNT('Id_Vendor') as 'Jumlah'
																	FROM `tb_vendor`")->result();
		 return $query;
		}
}



	?>
