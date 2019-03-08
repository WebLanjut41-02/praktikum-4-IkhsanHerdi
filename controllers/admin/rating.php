<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class rating extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Rating');
	    $this->load->helper(array('form', 'url'));
	    $this->load->model('Model_Vendor');
			$this->load->model('Model_Feedback');
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
		$data = $this->Model_Rating->getAllRating();
		$data2 = $this->Model_Rating->getJumlahRating();
		$data3 = $this->Model_Feedback->getJumlahFeedback();
		$this->session->set_userdata('all_data2',$data2);
		$this->session->set_userdata('all_data',$data);
		$this->session->set_userdata('all_data3',$data3);
  	$this->load->view('admin/rating/list_rating');

	}
}
