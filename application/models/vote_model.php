<?php

class vote_model extends CI_Model{
    public function __construct()
    {
        $this->load->database();
    }

    function checkvoter($voterID = null, $ElectionID = null){
        // $this->db->select('Course_Code');
        // $this->db->from('voter_table');
        // $this->db->where('Voter_ID', $voterID);
        // $course = $this->db->get();
        // $studentcourse = $course->result();

        $this->db->where('Voter_ID', $voterID);
        // here we select every column of the table
        $q = $this->db->get('voter_table');
        $data = $q->result_array();

        $studentcourse = $data[0]['Course_Code'];
        // $field = array(
        //   'Election_ID' => $ElectionID,
        //   'Course_Code' => $studentcourse,
        // );
        $this->db->where('Election_ID', $ElectionID);
        $this->db->where('Course_Code', $studentcourse);
        $query = $this->db->get('eligible_voter_election');
        if($query->num_rows() > 0){
          return true;
        }
        else{
          return false;
        }
    }

}
 ?>
