<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pages extends CI_Controller {

        function __construct(){
          parent:: __construct();
          $this->load->model('voter_model', 'm');
          $this->load->helper('url_helper');
        }

        public function view($page = 'home')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $this->load->view('templates/header', $data);
                $this->load->view('pages/'.$page, $data);
                $this->load->view('templates/footer', $data);
        }

        public function voterspage($page = 'voters')
        {
                if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
                {
                        // Whoops, we don't have a page for that!
                        show_404();
                }

                $data['title'] = ucfirst($page); // Capitalize the first letter

                $data['voters'] = $this->m->getVoters();
                $this->load->view('templates/header');
            		$this->load->view('pages/'.$page, $data);
            		$this->load->view('templates/footer');
        }

      	public function index(){
      		$data['voters'] = $this->m->getVoters();
      		$this->load->view('templates/header');
      		$this->load->view('pages/voters', $data);
      		$this->load->view('templates/footer');
      	}

        public function createVoter(){
          $result = $this->m->create();
      		if($result){
      			$this->session->set_flashdata('success_msg', 'Record added successfully');
      		}else{
      			$this->session->set_flashdata('error_msg', 'Fail to add record');
      		}
      		redirect(base_url('pages/voterspage'));
      	}

        public function updateVoter(){
      		$result = $this->m->update();
      		if($result){
      			$this->session->set_flashdata('success_msg', 'Record updated successfully');
      		}else{
      			$this->session->set_flashdata('error_msg', 'Fail to update record');
      		}
      		redirect(base_url('pages/voterspage'));
      	}

        public function deleteVoter(){
      		$result = $this->m->delete();
      		if($result){
      			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
      		}else{
      			$this->session->set_flashdata('error_msg', 'Faill to delete record');
      		}
      		redirect(base_url('pages/voterspage'));
      	}


}
