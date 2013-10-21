<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_insert_exercise_attr extends CI_Migration {

	public function up()
	{
		$array = array();
		$array['exercise_attr_id'] = 5;
		$array['name'] = 'Set';
		$array['attr_config'] = 'set';

		$this->db->insert('exercise_attr',$array);

	}

	public function down()
	{
		$this->db->where('exercise_attr_id',5);
		$this->db->delete('exercise_attr');
	}
}