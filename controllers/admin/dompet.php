<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dompet extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Dompet');
	    $this->load->helper(array('form', 'url'));
      $this->load->model('Model_Konsumen');

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
		$data = $this->Model_Dompet->getAllDompet();
		$this->session->set_userdata('all_data',$data);
		$this->load->view('admin/dompet/list_dompet');
	}

	public function inputdompet()
	{
		$data = $this->Model_Dompet->getAllDompet();
		$this->session->set_userdata('all_data',$data);
    $data2 = $this->Model_Konsumen->getAllKonsumen();
		$this->session->set_userdata('all_data2',$data2);


		$this->load->view('admin/dompet/inputdompet',array('error' => ' ' ),$data);
	}

	public function prosesinputdompet(){
		    $id_dompet 		= $this->input->post('Id_Dompet');
        $id_konsumen 		= $this->input->post('Id_Konsumen');
       	$nominal_dompet			= $this->input->post('Nominal_Dompet');

			$this->Model_Dompet->inputdompet($id_dompet,$id_konsumen,$nominal_dompet);
  		//print_r($foto);
        redirect('admin/dompet');

	}

	public function editdompet()
	{
		$query['data'] = $this->Model_Dompet->getDompet($_GET['Id_Dompet']);
		$this->load->view('admin/dompet/editdompet',$query);
	}

	public function proseseditdompet(){
    $id_dompet 		= $this->input->post('Id_Dompet');
    $id_konsumen 		= $this->input->post('Id_Konsumen');
    $nominal_dompet			= $this->input->post('Nominal_Dompet');

			$this->Model_Dompet->editdompet($id_dompet,$id_konsumen,$nominal_dompet);
  		//print_r($foto);
        redirect('admin/dompet');

	}
}
