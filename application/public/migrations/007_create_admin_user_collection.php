<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Create_admin_user_collection extends CI_Migration
{
	public function up()
	{

		$user = array();
		$user['admin_user_name'] = 'Musa';
		$user['admin_user_email'] = 'anko16@gmail.com';
		$user['admin_user_password'] = 'a8f5f167f44f4964e6c998dee827110c';
		$user['status'] = 1;

		$this->mongo_db->insert('admin_user',$user);

	}

	public function down()
	{
		$this->mongo_db->drop_db('admin_user');
	}
}