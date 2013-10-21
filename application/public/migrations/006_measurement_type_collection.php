<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_measurement_type_collection extends CI_Migration
{
	public function up()
	{
		$this->mongo_db->drop_db('food_measurement_type');
		$data = array();

		$data[0]['measurement_type_id'] = 'oz';
		$data[0]['description'] = '';

		$data[1]['measurement_type_id'] = 'tbsp';
		$data[1]['description'] = '';

		$data[2]['measurement_type_id'] = 'cup';
		$data[2]['description'] = '';

		$data[3]['measurement_type_id'] = 'slice';
		$data[3]['description'] = '';

		$data[4]['measurement_type_id'] = '#';
		$data[4]['description'] = '';

		foreach($data as $food_measurement_type){
			$this->mongo_db->insert('measurement_type',$food_measurement_type);
		}
	}

	public function down()
	{
		$this->mongo_db->drop_db('measurement_type');
	}
}