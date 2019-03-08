<?php defined('BASEPATH') OR exit('No direct script access allowed');

class feedback_konsumen extends MY_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_FeedbackKonsumen');
        
	    $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data = $this->Model_FeedbackKonsumen->getAllFeedback();
        $this->session->set_userdata('all_data',$data);
        
		
		$this->load->view('admin/akun/list_akun');
    }

    public function detailakun()
	{
		$query['data'] = $this->Model_FeedbackKonsumen->getFeedback($_GET['Id_Feedback']);

		$this->load->view('admin/akun/detailakun',$query);
	}
    
   
    
}

?>