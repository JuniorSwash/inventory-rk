<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_alter_challenge_type extends CI_Migration {

	public function up()
	{
		$fields = array(
			'name' => array(
				'name' => 'challenges_type_name',
				'type' =>'VARCHAR',
				'constraint' => '40'
			),
		);
		$this->dbforge->modify_column('challenges_type', $fields);

	}

	public function down()
	{
		$fields = array(
			'challenges_type_name' => array(
				'name' => 'name',
				'type' =>'VARCHAR',
				'constraint' => '40'
			),
		);
		$this->dbforge->modify_column('challenges_type', $fields);
	}
}