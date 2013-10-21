<?
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_meal_type_collection extends CI_Migration {

	public function up()
	{
		$meal = array();
		$meal['meal_type_id'] = 'breakfast';
		$meal['meal_type_name'] = 'Breakfast';
		$meal['meal_type_description'] ='Breakfast';

		$this->mongo_db->insert('meal_type', $meal);

		$meal = array();
		$meal['meal_type_id'] = 'lunch';
		$meal['meal_type_name'] = 'Lunch';
		$meal['meal_type_description'] ='Lunch';

		$this->mongo_db->insert('meal_type', $meal);

		$meal = array();
		$meal['meal_type_id'] = 'dinner';
		$meal['meal_type_name'] = 'Dinner';
		$meal['meal_type_description'] ='Dinner';

		$this->mongo_db->insert('meal_type', $meal);

		$meal = array();
		$meal['meal_type_id'] = 'snacks';
		$meal['meal_type_name'] = 'Snacks';
		$meal['meal_type_description'] ='Snacks';

		$this->mongo_db->insert('meal_type', $meal);
	}

	public function down()
	{
		$this->mongo_db->drop_db('meal_type');
	}
}