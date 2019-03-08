<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Menu');
	    $this->load->helper(array('form', 'url'));
      $this->load->model('Model_Vendor');
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
		$data = $this->Model_Menu->getAllMenu();
		$this->session->set_userdata('all_data',$data);
		$datajm = $this->Model_Menu->getJumlahMenu();
		$this->session->set_userdata('all_datajm',$datajm);

		$this->load->view('admin/menu/list_menu');
	}

	public function inputmenu()
	{
		$data = $this->Model_Vendor->getAllVendor();
		$this->session->set_userdata('all_data',$data);
    $data2 = $this->Model_Menu->getAllMenu();
    $this->session->set_userdata('all_data2',$data2);

		$this->load->view('admin/menu/inputmenu');
	}

	public function prosesinputmenu(){
		    $id_paket 		= $this->input->post('Id_Paket');
        $nama_paket 		= $this->input->post('Nama_Paket');
       	// $gambar_paket			= $this->input->post('Gambar_Paket');
       	$harga_paket				= $this->input->post('Harga_Paket');
        $deskripsi_paket         = $this->input->post('Deskripsi_Paket');
				$kategori_paket = $this->input->post('Kategori_Paket');
        $id_vendor = $this->input->post('Id_Vendor');

				$config['upload_path']          = './gambar/menu/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('Gambar_Paket')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/menu/inputmenu', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$gambar_paket = $data['upload_data']['full_path'];
			$this->Model_Menu->inputmenu($id_paket,$nama_paket,$gambar_paket,$harga_paket,$deskripsi_paket,$kategori_paket,$id_vendor);
		}



        redirect('admin/menu');

	}

	public function editmenu()
	{
		$query['data'] = $this->Model_Menu->getMenu($_GET['Id_Paket']);
		$this->load->view('admin/menu/editmenu',$query);
	}

	// public function detailmenu()
	// {
	// 	$datadf = $this->Model_Menu->getdetailmenu($_GET['Id_Paket']);
	// 	$this->session->set_userdata('all_datadf',$datadf);
	// 	$this->load->view('admin/menu/detailmenu');
	// }

	public function detailmenu()
	{
		$datadf = $this->Model_Menu->getdetailmenu($_GET['Id_Vendor']);
		$this->session->set_userdata('all_datadf',$datadf);
		$this->load->view('admin/menu/detailmenu');
	}

	public function proseseditmenu(){
    $id_paket 		= $this->input->post('Id_Paket');
    $nama_paket 		= $this->input->post('Nama_Paket');
    // $gambar_paket			= $this->input->post('Gambar_Paket');
    $harga_paket				= $this->input->post('Harga_Paket');
    $deskripsi_paket         = $this->input->post('Deskripsi_Paket');
    $kategori_paket = $this->input->post('Kategori_Paket');
    $id_vendor = $this->input->post('Id_Vendor');

		$config['upload_path']          = './gambar/menu/';
$config['allowed_types']        = 'gif|jpg|png';
$config['max_size']             = 100;
$config['max_width']            = 1024;
$config['max_height']           = 768;

$this->load->library('upload', $config);

if ( ! $this->upload->do_upload('Gambar_Paket')){
	$error = array('error' => $this->upload->display_errors());
	$this->load->view('admin/menu/editmenu', $error);
	$gambar_paket = $this->input->post('Foto_Profil_Lama');
	$this->Model_Menu->editmenu($id_paket,$nama_paket,$gambar_paket,$harga_paket,$deskripsi_paket,$kategori_paket,$id_vendor);
}else{
	$data = array('upload_data' => $this->upload->data());
	$gambar_paket = $data['upload_data']['full_path'];
	$this->Model_Menu->editmenu($id_paket,$nama_paket,$gambar_paket,$harga_paket,$deskripsi_paket,$kategori_paket,$id_vendor);
}



      redirect('admin/menu');

	}

	 public function hapusfeedback()
    {
      $id = $_GET['id'];

        $this->Model_Menu->hapusmenu($id);

        //redirect
        redirect('admin/menu');

    }
}
