<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Bank');
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
		$data = $this->Model_Bank->getAllBank();
		$this->session->set_userdata('all_data',$data);

		$this->load->view('admin/bank/listbank');
	}

	public function inputbank()
	{
		$this->load->view('admin/bank/inputbank');
	}

  public function prosesinputbank(){
		$id_bank 			= $this->input->post('Id_Bank');
        $nama_bank 		= $this->input->post('Nama_Bank');
       	$no_rekening		= $this->input->post('No_Rekening');
       	$deskripsi			= $this->input->post('Deskripsi');


       	$config['upload_path']          = './gambar/bank/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('Logo_Bank')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin/bank/inputbank', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$logo_bank = $data['upload_data']['full_path'];
			$this->Model_Bank->inputBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
		}
  		//print_r($foto);
        redirect('admin/bank');

	}

	public function editbank()
	{
		$query['data'] = $this->Model_Bank->getBank($_GET['Id_Bank']);
		$this->load->view('admin/bank/editbank',$query);
	}

  public function detailbank()
	{
		$query['data'] = $this->Model_Bank->getBank($_GET['Id_Bank']);

		$this->load->view('admin/bank/detailbank',$query);
	}

  public function proseseditbank(){
    $id_bank 			= $this->input->post('Id_Bank');
        $nama_bank 		= $this->input->post('Nama_Bank');
       	$no_rekening		= $this->input->post('No_Rekening');
       	$deskripsi			= $this->input->post('Deskripsi');


       	$config['upload_path']          = './gambar/bank/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload('Logo_Bank')){
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('admin/bank/editbank', $error);
      $logo_bank = $this->input->post('Foto_Profil_Lama');
      $this->Model_Bank->editBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
    }else{
      $data = array('upload_data' => $this->upload->data());
      $logo_bank = $data['upload_data']['full_path'];
      $this->Model_Bank->editBank($id_bank,$nama_bank,$no_rekening,$deskripsi,$logo_bank);
    }





            redirect('admin/bank');

  }

	 public function hapusbank()
    {
      $id = $_GET['id'];

        $this->Model_Feedback->hapusfeedback($id);

        //redirect
        redirect('admin/feedback');

    }
}
