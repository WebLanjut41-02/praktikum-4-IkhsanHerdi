<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	  {
	    parent::__construct();
	    $this->load->model('Model_Login');
	    $this->load->model('Model_Vendor');
	    $this->load->model('Model_Konsumen');

		$this->load->helper('url');
	    $this->load->helper('form');
	

	    $this->load->library('session');

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
		$this->load->view('login');
	}

	function ceklogin(){
		  if(isset($_POST['login'])){
		   $user 	= $this->input->post('username',true);
		   $pass 	= $this->input->post('password',true);
		   $psw     = md5($pass);
		   $cek 	= $this->Model_Login->proseslogin($user, $psw);

		   $hasil = count($cek);

		   if($hasil > 0){
				    $yglogin = $this->db->get_where('tb_akun',array('Username'=>$user, 'Password' => $psw))->row();
				    
				    if($yglogin->Role == 'Admin'){
				    	
				    	   $data = array('udhmasuk' => true,
					      'Username' => $yglogin->Username, 'Password' => $yglogin->Password, 'Role' => $yglogin->Role);
				
							$this->session->set_userdata('Username', $yglogin->Username);
						   	$_SESSION['data'] = $data;

						   	$data_vendor = $this->Model_Vendor->getJumlahVendor();
						   	$this->session->set_userdata('jumlah_vendor',$data_vendor);
						   	$data_konsumen = $this->Model_Konsumen->getJumlahKonsumen();
						   	$this->session->set_userdata('jumlah_konsumen',$data_konsumen);

								 $pesan = "Login Berhasil";
								 echo "<script type='text/javascript'>alert('$pesan'); </script>";

						    $this->load->view('admin/home');
				    }elseif($yglogin->Role == 'Vendor'){
				    	
				    		$data = array('udhmasuk' => true,
					      'Username' => $yglogin->Username, 'Password' => $yglogin->Password, 'Role' => $yglogin->Role, 'Nama_Wali' => $nama);
					
				   	$_SESSION['data'] = $data;
				   	echo "Hello";
				    }
		   }else{
		   
		    echo "gagal";
		    redirect('login');
		   }
		  }
	}

	public function logout(){

		$this->session->sess_destroy();
		$this->session->unset_userdata('user_id');

		$pesan = "Logout Berhasil";
		echo "<script type='text/javascript'>alert('$pesan'); </script>";
		$this->load->view('login');
		
	
	}
		
	}
