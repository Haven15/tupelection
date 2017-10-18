<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vote extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('election_model', 'e');
        $this->load->model('vote_model', 'v');
        $this->load->helper('url_helper');
    }

    function electionlist($voterID){
        $data['elections'] = $this->e->getElections();
        if (empty($data['elections']))
        {
            show_404();
        }
        $data['voter'] = $this->v->get_voter($voterID);
        $this->load->view('templates/vote_header', $data);
        $this->load->view('votepage/electionlist', $data);
        $this->load->view('templates/vote_footer');
    }

    function votingpage($voterID = null, $electionID = null){
        $data['voter'] = $this->v->get_voter($voterID);
        $data['election'] = $this->v->getElection($electionID);
        $this->load->view('templates/vote_header');
        $this->load->view('votepage/votingpage', $data);
        $this->load->view('templates/vote_footer');
    }

    function prohibited($voterID = null){
        $data['voter'] = $this->v->get_voter($voterID);
        $this->load->view('templates/vote_header');
        $this->load->view('votepage/prohibited', $data);
    }

    function checkvoter($voterID = null, $ElectionID = null){
        $result = $this->v->checkvoter($voterID, $ElectionID);
        if($result){
            redirect(base_url('vote/votingpage/'.$voterID.'/'.$ElectionID));
        }else{
            redirect(base_url('vote/prohibited/'.$voterID));
        }
    }

    function reviewvote($voterID = null, $electionID = null){
        $data['election'] = $this->v->getElection($electionID);
        $data['voter'] = $this->v->get_voter($voterID);
        $this->load->view('templates/vote_header');
        $this->load->view('votepage/reviewvote', $data);
        $this->load->view('templates/vote_footer');
    }




}

?>
