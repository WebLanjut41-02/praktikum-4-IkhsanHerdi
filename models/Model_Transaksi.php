<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Transaksi extends CI_Model {


	public function getAllPesanan(){

 		 $this->db->from('tb_pesanan a');
		 $this->db->join('tb_konsumen b', 'a.Id_Konsumen = b.Id_Konsumen');
		 $this->db->join('tb_paket_dipesan c','a.Id_Pesanan = c.Id_Pesanan');
			 $this->db->order_by('substr(a.Id_Pesanan, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getAllPembayaran(){

	    $this->db->from('tb_pembayaran a');
	    $this->db->join('tb_pesanan b', 'a.Id_Pesanan = b.Id_Pesanan');
	    $this->db->join('tb_bank c', 'c.Id_Bank = a.Id_Bank');
			$this->db->order_by('substr(Id_Pembayaran, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getPesanan($id){
		 $this->db->from('tb_pesanan a');
		 $this->db->join('tb_konsumen c', 'c.Id_Konsumen = a.Id_Konsumen');
		 $this->db->join('tb_paket_dipesan e','e.Id_Pesanan = a.Id_Pesanan');
		 $this->db->join('tb_menu_paket d', 'd.Id_Paket = e.Id_Menu_Paket');
		 $this->db->join('tb_vendor f', 'f.Id_Vendor = d.Id_Vendor');
		//  $this->db->join('tb_kurir g','g.Id_Vendor = f.Id_Vendor');		 
		 

		$this->db->where('a.Id_Pesanan',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getPembayaran($id){
		 $this->db->from('tb_pembayaran a');
	     $this->db->join('tb_pesanan c', 'c.Id_Pesanan = a.Id_Pesanan');
		 $this->db->join('tb_konsumen f', 'f.Id_Konsumen = c.Id_Konsumen');
		 $this->db->join('tb_paket_dipesan b','a.Id_Pesanan = b.Id_Pesanan'); 
	     $this->db->join('tb_menu_paket d', 'd.Id_Paket = b.Id_Menu_Paket');
	     $this->db->join('tb_vendor e', 'e.Id_Vendor = d.Id_Vendor');

		$this->db->where('Id_Pembayaran',$id);

		$query = $this->db->get();
		return $query->result();
	}


	public function inputPembayaran($id_pembayaran,$id_bank,$id_pesanan,$total_tagihan,$tanggal_pembayaran,$waktu_pembayaran,$status_pembayaran){
	$pecah = explode( "/",$tanggal_pembayaran);
	// print_r($pecah); echo "<br>";
	// echo "$tgl";
	$tanggal = $pecah['2']."-".$pecah['0']."-".$pecah['1'];
 	$data = array(
        'Id_Pembayaran' =>  $id_pembayaran ,
        'Id_Bank'=>  $id_bank,
        'Id_Pesanan' =>  $id_pesanan,
        'Total_Tagihan' => $total_tagihan,
        'Tanggal_Pembayaran' => $tanggal,
        'Waktu_Pembayaran' => $waktu_pembayaran,
        'Status_Pembayaran' => $status_pembayaran

	);
		$this->db->insert('tb_pembayaran', $data);
		// if ($query) {
		// 	# code...
		// 	echo "Ok";
		// }else{
		// 	echo "not ok";
		// }
	}

// 	public function inputUser($username,$password){

//  	$data = array(
//         'Akun' =>  $username ,
//         'Password'=>  $password,
//         'Hak_Akses' => 'Vendor'
// 	);
// 		$this->db->insert('user', $data);
// 	}


	public function editPembayaran($id_pembayaran,$id_bank,$id_pesanan,$total_tagihan,$tanggal_pembayaran,$waktu_pembayaran,$status_pembayaran)
    {

      $pecah = explode( "/",$tanggal_pembayaran);
	// print_r($pecah); echo "<br>";
	// echo "$tgl";
	$tanggal = $pecah['2']."-".$pecah['0']."-".$pecah['1'];
 	$data = array(
        'Id_Pembayaran' =>  $id_pembayaran ,
        'Id_Bank'=>  $id_bank,
        'Id_Pesanan' =>  $id_pesanan,
        'Total_Tagihan' => $total_tagihan,
        'Tanggal_Pembayaran' => $tanggal,
        'Waktu_Pembayaran' => $waktu_pembayaran,
        'Status_Pembayaran' => $status_pembayaran

	);
        	$this->db->where('Id_Pembayaran', $id_pembayaran);
			$this->db->update('tb_pembayaran', $data);
			//print_r($data);
	}



//  //    public function hapusGuru($id)
//  //    {

//  //       $this->db->where('NIP',$id);
//  //       $this->db->delete('guru');

//  //    }

// 	public function getJumlahVendor()
// 		{

// 			$query = $this->db->query("SELECT COUNT('Id_Vendor') as 'Jumlah'
// 																	FROM `tb_vendor`")->result();
// 		 return $query;
// 		}
// }

}

	?>
