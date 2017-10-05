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
		$this->db->select('vt.Voter_ID, vt.FirstName, vt.MiddleInitial, vt.LastName, vt.Course_Code, cu.CourseName, vt.Email, vt.Password');
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
