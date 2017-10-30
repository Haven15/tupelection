<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class election extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('election_model', 'e');
        $this->load->model('voter_model', 'v');
        $this->load->model('ballot_model', 'b');
        $this->load->helper('url_helper');
    }

    public function overview($slug = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/overview', $data);
        $this->load->view('templates/admin_footer');
    }

    public function voters($slug = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['voters'] = $this->v->getVotersPerElection($slug);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/voters', $data);
        $this->load->view('templates/admin_footer');
    }

    public function dashboard($page = 'dashboard')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['elections'] = $this->e->getElections();
        $this->load->view('templates/header');
        $this->load->view('election/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function sort($page = 'dashboard')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['elections'] = $this->e->getSortedElections();
        $this->load->view('templates/header');
        $this->load->view('election/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function new($page = 'new')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $this->load->view('templates/header');
        $this->load->view('election/'.$page, $data);
        $this->load->view('templates/footer');
    }

    public function voterspage($page = 'voters')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter
        $data['voters'] = $this->v->getVoters();
        $this->load->view('templates/header');
    		$this->load->view('election/'.$page, $data);
    		$this->load->view('templates/footer');
    }

    public function newvoter($page = 'newvoter')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['courses'] = $this->v->getCourse();
        $this->load->view('templates/header');
    		$this->load->view('election/'.$page, $data);
    		$this->load->view('templates/footer');
    }

    public function addvoter($slug = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            show_404();
        }

        $data['voters'] = $this->v->getAllVoterID();
        $data['courses'] = $this->v->getAllVoterCourse();
        $data['eligiblevoters'] = $this->v->getEligibleVoters($slug);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/addvoter', $data);
        $this->load->view('templates/admin_footer');
    }

    public function editvoter($page = 'editvoter')
    {
        if ( ! file_exists(APPPATH.'views/election/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['voters'] = $this->v->getVoters();
        $this->load->view('templates/header');
    		$this->load->view('election/'.$page, $data);
    		$this->load->view('templates/footer');
    }

    public function voteractivity($slug = NULL, $voterID = null)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            // Whoops, we don't have a page for that!
            show_404();
        }

        $data['voters'] = $this->v->getVotersPerElection($slug);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/voteractivity', $data);
        $this->load->view('templates/admin_footer');
    }

    public function createballot($slug = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            show_404();
        }

        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/createballot', $data);
        $this->load->view('templates/admin_footer');
    }

    public function ballot($slug = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            show_404();
        }

        $data['ballots'] = $this->b->getBallot($slug);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/ballot', $data);
        $this->load->view('templates/admin_footer');
    }

    public function candidates($slug = NULL, $ballot = NULL)
    {
        $data['election_data'] = $this->e->get_election($slug);
        if (empty($data['election_data']))
        {
            show_404();
        }

        $data['candidates'] = $this->b->getCandidates($slug, $ballot);
        $data['positions'] = $this->b->getPosition($slug, $ballot);
        $this->load->view('templates/admin_header', $data);
        $this->load->view('admin/candidates', $data);
        $this->load->view('templates/admin_footer');
    }


    public function edit($id){
    		$data['voters'] = $this->v->getVoterById($id);
        $data['courses'] = $this->v->getCourse();
    		$this->load->view('templates/header');
    		$this->load->view('election/editvoter', $data);
    		$this->load->view('templates/footer');
  	}

    public function create()
    {
        $result = $this->e->CreateElection();
        if($result){
    			  $this->session->set_flashdata('success_msg', 'Election Successfully Created.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Fail to Create Election.');
    		}
        redirect(base_url('election/dashboard'));
    }

    public function createVoter(){
        $result = $this->v->create();
    		if($result){
    			  $this->session->set_flashdata('success_msg', 'Record added successfully.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Fail to add record.');
    		}
    		redirect(base_url('election/voterspage'));
  	}

    public function updateVoter(){
    		$result = $this->v->updatevoter();
    		if($result){
    			  $this->session->set_flashdata('success_msg', 'Record updated successfully.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Fail to update record.');
    		}
    		redirect(base_url('election/voterspage'));
  	}

    public function deleteVoter(){
    		$result = $this->v->delete();
    		if($result){
    			  $this->session->set_flashdata('success_msg', 'Record deleted successfully.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Faill to delete record.');
    		}
    		redirect(base_url('election/voterspage'));
  	}

    public function addVoterID($id){
        $result = $this->v->addVoterbyID($id);
        if ($result == '1'){
            $this->session->set_flashdata('error_msg', 'Fail to Add Record.');
        }else if($result == '2'){
            $this->session->set_flashdata('success_msg', 'Voter added successfully.');
        }else if($result == '3'){
    		    $this->session->set_flashdata('error_msg', 'Voter already exists.');
    		}
    		redirect(base_url('election/voters/'.$id));
  	}

    public function addVoterCourse($id){
        $result = $this->v->addVoterbyCourse($id);
    		if($result){
    			  $this->session->set_flashdata('success_msg', 'Record added successfully.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Fail to add record.');
    		}
    		redirect(base_url('election/addvoter/'.$id));
  	}

    public function deleteVoterCourse($id){
        $result = $this->v->deleteEligibleVoter($id);
    		if($result){
    			  $this->session->set_flashdata('success_msg', 'Record added successfully.');
    		}else{
    			  $this->session->set_flashdata('error_msg', 'Fail to add record.');
    		}
    		redirect(base_url('election/addvoter/'.$id));
  	}

    public function deletePerVoter($id){
    		$result = $this->v->deleteVoterPerElection($id);
    		if($result){
    			$this->session->set_flashdata('success_msg', 'Record deleted successfully.');
    		}else{
    			$this->session->set_flashdata('error_msg', 'Fail to delete record.');
    		}
    		redirect(base_url('election/voters/'.$id));
  	}

    public function deleteAllVoters($id){
    		$result = $this->v->deleteAllVoters($id);
    		if($result){
    			$this->session->set_flashdata('success_msg', 'Record deleted successfully.');
    		}else{
    			$this->session->set_flashdata('error_msg', 'Fail to delete record.');
    		}
    		redirect(base_url('election/voters/'.$id));
  	}
}

?>
