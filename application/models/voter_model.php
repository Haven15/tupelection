<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class voter_model extends CI_Model{
	public function __construct()
	{
					$this->load->database();
	}

	public function getVoters(){
		//$this->db->order_by('voter_id', 'desc');
		$this->db->select('v.Voter_ID, FirstName, MiddleInitial, LastName, c.Course_Code, College_Code, v.Email, Password');
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
			'Email'=>$this->input->post('email'),
			'Password'=>$this->input->post('password')
			);
		$this->db->insert('voter_table', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getVoterById($id){
		$this->db->where('Voter_ID', $id);
		$query = $this->db->get('voter_table');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){
		$id = $this->input->post('VoterID');
		$field = array(
			'Voter_ID'=>$this->input->post('vID'),
			'FirstName'=>$this->input->post('fname'),
			'MiddleInitial'=>$this->input->post('minitial'),
			'LastName'=>$this->input->post('lname'),
			'Course_code'=>$this->input->post('course'),
			'Email'=>$this->input->post('email'),
			'Password'=>$this->input->post('password')
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

}
