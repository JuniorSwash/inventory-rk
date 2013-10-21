<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_update_exercise_table extends CI_Migration {

	public function up()
	{
		$fields = array(
			'is_delete' => array('type' => 'TINYINT','length'=>1,'default'=>0)
		);
		$this->dbforge->add_column('exercise', $fields);

	}

	public function down()
	{
		$this->dbforge->drop_column('exercise','is_delete');
	}
}