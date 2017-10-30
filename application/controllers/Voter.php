<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Voter extends CI_Controller{

		function __construct(){
			parent:: __construct();
			$this->load->model('voter_model', 'm');
			$this->load->helper('url_helper');
		}

		function index(){
			echo "HELLO!";
			$data['voters'] = $this->m->getVoters();
			$this->load->view('templates/header');
			$this->load->view('pages/voters', $data);
			$this->load->view('templates/footer');
		}

	// public function add(){
	// 	$this->load->view('layout/header');
	// 	$this->load->view('blog/add');
	// 	$this->load->view('layout/footer');
	// }
	//
	// public function submit(){
	// 	$result = $this->m->submit();
	// 	if($result){
	// 		$this->session->set_flashdata('success_msg', 'Record added successfully');
	// 	}else{
	// 		$this->session->set_flashdata('error_msg', 'Faill to add record');
	// 	}
	// 	redirect(base_url('blog/index'));
	// }
	//
	// public function edit($id){
	// 	$data['blog'] = $this->m->getBlogById($id);
	// 	$this->load->view('layout/header');
	// 	$this->load->view('blog/edit', $data);
	// 	$this->load->view('layout/footer');
	// }
	//
	// public function update(){
	// 	$result = $this->m->update();
	// 	if($result){
	// 		$this->session->set_flashdata('success_msg', 'Record updated successfully');
	// 	}else{
	// 		$this->session->set_flashdata('error_msg', 'Faill to update record');
	// 	}
	// 	redirect(base_url('blog/index'));
	// }
	//
	// public function delete($id){
	// 	$result = $this->m->delete($id);
	// 	if($result){
	// 		$this->session->set_flashdata('success_msg', 'Record deleted successfully');
	// 	}else{
	// 		$this->session->set_flashdata('error_msg', 'Faill to delete record');
	// 	}
	// 	redirect(base_url('blog/index'));
	// }

}
