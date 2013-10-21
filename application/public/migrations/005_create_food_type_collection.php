<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_food_type_collection extends CI_Migration
{
	public function up()
	{
		$data = array();

		$data[0]['food_type_id'] = 'carb';
		$data[0]['food_type'] ='Carb';
		$data[0]['description'] = '';

		$data[1]['food_type_id'] = 'dairy';
		$data[1]['food_type'] ='Dairy';
		$data[1]['description'] = '';

		$data[2]['food_type_id'] = 'fruit';
		$data[2]['food_type'] ='Fruit';
		$data[2]['description'] = '';

		$data[3]['food_type_id'] = 'vegetable';
		$data[3]['food_type'] ='Vegetable';
		$data[3]['description'] = '';

		$data[4]['food_type_id'] = 'fat';
		$data[4]['food_type'] ='Fat';
		$data[4]['description'] = '';

		$data[5]['food_type_id'] = 'condiment';
		$data[5]['food_type'] ='Condiment';
		$data[5]['description'] = '';

		$data[6]['food_type_id'] = 'seafood';
		$data[6]['food_type'] ='Seafood';
		$data[6]['description'] = '';

		$data[7]['food_type_id'] = 'supplement';
		$data[7]['food_type'] ='Supplement';
		$data[7]['description'] = '';

		$data[8]['food_type_id'] = 'protein';
		$data[8]['food_type'] ='Protein';
		$data[8]['description'] = '';

		$data[9]['food_type_id'] = 'nuts';
		$data[9]['food_type'] ='Nuts';
		$data[9]['description'] = '';

		foreach($data as $food_type){
			$this->mongo_db->insert('food_type',$food_type);
		}
	}

	public function down()
	{
		$this->mongo_db->drop_db('food_type');
	}
}