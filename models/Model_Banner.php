<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_Banner extends CI_Model {


	public function getAllBanner(){

	    $this->db->from('tb_banner');
			$this->db->order_by('substr(Id_Banner, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
	}

	public function getBanner($id){
		$this->db->from('tb_Banner');
		$this->db->where('Id_Banner',$id);

		$query = $this->db->get();
		return $query->result();
	}

	public function inputbanner($id_banner,$nama_banner,$banner,$status){

 	$data = array(
        'Id_Banner' =>  $id_banner,
        'Nama_Banner' => $nama_banner,
        'Banner'=>  $banner,
        'Status' => $status
	);

		$this->db->insert('tb_banner', $data);
	}

	public function editBanner($id_banner,$nama_banner,$banner,$status)
    {

     $data = array(
       'Nama_Banner' => $nama_banner,
       'Banner'=>  $banner,
       'Status' => $status


	);
        	$this->db->where('Id_Banner', $id_banner);
			$this->db->update('tb_banner', $data);
			//print_r($data);
	}
}
	?>
