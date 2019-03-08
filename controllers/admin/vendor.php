<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Vendor');
		$this->load->model('Model_Akun');
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
		$this->load->view('admin/vendor/list_vendor');
	}

	public function inputvendor()
	{
		$data = $this->Model_Vendor->getAllvendor();
		$this->session->set_userdata('all_data',$data);
		$data2 = $this->Model_Akun->getAllAkun();
		$this->session->set_userdata('all_data2',$data2);
		$this->load->view('admin/vendor/inputvendor');
	}

	public function prosesinputvendor(){
		$id_vendor      = $this->input->post('Id_Vendor');
        $nama_vendor    = $this->input->post('Nama_Vendor');
        $kategori_vendor  = $this->input->post('Kategori_Vendor');
        $no_tlp       = $this->input->post('No_Telfon_Vendor');
        $email        = $this->input->post('Email');
        $alamat_vendor    = $this->input->post('Alamat_Vendor');
        $deskripsi_vendor = $this->input->post('Deskripsi_Vendor');
        $nama_pemilik   = $this->input->post('Nama_Pemilik');
        $no_ktp       = $this->input->post('No_KTP');
   		$kuota_pemesanan  = $this->input->post('Kuota_Pemesanan');
        $status_vendor    = $this->input->post('Status_Vendor');
        $id_akun      = $this->input->post('Id_Akun');
        

        $id_akun 		= $this->input->post('Id_Akun');
        $username 		= $this->input->post('Username');
       	$password		= $this->input->post('Password');
       	$psw			= md5($password);
       	$role			= 'Vendor';
       	$aktifitas_akun = 'offline';
       	$status_akun	= 'aktif';
       	$created		= date("Y-m-d H:i:s");
       	$updated		= 'null';
       	$deleted		= 'null';


       	$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('Foto_Profil_Vendor')){
			$error = "FORMAT FOTO SALAH, COBA FOTO YANG LAIN";
			//array('error' => $this->upload->display_errors())
			$this->load->view('admin/vendor/inputvendor', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $data['upload_data']['full_path'];
			$this->Model_Akun->inputakun($id_akun,$username,$psw,$role,$aktifitas_akun,$status_akun,$created,$updated,$deleted);
			$this->Model_Vendor->inputVendor($id_vendor,$nama_vendor,$kategori_vendor,$no_tlp,$email,$alamat_vendor,$deskripsi_vendor,$foto,$nama_pemilik,$no_ktp,$kuota_pemesanan,$status_vendor,$id_akun,$status_akun);
			
		}
  		//print_r($foto);
        redirect('admin/vendor');

	}
	public function editvendor()
	{
		$query['data'] = $this->Model_Vendor->getVendor($_GET['Id_Vendor']);
		$this->load->view('admin/vendor/editvendor',$query);
	}

	public function detailvendor()
	{
		$query['data'] = $this->Model_Vendor->getVendor($_GET['Id_Vendor']);

		$this->load->view('admin/vendor/detailvendor',$query);
	}

	public function proseseditvendor(){
		$id_vendor      	= $this->input->post('Id_Vendor');
        $nama_vendor    	= $this->input->post('Nama_Vendor');
        $kategori_vendor  	= $this->input->post('Kategori_Vendor');
        $no_tlp       		= $this->input->post('No_Telfon_Vendor');
        $email        		= $this->input->post('Email');
        $alamat_vendor    	= $this->input->post('Alamat_Vendor');
        $deskripsi_vendor 	= $this->input->post('Deskripsi_Vendor');
        $nama_pemilik   	= $this->input->post('Nama_Pemilik');
        $no_ktp       		= $this->input->post('No_KTP');
   		$kuota_pemesanan  	= $this->input->post('Kuota_Pemesanan');
        $status_vendor    	= $this->input->post('Status_Vendor');
        $id_akun      		= $this->input->post('Id_Akun');
        

        $id_akun 		= $this->input->post('Id_Akun');
        $username 		= $this->input->post('Username');
       	$password		= $this->input->post('Password');
       	$psw			= md5($password);
       	$role			= 'Vendor';
       	$aktifitas_akun = 'offline';
       	$status_akun	= 'aktif';
       	$created		= $this->input->post('created_at');
       	$updated		= date("Y-m-d H:i:s");
       	$deleted		= 'null';

      	$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('Foto_Profil_Vendor')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/vendor/editvendor', $error);
			$foto = $this->input->post('Foto_Profil_Lama');
			$this->Model_Vendor->editVendor($id_vendor,$nama_vendor,$kategori_vendor,$no_tlp,$email,$alamat_vendor,$deskripsi_vendor,$foto,$nama_pemilik,$no_ktp,$kuota_pemesanan,$status_vendor,$id_akun,$status_akun);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $data['upload_data']['full_path'];
			$this->Model_Akun->editAkun($id_akun,$username,$psw,$role,$aktifitas_akun,$status_akun,$created,$updated,$deleted);
			$this->Model_Vendor->editVendor($id_vendor,$nama_vendor,$kategori_vendor,$no_tlp,$email,$alamat_vendor,$deskripsi_vendor,$foto,$nama_pemilik,$no_ktp,$kuota_pemesanan,$status_vendor,$id_akun,$status_akun);

		}

            redirect('admin/vendor');

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
