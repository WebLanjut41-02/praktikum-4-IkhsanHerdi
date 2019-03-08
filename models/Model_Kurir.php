<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Kurir extends CI_Model {


	public function getAllKurir(){

	    $this->db->from('tb_kurir');
			$this->db->order_by('substr(Id_Kurir, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getKurir($id){
		$this->db->from('tb_kurir');
		$this->db->where('Id_Kurir',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function getdetailkurir($id){
    $this->db->from('tb_kurir');
		$this->db->join('tb_vendor','tb_kurir.Id_Vendor = tb_vendor.Id_Vendor');
		$this->db->where('tb_kurir.Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputkurir($id_kurir,$id_vendor,$nama_kurir,$no_telfon_kurir){

 	$data = array(
        'Id_Kurir' =>  $id_kurir ,
        'Id_Vendor'=>  $id_vendor,
        'Nama_Kurir' => $nama_kurir,
        'No_Telfon_Kurir' => $no_telfon_kurir
	);
		$query = $this->db->insert('tb_kurir', $data);
		if ($query) {
			# code...
			echo "Ok";
		}else{
			echo "not ok";
		}
	}

	public function editkurir($id_kurir,$id_vendor,$nama_kurir,$no_telfon_kurir)
    {

     $data = array(
       'Id_Kurir' =>  $id_kurir ,
       'Id_Vendor'=>  $id_vendor,
       'Nama_Kurir' => $nama_kurir,
       'No_Telfon_Kurir' => $no_telfon_kurir

	);
        	$this->db->where('Id_Kurir', $id_kurir);
			$this->db->update('tb_kurir', $data);
			//print_r($data);
	}

	public function getJumlahKurir()
		{
			$query = $this->db->query("SELECT Id_Vendor,Nama_Vendor, COUNT(`Id_Kurir`) as 'Jumlah_Kurir' FROM `tb_kurir` JOIN tb_vendor USING(`Id_Vendor`) GROUP BY `Id_Vendor`")->result();
		 return $query;
		}
}
	?>
