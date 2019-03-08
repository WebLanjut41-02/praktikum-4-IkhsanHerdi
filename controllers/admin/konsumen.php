<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Konsumen');
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
		$data = $this->Model_Konsumen->getAllKonsumen();
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/konsumen/list_konsumen');
	}

	public function inputkonsumen()
	{
		$data = $this->Model_Konsumen->getAllKonsumen();
		$this->session->set_userdata('all_data',$data);

		$this->load->view('admin/konsumen/inputkonsumen',array('error' => ' ' ),$data);
	}

	public function prosesinputkonsumen(){
		$id_konsumen 		= $this->input->post('Id_Konsumen');
        $nama_konsumen 		= $this->input->post('Nama_Konsumen');
       	$no_tlp				= $this->input->post('No_Telfon_Konsumen');
       	$email				= $this->input->post('Email');

       	$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);
 
		if ( ! $this->upload->do_upload('Foto_Profil')){
			$error = display_errors();
			$this->load->view('admin/konsumen/inputkonsumen', $error);
			//echo "$error";
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $data['upload_data']['full_path'];
			$this->Model_Konsumen->inputKonsumen($id_konsumen,$nama_konsumen,$no_tlp,$email,$foto);
		}
  		//print_r($foto);
        redirect('admin/konsumen');

	}

	public function editkonsumen()
	{
		$query['data'] = $this->Model_Konsumen->getKonsumen($_GET['Id_Konsumen']);
		$this->load->view('admin/konsumen/editkonsumen',$query);
	}

	public function detailkonsumen()
	{
		$query['data'] = $this->Model_Konsumen->getKonsumen($_GET['Id_Konsumen']);	

		$this->load->view('admin/konsumen/detailkonsumen',$query);
	}

	public function proseseditkonsumen(){
	$id_konsumen 		= $this->input->post('Id_Konsumen');
        $nama_konsumen 		= $this->input->post('Nama_Konsumen');
       	$no_tlp				= $this->input->post('No_Telfon_Konsumen');
       	$email				= $this->input->post('Email');

      	$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
 
		$this->load->library('upload', $config);

		 if ( ! $this->upload->do_upload('Foto_Profil')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/konsumen/editkonsumen', $error);
			$foto = $this->input->post('Foto_Profil_Lama');
			$this->Model_Konsumen->editKonsumen($id_konsumen,$nama_konsumen,$no_tlp,$email,$foto);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $data['upload_data']['full_path'];
			$this->Model_Konsumen->editKonsumen($id_konsumen,$nama_konsumen,$no_tlp,$email,$foto);
		}
  		//print_r($foto);
        redirect('admin/konsumen');

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