<?php
class Login_model extends CI_Model{


	public function validate()
	{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$tz = 'Singapore';
			$timestamp = time();
			$dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
			$dt->setTimestamp($timestamp); //adjust the object to correct timestamp
			$DateNow = $dt->format('Y-m-d h:i A');
			if(empty($username) || empty($password)){
				$return = '2';
				return $return;
			}

			$jsonurl = 'http://www.tup.edu.ph/android/get_studprofile/'.$username.'/'.$password.'';
			$json = file_get_contents($jsonurl);
			$obj = json_decode($json);


			if($obj->{'success'} == '1'){
				$this->db->select('Voter_ID');
				$this->db->from('voter_table');
				$this->db->where('Voter_ID', $username);
				$voter = $this->db->get();
				if ($voter->num_rows() == '1'){
					$return = '1';
					return $return;
				}
				else{
					foreach ($obj->student as $student){
					   $fname = $student->fname;
					   $lname = $student->lname;
					   $initial = $student->initial;
					   $course = $student->course;
					}

					$field = array(
						'Voter_ID' => $username,
						'FirstName' => $fname,
						'MiddleInitial' => $initial,
						'LastName' => $lname,
						'Course_Code' => $course,
						'Date_Registered' => $DateNow,
					);

					$this->db->insert('voter_table', $field);
					$return = '1';
					return $return;
				}

			}
			else if($obj->{'success'} == '0'){
				$return = '2';
				return $return;
			}
			else{
				$return = '3';
				return $return;
			}
	}

	public function get_studinfo(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$jsonurl = 'http://www.tup.edu.ph/android/get_studprofile/'.$username.'/'.$password.'';
			$json = file_get_contents($jsonurl);
			$obj = json_decode($json);
			if($obj->{'success'} == '1'){
				foreach ($obj->student as $student){
				   $fname = $student->fname;
				   $lname = $student->lname;
				   $initial = $student->initial;
				   $course = $student->course;
				}

				$username = $this->input->post('username');
				$this->db->select('LastName');
				$this->db->from('voter_table');
				$this->db->where('Voter_ID', $username);
				$voter = $this->db->get();

				return $fname;
			}
			else{
				return $username;
			}
	}
}

?>
