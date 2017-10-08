<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class election_model extends CI_Model{
	public function __construct()
	{
					$this->load->database();
	}

	public function getElections(){
		$this->db->order_by('Election_ID', 'desc');
		$this->db->select('*');
		$this->db->from('election_table as e, election_status_table as es');
		$this->db->where('e.ElecStatus_ID = es.ElecStatus_ID');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getSortedElections(){
		$id="1";
		if(isset($_POST['building'])){
			$id = "1";}
		if(isset($_POST['scheduled'])){
			$id = "2";}
		if(isset($_POST['running'])){
			$id = "3";}
		if(isset($_POST['completed'])){
			$id = "4";}
		if(isset($_POST['archived'])){
			$id = "5";}

		//$id = $this->input->post('building');
		echo '<script language="javascript">';
		echo 'alert($id)';
		echo '</script>';
		//echo ($id);
		$this->db->order_by('Election_ID', 'desc');
		$this->db->select('*');
		$this->db->from('election_table as e, election_status_table as es');
		$this->db->where("e.ElecStatus_ID = es.ElecStatus_ID and e.ElecStatus_ID = '$id'");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function CreateElection(){
		// $StartDate = $this->input->post('startDate');
		// $StartTime = $this->input->post('starttime');
		// $date = DateTime::createFromFormat( 'H:i A', $StartTime);
		// $FormattedStartTime = $date->format( 'H:i:s');
		// $StartDateTime = $StartDate.' '.$FormattedStartTime;
		//
		// $EndDate = $this->input->post('endDate');
		// $EndTime = $this->input->post('endtime');
		// $date2 = DateTime::createFromFormat( 'H:i A', $EndTime);
		// $FormattedEndTime = $date2->format( 'H:i:s');
		// $EndDateTime = $EndDate.' '.$FormattedEndTime;
		$DateString = $this->input->post('Date');
		$StartDateTime = substr($DateString, 0, 16);
		$EndDateTime =  substr($DateString, 19, 34);

		$field = array(
			'Elec_Title'=>$this->input->post('electitle'),
			'Elec_Description'=>$this->input->post('elecdescription'),
			'StartDate'=>$StartDateTime,
			'EndDate'=>$EndDateTime
			);
		$this->db->insert('election_table', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function get_election($slug = FALSE)
	{
	        if ($slug === FALSE)
	        {
	                $query = $this->db->get('election_table');
	                return $query->result_array();
	        }
					$this->db->select('*');
					$this->db->from('election_table as e, election_status_table as es');
					$this->db->where('e.ElecStatus_ID = es.ElecStatus_ID');
					$this->db->where(array('Election_ID' => $slug));
	        $query = $this->db->get();
	        return $query->row_array();
	}

}
