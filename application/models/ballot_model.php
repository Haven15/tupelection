<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ballot_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }

    public function getCandidates($slug, $ballot){
        $this->db->select('c.Candidate, c.Party, b.Position, b.Election_ID');
        $this->db->from('candidate_table as c, ballot_table as b');
        $this->db->where('c.Ballot_ID = b.Ballot_ID');
        $this->db->where('c.Ballot_ID', $ballot);
        $this->db->where(array('Election_ID' => $slug));
        $this->db->order_by("c.Candidate", "asc");
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getBallot($slug){
        $this->db->select('*');
        $this->db->from('ballot_table');
        $this->db->where('Election_ID', $slug);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getPosition($slug, $ballot){
        $this->db->select('*');
        $this->db->from('ballot_table');
        $this->db->where('Ballot_ID', $ballot);
        $this->db->where('Election_ID', $slug);
        $query = $this->db->get();
        return $query->result_array();
    }

}

 ?>
