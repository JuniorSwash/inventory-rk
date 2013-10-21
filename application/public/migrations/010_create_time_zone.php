<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_time_zone extends CI_Migration
{
	public function up()
	{

		$time_zones = $this->db->query("SELECT * FROM time_zone group by timezone_id");
		$time_zones = $time_zones->result_array();

		if(!empty($time_zones)){
			foreach($time_zones as $time_zone){
				unset($time_zone['id']);
				$this->mongo_db->insert('time_zone',$time_zone);
			}
		}
	}

	public function down()
	{
		$this->mongo_db->drop_db('time_zone');
	}
}