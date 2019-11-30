<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branch_model extends CI_Model {
 

    public function branch_view()
    {
        return $this->db->select('*')   
            ->from('branch')
            ->order_by('branch_id', 'desc')
            ->get()
            ->result();
    }



    public function branch_create($data = array())
    {
        return $this->db->insert('branch', $data);
    }


    public function branch_delete($id = null)
    {
        $this->db->where('branch_id',$id)
            ->delete('branch');

        if ($this->db->affected_rows()) {
            return true;
        } else {
            return false;
        }
    } 


    public function update_branch($data = array())
    {
        return $this->db->where('branch_id',$data["branch_id"])
            ->update("branch", $data);
    }


    public function branch_updateForm($id){
        $this->db->where('branch_id',$id);
        $query = $this->db->get('branch');
        return $query->row();
    }
    
    public function dropdown(){
        $this->db->select('*');
        $this->db->from('employee_history');
        $query=$this->db->get();
        $data=$query->result();
        $list = array('' => 'Select One...');
        if(!empty($data)){
            foreach ($data as  $value) {
                $list[$value->employee_id]=$value->first_name." ".$value->last_name;
            }
        }
        return $list;
    }

    public  function get_id($id)
    {
        $query=$this->db->get_where('branch',array('branch_id'=>$id));
        return $query->row_array();
    } 

    
	
	

}
