<?php

class User_model extends MY_Model
{
	protected $_table = 'tb_users';
	protected $primary_key = 'id';

	public function list_user()
    {                
        $this->db->where('tb_groups.id', USER_GROUP);
        $this->db->join('tb_user_info','tb_user_info.user_id=tb_users.id');
        $this->db->join('tb_users_groups','tb_users.id=tb_users_groups.user_id');           
        $this->db->join('tb_groups','tb_users_groups.group_id=tb_groups.id');
        
        $this->db->select('tb_users.*,tb_user_info.*');

        return $this;
    }    

    public function user_info()
    {                               
        $this->db->join('tb_user_info','tb_user_info.user_id=tb_users.id');               
        return $this;
    }   

}

?>