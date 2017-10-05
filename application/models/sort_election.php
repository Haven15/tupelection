<?php

$output = '';
$order = $_POST["order"];
$id = $_POST["column_name"];
echo $id;
$this->db->order_by('Election_ID', 'desc');
$this->db->select('*');
$this->db->from('election_table as e, election_status_table as es');
$this->db->where('e.ElecStatus_ID = es.ElecStatus_ID and (1 = 0 or e.ElecStatus_ID = "2")');
$query = $this->db->get();
if($query->num_rows() > 0){
  return $query->result();
}else{
  return false;
}


?>
