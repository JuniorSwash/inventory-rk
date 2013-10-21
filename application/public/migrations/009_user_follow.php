<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_user_follow extends CI_Migration
{
    public function up()
    {

		    $user = array();

		    $id = "";
		    $this->mongo_db->select('*');
		    $data = $this->mongo_db->get('user_id_mapping');

	        for($i = 0; $i < count($data); $i++)
	        {
		        $id = $data[$i]['user_new_id'];
				$userOldId = $data[$i]['user_id'];
		        $rw = $this->db->query("select id_user from user_followers where id_user_followed = ".$userOldId);

		        $user_follows_me = array();
		        $result = $rw->result_array();
		        foreach($result as $r)
		        {
			        $this->mongo_db->select('*');
			        $this->mongo_db->where(array('user_id'=> (int)$r['id_user']));
			        $dt = $this->mongo_db->get('user_id_mapping');


			        if(isset($dt[0]['user_id']))
			        {
				        $user_follows_me[] = $dt[0]['user_new_id'];
			        }
			        else{
				        echo "not found following= ".$r['id_user']."<br />";
			        }

		        }
		        $user['user_id'] = $id;
		        $user['following'] = $user_follows_me;

		        $this->mongo_db->insert('user_following',$user);

		        $user = array();
		        $rw = $this->db->query("select id_user_followed from user_followers where id_user = ".$userOldId);

		        $user_me_follows = array();
		        foreach($rw->result_array() as $r)
		        {
			        $this->mongo_db->select('*');
			        $this->mongo_db->where(array('user_id'=> (int)$r['id_user_followed']));
			        $dt = $this->mongo_db->get('user_id_mapping');

			        if(isset($dt[0]['user_new_id']))
			        {
				        $user_me_follows[] = $dt[0]['user_new_id'];
			        }else{
				        echo "not found follower = ".$r['id_user_followed']."<br />";
			        }
		        }
		        $user['user_id'] = $id;
		        $user['follower'] = $user_me_follows;
		        $this->mongo_db->insert('user_follower',$user);
	        }

    }

	public function down()
	{
		$this->mongo_db->drop_db('user_follower');
		$this->mongo_db->drop_db('user_following');
	}

}