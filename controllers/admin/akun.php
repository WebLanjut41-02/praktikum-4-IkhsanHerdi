<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
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
		$data = $this->Model_Akun->getAllAkun();
		$this->session->set_userdata('all_data',$data);
		
		$this->load->view('admin/akun/list_akun');
	}

	public function inputakun()
	{
		$data = $this->Model_Akun->getAllAkun();
		$this->session->set_userdata('all_data',$data);
   
		$this->load->view('admin/akun/inputakun');
	}

	public function detailakun()
	{
		$query['data'] = $this->Model_Akun->getAkun($_GET['Id_Akun']);
		
		$this->load->view('admin/akun/detailakun',$query);
	}

	public function prosesinputakun(){
		$id_akun 		= $this->input->post('Id_Akun');
        $username 		= $this->input->post('Username');
       	$password		= $this->input->post('Password');
       	$psw			= md5($password);
       	$role			= $this->input->post('Role');
       	$aktifitas_akun = 'offline';
       	$status_akun	= 'aktif';
       	$created		= date("Y-m-d H:i:s");
       	$updated		= 'null';
       	$deleted		= 'null';

			$this->Model_Akun->inputakun($id_akun,$username,$psw,$role,$aktifitas_akun,$status_akun,$created,$updated,$deleted);
  		//print_r($foto);
        redirect('admin/akun');

	}

	public function editakun()
	{
		$query['data'] = $this->Model_Akun->getAkun($_GET['Id_Akun']);
		$this->load->view('admin/akun/editakun',$query);
	}

	public function proseseditakun(){
		$id_akun 		= $this->input->post('Id_Akun');
        $username 		= $this->input->post('Username');
        $role			= $this->input->post('Role');
        $status_akun	= $this->input->post('Status_Akun');
   
			$this->Model_Akun->editAkun($id_akun,$username,$role,$status_akun);
  		//print_r($foto);
        redirect('admin/akun');

	}
}
