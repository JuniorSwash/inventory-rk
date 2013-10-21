<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 2/20/13
 * Time: 12:43 PM
 * To change this template use File | Settings | File Templates.
 */

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		_isLogin();
		$this->load->model('user_model');
	}

	function index()
	{
		$data = array();

		$users = $this->user_model->getUsers(array());

		$data['num_users'] = $users?count($users):'0';

		$this->load->vars($data);
		$this->load->view('template');

	}
}