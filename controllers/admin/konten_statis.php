<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konten_statis extends MY_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Konten_Statis');
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
		$data = $this->Model_Konten_Statis->getAllKonten_Statis();
		$this->session->set_userdata('all_data',$data);

		$this->load->view('admin/konten_statis/listkontenstatis');
	}

	public function inputkontenstatis()
	{
		$this->load->view('admin/konten_statis/inputkontenstatis');
	}

  public function prosesinputkontenstatis(){
		$id_konten_statis 			= $this->input->post('Id_Konten_Statis');
        $judul 		= $this->input->post('Judul');
       	$konten		= $this->input->post('Konten');

			$this->Model_Konten_Statis->inputKonten_Statis($id_konten_statis,$judul,$konten);

  		//print_r($foto);
        redirect('admin/konten_statis');

	}

	public function editkontenstatis()
	{
		$query['data'] = $this->Model_Konten_Statis->getKonten_Statis($_GET['Id_Konten_Statis']);
		$this->load->view('admin/konten_statis/editkontenstatis',$query);
	}

  public function detailkontenstatis()
	{
		$query['data'] = $this->Model_Konten_Statis->getKonten_Statis($_GET['Id_Konten_Statis']);

		$this->load->view('admin/konten_statis/detailkontenstatis',$query);
	}

  public function proseseditkontenstatis(){
        $id_konten_statis 			= $this->input->post('Id_Konten_Statis');
            $judul 							= $this->input->post('Judul');
            $konten							= $this->input->post('Konten');

          $this->Model_Konten_Statis->editKonten_Statis($id_konten_statis,$judul,$konten);

            redirect('admin/konten_statis');

  }

	 public function hapuskontenstatis()
    {
      $id = $_GET['id'];

        $this->Model_Feedback->hapuskontenstatis($id);

        //redirect
        redirect('admin/konten_statis');

    }
}
