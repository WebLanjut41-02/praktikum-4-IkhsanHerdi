<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Banner');
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
		$data = $this->Model_Banner->getAllBanner();
		$this->session->set_userdata('all_data',$data);

		$this->load->view('admin/banner/listbanner');
	}

	public function inputbanner()
	{
		$this->load->view('admin/banner/inputbanner');
	}

  public function prosesinputbanner(){
		$id_banner 			= $this->input->post('Id_Banner');
        $nama_banner 		= $this->input->post('Nama_Banner');
       	$status		= $this->input->post('Status');


       	$config['upload_path']          = './gambar/banner/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('Banner')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/bank/inputbank', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$banner = $data['upload_data']['full_path'];
			$this->Model_Banner->inputBanner($id_banner,$nama_banner,$banner,$status);
		}
  		//print_r($foto);
        redirect('admin/banner');

	}

	public function editbanner()
	{
		$query['data'] = $this->Model_Banner->getBanner($_GET['Id_Banner']);
		$this->load->view('admin/banner/editbanner',$query);
	}

  public function detailbanner()
	{
		$query['data'] = $this->Model_Banner->getBanner($_GET['Id_Banner']);

		$this->load->view('admin/banner/detailbanner',$query);
	}

  public function proseseditbanner(){
    $id_banner 			= $this->input->post('Id_Banner');
        $nama_banner 		= $this->input->post('Nama_Banner');
       	$status		= $this->input->post('Status');


       	$config['upload_path']          = './gambar/bank/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('Banner')){
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('admin/bank/editbank', $error);
      $banner = $this->input->post('Foto_Profil_Lama');
      $this->Model_Banner->editBanner($id_banner,$nama_banner,$banner,$status);
    }else{
      $data = array('upload_data' => $this->upload->data());
      $banner = $data['upload_data']['full_path'];
      $this->Model_Banner->editBanner($id_banner,$nama_banner,$banner,$status);
    }





            redirect('admin/banner');

  }

	 public function hapusbanner()
    {
      $id = $_GET['id'];

        $this->Model_Feedback->hapusfeedback($id);

        //redirect
        redirect('admin/feedback');

    }
}
