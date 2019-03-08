<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deposit extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Deposit');
	    $this->load->model('Model_Vendor');
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
		$data = $this->Model_Deposit->getAllDeposit();
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/deposit/listdeposit');
	}

	public function inputDeposit()
	{
		$data = $this->Model_Deposit->getAllDeposit();
		$this->session->set_userdata('all_data',$data);
		$data2 = $this->Model_Vendor->getAllVendor();
		$this->session->set_userdata('all_data2',$data2);

		$this->load->view('admin/deposit/inputDeposit',array('error' => ' ' ));
	}

	// public function prosesinputDeposit(){
	// 	$id_Deposit 		= $this->input->post('Id_Deposit');
 //        $nama_Deposit 		= $this->input->post('Nama_Deposit');
 //       	$no_tlp				= $this->input->post('No_Telfon_Deposit');
 //       	$email				= $this->input->post('Email');

 //       	$config['upload_path']          = './gambar/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size']             = 100;
	// 	$config['max_width']            = 1024;
	// 	$config['max_height']           = 768;
 
	// 	$this->load->library('upload', $config);
 
	// 	if ( ! $this->upload->do_upload('Foto_Profil')){
	// 		$error = display_errors();
	// 		$this->load->view('admin/Deposit/inputDeposit', $error);
	// 		//echo "$error";
	// 	}else{
	// 		$data = array('upload_data' => $this->upload->data());
	// 		$foto = $data['upload_data']['full_path'];
	// 		$this->Model_Deposit->inputDeposit($id_Deposit,$nama_Deposit,$no_tlp,$email,$foto);
	// 	}
 //  		//print_r($foto);
 //        redirect('admin/Deposit');

	// }

	// public function editDeposit()
	// {
	// 	$query['data'] = $this->Model_Deposit->getDeposit($_GET['Id_Deposit']);
	// 	$this->load->view('admin/Deposit/editDeposit',$query);
	// }

	// public function detailDeposit()
	// {
	// 	$query['data'] = $this->Model_Deposit->getDeposit($_GET['Id_Deposit']);

	// 	$this->load->view('admin/Deposit/detailDeposit',$query);
	// }

	// public function proseseditDeposit(){
	// $id_Deposit 		= $this->input->post('Id_Deposit');
 //        $nama_Deposit 		= $this->input->post('Nama_Deposit');
 //       	$no_tlp				= $this->input->post('No_Telfon_Deposit');
 //       	$email				= $this->input->post('Email');

 //      	$config['upload_path']          = './gambar/';
	// 	$config['allowed_types']        = 'gif|jpg|png';
	// 	$config['max_size']             = 100;
	// 	$config['max_width']            = 1024;
	// 	$config['max_height']           = 768;
 
	// 	$this->load->library('upload', $config);

	// 	 if ( ! $this->upload->do_upload('Foto_Profil')){
	// 		$error = array('error' => $this->upload->display_errors());
	// 		$this->load->view('admin/Deposit/editDeposit', $error);
	// 		$foto = $this->input->post('Foto_Profil_Lama');
	// 		$this->Model_Deposit->editDeposit($id_Deposit,$nama_Deposit,$no_tlp,$email,$foto);
	// 	}else{
	// 		$data = array('upload_data' => $this->upload->data());
	// 		$foto = $data['upload_data']['full_path'];
	// 		$this->Model_Deposit->editDeposit($id_Deposit,$nama_Deposit,$no_tlp,$email,$foto);
	// 	}
 //  		//print_r($foto);
 //        redirect('admin/Deposit');

	// }

	//  public function hapusDeposit()
 //    {
 //      $id = $_GET['id'];

 //        $this->Model_Deposit->hapusDeposit($id);

 //        //redirect
 //        redirect('admin/Deposit');

 //    }
	// public function updatestatus(){
	// 	$this->load->view('admin/Deposit/updatestatusDeposit');
	// }
}