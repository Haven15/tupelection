<?php

class Login extends CI_Controller {

	function __construct(){
          parent:: __construct();
					$this->load->model('admin_model', 'a');
          $this->load->model('login_model', 'l');
          $this->load->helper('url_helper');
        }

	function index()
	{
		$data['main_content']='login/login_form';
		$this->load->view('templates/template', $data );
	}

	function validate_credentials()
	{

		$query = $this->l->validate();
		$username = $this->input->post('username');
		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in_voter' => true
			);

			$this->session->set_userdata($data);
			redirect('../vote/electionlist/'.$username);
		}else{
			$this->session->set_flashdata('error_msg', 'Voter ID or Password is incorrect.');
			$this->index();
		}

	}

	function validate_admin()
	{
		$query = $this->a->validate();

		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in_admin' => true
			);

			$this->session->set_userdata($data);
			redirect('../election/dashboard');
		}

		else{

			$this->session->set_flashdata('error_msg','Username or Password is incorrect.');
			$this->adminlogin();

		}
	}

	public function adminlogin(){
		$this->load->view('templates/login_header');
		$this->load->view('login/admin_login');
		$this->load->view('templates/login_footer');
	}

	public function logout()
	{
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('../login/index');
	}

	public function logout_admin()
	{
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('../login/adminlogin');
	}

}
?>
