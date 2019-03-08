<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komplain extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Komplain');
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
		$data = $this->Model_Komplain->getAllKomplain();
		$this->session->set_userdata('all_data',$data);
		

		$this->load->view('admin/komplain/listkomplain');
	}

	public function inputkomplain()
	{	
        $data1 = $this->Model_Komplain->getAllKomplain();
        $this->session->set_userdata('all_data1',$data1);
        $data2 = $this->Model_Konsumen->getAllKonsumen();
        $this->session->set_userdata('all_data2',$data2);

		$this->load->view('admin/komplain/inputkomplain');
	}

	public function prosesinputkomplain(){
	    $id_komplain 		= $this->input->post('Id_Komplain');
        $id_konsumen 		= $this->input->post('Id_Konsumen');
       	$komplain			= $this->input->post('komplain');
        $tanggal            = $this->input->post('tanggal');

		$this->Model_Komplain->inputkomplain($id_komplain,$id_konsumen,$komplain,$tanggal);
			

        redirect('admin/komplain');

	}

	// public function editfeedback()
	// {
	// 	$query['data'] = $this->Model_Feedback->getFeedback($_GET['Id_Feedback']);
	// 	$this->load->view('admin/feedbackrating/editFeedback',$query);
	// }

	// public function detailfeedbackvendor()
	// {
	// 	$datadf = $this->Model_Feedback->getdetailfeedbackvendor($_GET['Id_Vendor']);
	// 	$this->session->set_userdata('all_datadf',$datadf);
	// 	$this->load->view('admin/feedbackrating/detailfeedbackvendor');
	// }

	public function detailkomplain()
	{
        $query['data'] = $this->Model_Komplain->getKomplain($_GET['Id_Komplain']);
		$query['data1'] = $this->Model_Konsumen->getKonsumen($_GET['Id_Konsumen']);        
		$this->load->view('admin/komplain/detailkomplain',$query);
	}

	// public function proseseditfeedback(){
	//       $id_feedback 		= $this->input->post('Id_Feedback');
    //    	$komentar				= $this->input->post('Komentar');
    //     $rating         = $this ->input->post('Rating');

	// 	 $this->Model_Feedback->editFeedback($id_feedback,$komentar,$rating);

    //   redirect('admin/feedback');

	// }

	 public function hapuskomplain()
    {
        $id = $_GET['Id_Komplain'];

        $this->Model_Komplain->hapuskomplain($id);

        //redirect
        redirect('admin/komplain');

    }
}
