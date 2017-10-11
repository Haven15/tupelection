<?php
class Admin_model extends CI_Model{

	function validate()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));

		$query = $this->db->get('admin_table');

		if($query->num_rows() == 1)
		{
			$row = $query->row();
            $data = array(
                    'username' => $row->username,
                    'password' => $row->password,
                    // 'validated' => true
                    );
            $this->session->set_userdata($data);
			return true;
		}
		return false;
	}


}

?>
