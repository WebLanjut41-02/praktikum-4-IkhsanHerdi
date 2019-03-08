<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depositvendor extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
		$this->load->model('Model_Vendor');
	    $this->load->model('Model_DepositVendor');		
	    $this->load->helper(array('form', 'url'));
	  }
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = $this->Model_Vendor->getAllvendor();
		
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/depositvendor/list_vendor');
	}

	

	public function inputdepositvendor()
	{
		// $data = $this->Model_Vendor->getAllvendor();
		$data = $this->Model_DepositVendor->getAllDepositVendor();
		$query['dataid'] = $this->Model_Vendor->getVendor($_GET['Id_Vendor']);
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/depositvendor/Inputdepositvendor',$query);
	}

	public function prosesinputdepositvendor()
	{
		$id_vendor 			= $this->input->post('Id_Vendor');
		$id_Deposit 		= $this->input->post('Id_deposit');
		$Nominal 			= $this->input->post('Nominal');
		$status 			= $this->input->post('Status');

		$this->Model_DepositVendor->inputDepositvendor($id_Deposit,$id_vendor,$Nominal,$status);
		redirect('admin/depositvendor');
	}

	public function prosestambahdepositvendor()
	{
		$id_penambahan 		= $this->input->post('Id_Penambahan');
		$id_Deposit 		= $this->input->post('Id_deposit');
		$Nominal 	        = $this->input->post('Nominal');
		$tanggal 			= date("Y-m-d H:i:s");
		$waktu				= date("Y-m-d H:i:s");
		$deposit_saat_ini	= $this->input->post('Nominal_saat_ini');

		$this->Model_DepositVendor->tambahDepositvendor($id_penambahan,$id_Deposit,$Nominal,$tanggal,$waktu,$deposit_saat_ini);
		redirect('admin/depositvendor');
	}

	public function prosestarikdepositvendor()
	{
		$id_penarikan 		= $this->input->post('Id_Penarikan');
		$id_Deposit 		= $this->input->post('Id_deposit');
		$Nominal 	        = $this->input->post('Nominal');
		$tanggal 			= date("Y-m-d H:i:s");
		$waktu				= date("Y-m-d H:i:s");
		$deposit_saat_ini	= $this->input->post('Nominal_saat_ini');

		$this->Model_DepositVendor->tarikDepositvendor($id_penarikan,$id_Deposit,$Nominal,$tanggal,$waktu,$deposit_saat_ini);
		redirect('admin/depositvendor');
	}

	public function detaildepositvendor()
	{
		$query['data'] = $this->Model_DepositVendor->getDepositVendor($_GET['Id_Vendor']);
		$query['dataV'] = $this->Model_DepositVendor->getDetailVendor($_GET['Id_Vendor']);
		

		$this->load->view('admin/depositvendor/detaildepositvendor',$query);
	}

	public function tambahdepositvendor()
	{
		$query['data'] = $this->Model_DepositVendor->getDepositVendor($_GET['Id_Vendor']);
		
		$data = $this->Model_DepositVendor->getAllTambahDepositVendor();
		$this->session->set_userdata('all_data1',$data);
		$this->load->view('admin/depositvendor/tambahdepositvendor',$query);
	}

	public function tarikdepositvendor()
	{
		$query['data'] = $this->Model_DepositVendor->getDepositVendor($_GET['Id_Vendor']);
		
		$data = $this->Model_DepositVendor->getAllTarikDepositVendor();
		$this->session->set_userdata('all_data1',$data);
		$this->load->view('admin/depositvendor/tarikdepositvendor',$query);
	}


	public function editdepositvendor()
	{
		$query['data'] = $this->Model_DepositVendor->getDepositVendor($_GET['Id_Vendor']);
		$query['dataV'] = $this->Model_DepositVendor->getDetailVendor($_GET['Id_Vendor']);

		$this->load->view('admin/depositvendor/editdepositvendor',$query);
	}

	public function historytarikdeposit()
	{
		$data = $this->Model_DepositVendor->getAllTarikDepositVendor();
		
		$this->session->set_userdata('all_data',$data);

		$this->load->view('admin/depositvendor/list_history_penarikan');
	}

	public function proseseditvendor(){
		$id_vendor 			= $this->input->post('Id_Vendor');
        $id_Deposit 		= $this->input->post('Id_deposit');
		$nominal_deposit	= $this->input->post('Nominal');
		$status_deposit		= $this->input->post('Status');
       	
        
            $this->Model_DepositVendor-> editDepositVendor($id_vendor,$id_Deposit,$nominal_deposit,$status_deposit);
           
            redirect('admin/depositvendor');

	}

	

	//  public function hapusvendor()
 //    {
 //      $id = $_GET['id'];

 //        $this->Model_Vendor->hapusvendor($id);

 //        //redirect
 //        redirect('admin/vendor');

 //    }
	// public function updatestatus(){
	// 	$this->load->view('admin/vendor/updatestatusvendor');
	// }
}