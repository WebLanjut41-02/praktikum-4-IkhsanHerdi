<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Transaksi');
		$this->load->model('Model_Bank');
		$this->load->model('Model_Kurir');
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
		$data = $this->Model_Transaksi->getAllPesanan();
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/transaksi/list_pesanan');
	}

	public function detailpesanan()
	{
		$query['data'] = $this->Model_Transaksi->getPesanan($_GET['Id_Pesanan']);
		$query['datak'] = $this->Model_Kurir->getKurir($_GET['Id_Kurir']);


		$this->load->view('admin/transaksi/detailpesanan',$query);
	}

	public function pembayaran()
	{
		$data = $this->Model_Transaksi->getAllPembayaran();
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/transaksi/list_pembayaran');
	}

	public function detailpembayaran()
	{
		$query['data'] = $this->Model_Transaksi->getPembayaran($_GET['Id_Pembayaran']);
		$query['datak'] = $this->Model_Kurir->getKurir($_GET['Id_Kurir']);
		$this->load->view('admin/transaksi/detailpembayaran',$query);
	}

	public function inputpembayaran()
	{
		$data = $this->Model_Transaksi->getAllPembayaran();
		$this->session->set_userdata('all_data',$data);
		$data2 = $this->Model_Transaksi->getAllPesanan();
		$this->session->set_userdata('all_data_pesanan',$data2);
		$data3 = $this->Model_Bank->getAllBank();
		$this->session->set_userdata('all_data_bank',$data3);

		$this->load->view('admin/transaksi/inputpembayaran');
	}

	public function prosesinputpembayaran(){
		$id_pembayaran		= $this->input->post('Id_Pembayaran');
		$id_bank		= $this->input->post('Id_Bank');
		$id_pesanan		= $this->input->post('Id_Pesanan');
        $total_tagihan 		= $this->input->post('Total_Tagihan');
       	$tanggal_pembayaran			= $this->input->post('Tanggal_Pembayaran');
       	$waktu_pembayaran				= $this->input->post('Waktu_Pembayaran');
       	$status_pembayaran				= $this->input->post('Status');

			$this->Model_Transaksi->inputPembayaran($id_pembayaran,$id_bank,$id_pesanan,$total_tagihan,$tanggal_pembayaran,$waktu_pembayaran,$status_pembayaran);
		
  		//print_r($foto);
        redirect('admin/transaksi/pembayaran');

	}

	public function editpembayaran()
	{
		$data['data'] = $this->Model_Transaksi->getPembayaran($_GET['Id_Pembayaran']);
		$this->session->set_userdata('all_data',$data);
		$data2 = $this->Model_Transaksi->getAllPesanan();
		$this->session->set_userdata('all_data_pesanan',$data2);

		$data3 = $this->Model_Bank->getAllBank();
		$this->session->set_userdata('all_data_bank',$data3);

		$this->load->view('admin/transaksi/editpembayaran',$data);
	}

	

	public function proseseditpembayaran(){
	$id_pembayaran		= $this->input->post('Id_Pembayaran');
		$id_bank		= $this->input->post('Id_Bank');
		$id_pesanan		= $this->input->post('Id_Pesanan');
        $total_tagihan 		= $this->input->post('Total_Tagihan');
       	$tanggal_pembayaran			= $this->input->post('Tanggal_Pembayaran');
       	$waktu_pembayaran				= $this->input->post('Waktu_Pembayaran');
       	$status_pembayaran				= $this->input->post('Status');

			$this->Model_Transaksi->editPembayaran($id_pembayaran,$id_bank,$id_pesanan,$total_tagihan,$tanggal_pembayaran,$waktu_pembayaran,$status_pembayaran);

		   redirect('admin/transaksi/pembayaran');

	}

	//  public function hapuskonsumen()
 //    {
 //      $id = $_GET['id'];

 //        $this->Model_konsumen->hapuskonsumen($id);

 //        //redirect
 //        redirect('admin/konsumen');

 //    }
	// public function updatestatus(){
	// 	$this->load->view('admin/konsumen/updatestatuskonsumen');
	// }
}