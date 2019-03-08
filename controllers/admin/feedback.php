<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Feedback extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Feedback');
	    $this->load->helper(array('form', 'url'));
      $this->load->model('Model_Konsumen');
      $this->load->model('Model_Vendor');
			$this->load->model('Model_Rating');
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
		$data = $this->Model_Feedback->getAllFeedback();
		$this->session->set_userdata('all_data',$data);
		$datajf = $this->Model_Feedback->getJumlahFeedback();
		$this->session->set_userdata('all_datajf',$datajf);

		$this->load->view('admin/feedbackrating/listfeedback');
	}

	public function inputfeedback()
	{
		$data = $this->Model_Konsumen->getAllKonsumen();
		$this->session->set_userdata('all_data',$data);
    $data2 = $this->Model_Feedback->getAllFeedback();
    $this->session->set_userdata('all_data2',$data2);
    $data3 = $this->Model_Vendor->getAllVendor();
    $this->session->set_userdata('all_data3',$data3);

		$this->load->view('admin/feedbackrating/inputfeedback');
	}

	public function prosesinputfeedback(){
		    $id_feedback 		= $this->input->post('Id_Feedback');
        $id_konsumen 		= $this->input->post('Id_Konsumen');
       	$id_vendor			= $this->input->post('Id_Vendor');
       	$komentar				= $this->input->post('Komentar');
        $rating         = $this->input->post('Rating');
				$tanggal_feedback = $this->input->post('Tanggal_Feedback');

			$this->Model_Feedback->inputfeedback($id_feedback,$id_konsumen,$id_vendor,$komentar,$rating,$tanggal_feedback);
			$rate = $this->Model_Feedback->getTotalRating($id_vendor);
			foreach ($rate as $key) {
			$this->Model_Rating->editRating($id_vendor,$key);
			}

        redirect('admin/feedback');

	}

	public function editfeedback()
	{
		$query['data'] = $this->Model_Feedback->getFeedback($_GET['Id_Feedback']);
		$this->load->view('admin/feedbackrating/editFeedback',$query);
	}

	public function detailfeedbackvendor()
	{
		$datadf = $this->Model_Feedback->getdetailfeedbackvendor($_GET['Id_Vendor']);
		$this->session->set_userdata('all_datadf',$datadf);
		$this->load->view('admin/feedbackrating/detailfeedbackvendor');
	}

	public function detailfeedback()
	{
		$query['data'] = $this->Model_Feedback->getFeedback
    ($_GET['Id_Vendor']);
		$this->load->view('admin/feedbackrating/detailfeedback',$query);
	}

	public function proseseditfeedback(){
	      $id_feedback 		= $this->input->post('Id_Feedback');
       	$komentar				= $this->input->post('Komentar');
        $rating         = $this->input->post('Rating');
				$tanggal_feedback = $this->input->post('Tanggal_Feedback');
				$status = $this->input->post('Status_feedback');

		 $this->Model_Feedback->editFeedback($id_feedback,$komentar,$rating,$tanggal_feedback,$status);

      redirect('admin/feedback');

	}

	 public function hapusfeedback()
    {
      $id = $_GET['id'];

        $this->Model_Feedback->hapusfeedback($id);

        //redirect
        redirect('admin/feedback');

    }
}
