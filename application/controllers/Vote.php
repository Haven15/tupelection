<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vote extends CI_Controller{
    function __construct(){
        parent:: __construct();
        $this->load->model('election_model', 'e');
        $this->load->model('vote_model', 'v');
        $this->load->helper('url_helper');
    }

    function electionlist($VoterID){
        $data['elections'] = $this->e->getElections();
        if (empty($data['elections']))
        {
            show_404();
        }
        $this->load->view('templates/vote_header', $data);
        $this->load->view('votepage/electionlist', $data);
        $this->load->view('templates/vote_footer');
    }

    function votingpage(){
        $this->load->view('templates/vote_header');
        $this->load->view('votepage/votingpage');
        $this->load->view('templates/vote_footer');
    }

    function checkvoter($voterID = null, $ElectionID = null){
        $result = $this->v->checkvoter($voterID, $ElectionID);
        if($result){
            redirect(base_url('vote/votingpage/'.$voterID.'/'.$ElectionID));
        }else{
            // echo '<script type="text/javascript">';
            // echo 'alert("You are not allowed to vote in this Election.")';
            // echo "window.location = ".base_url('vote/electionlist/'.$voterID)."";
            // echo '</script>';
            echo "You are not allowed to vote in this election. ";
            echo "<a href=".base_url('vote/electionlist/'.$voterID).">Go back</a>";
        }

    }

}

?>
