<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kurir extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Kurir');
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
		$data = $this->Model_Kurir->getAllKurir();
		$this->session->set_userdata('all_data',$data);
		$datajk = $this->Model_Kurir->getJumlahKurir();
		$this->session->set_userdata('all_datajk',$datajk);

		$this->load->view('admin/kurir/list_kurir');
	}

	public function inputkurir()
	{
		$data = $this->Model_Kurir->getAllKurir();
		$this->session->set_userdata('all_data',$data);
    $data2 = $this->Model_Vendor->getAllVendor();
		$this->session->set_userdata('all_data2',$data2);


		$this->load->view('admin/kurir/inputkurir',array('error' => ' ' ),$data);
	}

	public function detailkurir()
	{
		$datadf = $this->Model_Kurir->getdetailkurir($_GET['Id_Vendor']);
		$this->session->set_userdata('all_datadf',$datadf);
		$this->load->view('admin/kurir/detailkurir');
	}

	public function prosesinputkurir(){
		    $id_kurir 		= $this->input->post('Id_Kurir');
        $id_vendor 		= $this->input->post('Id_Vendor');
       	$nama_kurir				= $this->input->post('Nama_Kurir');
       	$no_telfon_kurir				= $this->input->post('No_Telfon_Kurir');

			$this->Model_Kurir->inputkurir($id_kurir,$id_vendor,$nama_kurir,$no_telfon_kurir);
  		//print_r($foto);
        redirect('admin/kurir');

	}

	public function editkurir()
	{
		$query['data'] = $this->Model_Kurir->getKurir($_GET['Id_Kurir']);
		$this->load->view('admin/kurir/editkurir',$query);
	}

	public function proseseditkurir(){
    $id_kurir 		= $this->input->post('Id_Kurir');
    $id_vendor 		= $this->input->post('Id_Vendor');
    $nama_kurir				= $this->input->post('Nama_Kurir');
    $no_telfon_kurir				= $this->input->post('No_Telfon_Kurir');

			$this->Model_Kurir->editKurir($id_kurir,$id_vendor,$nama_kurir,$no_telfon_kurir);
  		//print_r($foto);
        redirect('admin/kurir');

	}
}
