<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_user_notification_settings extends CI_Migration
{
	public function up()
	{
		$this->mongo_db->select('*');
		$user_infos = $this->mongo_db->get('user_info');

		foreach($user_infos as $user_info){
			$data = array();
			$data['user_id'] = $user_info['_id'];
			$data['notification_workout'] = 1;
			$data['notification_workout_email'] = 1;
			$data['notification_follow'] = 1;
			$data['notification_follow_email'] = 1;
			$data['notification_like'] = 1;
			$data['notification_like_email'] = 1;
			$data['notification_reblog'] = 1;
			$data['notification_reblog_email'] = 1;

			$this->mongo_db->insert('notification_settings',$data);
		}

	}

	public function down()
	{
		$this->mongo_db->drop_db('user_info');
	}
}