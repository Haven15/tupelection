<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class voter_model extends CI_Model{
	public function __construct()
	{
					$this->load->database();
	}

	public function getVoters(){
		//$this->db->order_by('voter_id', 'desc');
		$this->db->select('v.Voter_ID, FirstName, MiddleInitial, LastName, c.Course_Code, College_Code, v.Date_Registered');
		$this->db->from('voter_table as v, course_table as c');
		$this->db->where('v.Course_Code = c.Course_Code');
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function create(){
		$field = array(
			'Voter_ID'=>$this->input->post('vID'),
			'FirstName'=>$this->input->post('fname'),
			'MiddleInitial'=>$this->input->post('minitial'),
			'LastName'=>$this->input->post('lname'),
			'Course_code'=>$this->input->post('course'),
			);
		$this->db->insert('voter_table', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getVoterById($id){
		$this->db->select('vt.Voter_ID, vt.FirstName, vt.MiddleInitial, vt.LastName, vt.Course_Code, cu.CourseName');
		$this->db->from('voter_table as vt, course_table as cu');
		$this->db->where('vt.Course_Code = cu.Course_Code');
		$this->db->where('vt.Voter_ID', $id);
		$query = $this->db->get('voter_table');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function getCourse(){
		$this->db->select('cu.Course_Code, cu.CourseName, cl.College_Code, cl.CollegeName');
		$this->db->from('course_table as cu, college_table as cl');
		$this->db->where('cu.College_Code = cl.college_code');
		$query = $this->db->get()->result_array();
		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function updatevoter(){
		$id = $this->input->post('txt_hidden');
		$field = array(
			'Voter_ID'=>$this->input->post('vID'),
			'FirstName'=>$this->input->post('fname'),
			'MiddleInitial'=>$this->input->post('minitial'),
			'LastName'=>$this->input->post('lname'),
			'Course_code'=>$this->input->post('course'),
			);
		$this->db->where('Voter_ID', $id);
		$this->db->update('voter_table', $field);
		echo $this->db->last_query();extit;
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete(){
		$id = $this->input->post('VoterID');
		$this->db->where('Voter_ID', $id);
		$this->db->delete('voter_table');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getVotersPerElection($slug = FALSE){
		if ($slug === FALSE)
		{
						$query = $this->db->get('election_table');
						return $query->result_array();
		}
		$this->db->select('vtr.Voter_ID, FirstName, MiddleInitial, LastName, cu.Course_Code, College_Code, vt.Vote_ID, vt.Date_Time_Voted,vt.Election_ID');
		$this->db->from('voter_table as vtr, vote_table as vt, course_table as cu');
		$this->db->where('vtr.Course_Code = cu.Course_Code and vtr.Voter_ID = vt.Voter_ID');
		$this->db->where(array('vt.Election_ID' => $slug));
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getAllVoterID(){
		$this->db->select('Voter_ID');
		$this->db->from('voter_table');
		$query = $this->db->get()->result_array();
		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}

	public function addVoterbyID($slug = FALSE){
		$voterID = $this->input->post("VoterID");
		$field = array(
			'Voter_ID'=>$voterID,
			'Election_ID'=>$slug,
			);
		$this->db->select('Voter_ID, Election_ID');
		$this->db->from('vote_table');
		$this->db->where('Voter_ID', $voterID);
		$this->db->where('Election_ID', $slug);
		$count = $this->db->get();
		if($voterID == NULL)
		{
			$exist = '1';
			return $exist;
		}

		if($count->num_rows()==0)  {
			$this->db->insert('vote_table', $field);
			if($this->db->affected_rows() > 0){
				$exist = '2';
				return $exist;
			}else{
				$exist = '1';
				return $exist;
			}
		}
		else{
			echo '<script type="text/javascript">';
			echo 'alert('.$count.');';
			echo '</script>';
			$exist = '3';
			return $exist;
		}
	}

	public function getAllVoterCourse(){
		$this->db->select('Course_Code, CourseName');
		$this->db->from('course_table');
		$query = $this->db->get()->result_array();
		if($query > 0){
			return $query;
		}else{
			return false;
		}
	}

		public function deleteVoterPerElection($slug = FALSE){
			$id = $this->input->post('VoteID');
			$this->db->where('Vote_ID', $id);
			$this->db->delete('vote_table');
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function deleteAllVoters($slug = FALSE){
			$this->db->where('Election_ID', $slug);
			$this->db->delete('vote_table');
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}

		public function addVoterbyCourse($slug = FALSE){
			$course = $this->input->post('Course');
			$field = array(
				'Course_Code' => $course,
				'Election_ID' => $slug,
				);
			$this->db->insert('eligible_voter_election', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}
		public function getEligibleVoters($id){
			$this->db->select('eve.Eligible_ID, eve.Course_Code, ct.CourseName');
			$this->db->from('eligible_voter_election as eve, course_table as ct');
			$this->db->where('eve.Course_Code = ct.Course_Code');
			$this->db->where('eve.Election_ID', $id);
			$query = $this->db->get()->result_array();
			if($query > 0){
				return $query;
			}else{
				return false;
			}
		}
		public function deleteEligibleVoter($slug = FALSE){
			$EligibleID = $this->input->post('EligibleID');
			$field = array(
				'Eligible_ID' => $EligibleID,
				'Election_ID' => $slug,
				);
			$this->db->where($field);
			$this->db->delete('eligible_voter_election');
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
		}

}
