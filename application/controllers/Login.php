<?php 

class Login extends CI_Controller {
	
	function __construct(){
          parent:: __construct();
          $this->load->model('login_model');
          $this->load->helper('url_helper');
        }
		
	function index()
	{
		$data['main_content']='login/login_form';
		$this->load->view('templates/template', $data );
	}
	
	function validate_credentials()
	{	

		$query = $this->login_model->validate();
		
		if($query)
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('../election/dashboard');
		}else{
			$this->session->set_flashdata('error_msg', 'Username or Password is incorrect.');
			$this->index();
		}
		
	}
	
	public function logout()
	{	
		$this->session->unset_userdata($data);
		$this->session->sess_destroy();
		redirect('../login/index');
	} 

}
?>