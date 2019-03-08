<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_DepositVendor extends CI_Model {

  public function inputDepositvendor($id_deposit,$id_Vendor,$Nominal_deposit,$status_deposit){
 	$data = array(
        'Id_Deposit' =>  $id_deposit,
        'Id_Vendor'=>  $id_Vendor,
        'Nominal_Deposit' =>  $Nominal_deposit,
        'Status_Deposit' => $status_deposit,
	);
		$this->db->insert('tb_deposit', $data);
		}

		public function tambahDepositvendor($id_penambahan,$id_Deposit,$Nominal,$tanggal,$waktu,$deposit_saat_ini){
			$data = array(
					 'Id_Penambahan_Deposit' 	=> $id_penambahan,
					 'Id_Deposit'							=>   $id_Deposit,
					 'Nominal_Penambahan' 		=>  $Nominal,
					 'Tanggal_Penambahan'		  => $tanggal,
					 'Waktu_Penambahan' 			=> $waktu
		 );
			 $this->db->insert('tb_penambahan_deposit', $data);

		 	$deposit_tambah = $Nominal + $deposit_saat_ini;
			$data1 = array(
				 'Nominal_Deposit' => $deposit_tambah
			 );
			 $this->db->where('Id_Deposit', $id_Deposit);
			 $this->db->update('tb_deposit', $data1);
			 }

	  public function tarikDepositvendor($id_penarikan,$id_Deposit,$Nominal,$tanggal,$waktu,$deposit_saat_ini){
					$data = array(
						 'Id_Penarikan_Deposit' => $id_penarikan,
						 'Id_Deposit'						=>   $id_Deposit,
						 'Nominal_Penarikan' 		=>  $Nominal,
						 'Tanggal_Penarikan' 		=> $tanggal,
						 'Waktu_Penarikan' 			=> $waktu
			 			);
				 $this->db->insert('tb_penarikan_deposit', $data);

				 $deposit_kurang = $deposit_saat_ini - $Nominal;
						$data1 = array(
					 			'Nominal_Deposit' => $deposit_kurang
						 );
					 $this->db->where('Id_Deposit', $id_Deposit);
					 $this->db->update('tb_deposit', $data1);
			}

    public function getAllDepositVendor(){

	    $this->db->from('tb_deposit');
      $this->db->order_by('substr(Id_Deposit, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
		}

		public function getAllTambahDepositVendor(){

	    $this->db->from('tb_penambahan_deposit');
      $this->db->order_by('substr(Id_Penambahan_Deposit, 5) + 0');

	    $query = $this->db->get();
	    return $query->result();
		}

		public function getAllTarikDepositVendor(){

	    $this->db->from('tb_penarikan_deposit a');
	    $this->db->join('tb_deposit b','b.Id_Deposit = a.Id_Deposit');
	     $this->db->join('tb_vendor c','b.Id_Vendor = c.Id_Vendor');
       $this->db->order_by('substr(Id_Penarikan_Deposit, 5) + 0');
	    $query = $this->db->get();
	    return $query->result();
    }

    public function getDepositVendor($id){
		$this->db->from('tb_deposit');
		$this->db->where('Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
    }

    public function getDetailVendor($id){
		$this->db->from('tb_vendor');
		$this->db->where('Id_Vendor',$id);

		$query = $this->db->get();
		return $query->result();
    }

    public function editDepositVendor($id_vendor,$id_Deposit,$nominal_deposit,$status_deposit)
    {

       $data = array(
        'Nominal_Deposit'=>  $nominal_deposit,
        'Status_Deposit' =>  $status_deposit,

	);
        	$this->db->where('Id_Deposit', $id_vendor);
			$this->db->update('tb_deposit', $data);
			//print_r($data);
	}
//   public function FunctionName(Type $var = null)
//   {

//   }


}
?>
