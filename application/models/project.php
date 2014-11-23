<?php
class Project extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	function get_data($option=array()){
		
	  //get
	  //get all item in project_info
	  //get all item in old_projec_info that has no equal award id from project_info
	  
	  $query = $this->db->get('project_info');
	  $proj_info_data = $query->result_array();
	  
	  //get all project_info award_id, put it in the "not in() in the next query"
	  $tar_ids = array();
	  foreach($proj_info_data AS $val){
		$tar_ids[] = $val['award_id'];
	  }
	  
	  if(count($tar_ids) > 0){
		$str_tar_ids = implode(',',$tar_ids);
		$this->db->where_not_in('award_id', $tar_ids);
	  }

	  $query2 = $this->db->get('old_project_info');
	  $old_proj_info_data = $query2->result_array();
	  
	  //merge the two data;
	  $res = array_merge($proj_info_data, $old_proj_info_data);

	  return $res;
	}
	
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

}