<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 8/18/13
 * Time: 5:02 PM
 * To change this template use File | Settings | File Templates.
 */

class User_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
    function checkLogin($email='',$pass='')
    {
        $this->db->where('email',$email);
        $this->db->where('password',md5($pass));
        $result = $this->db->get('user');
        if($result->num_rows()>0){
            $result = $result->result_array();
            return $result[0];
        }
        return false;
    }

	function getUsers($config = array())
	{
        $this->db->order_by('reg_date desc');
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return $result->result_array();
		}

		return false;
	}
	function getUsersCsvArray($config = array())
	{
        $this->db->select('user_id, user_name, user_email');
        $this->db->order_by('user_insert_date desc');
		$result = $this->db->get('user');

		if($result->num_rows()>0){
			return $result->result_array();
		}

		return false;
	}
    function getTotalUserByInsertDate($config = array())
    {
        if(isset($config['date']))
        {
            $this->db->where('user_insert_date >', strtotime($config['date']));
            $this->db->where('user_insert_date <', strtotime("+1 day", strtotime($config['date'])));
        }
        if(isset($config['user_status']))
        {
            $this->db->where('user_status',$config['user_status']);
        }
        $result = $this->db->get('user');
        return $result->num_rows();
    }

	function insert($data)
	{
		$this->db->insert('user',$data);
		return $this->db->insert_id();
	}

    function update($data, $user_id="")
    {
        $this->db->where('user_id', $user_id);
        return $this->db->update('user',$data);
    }
}