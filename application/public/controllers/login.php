<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 3/7/13
 * Time: 11:46 AM
 * To change this template use File | Settings | File Templates.
 */
class login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$data = array();

		if($this->input->post('username',false)){
			$email = $this->input->post('username');
			$pass  = $this->input->post('password');

			$this->load->model('user_model');

			$result = $this->user_model->checklogin($email,$pass);
			if($result){
				$result['is_user_login'] = true;
                $date = date("Y-m-d H:i:s");
                $update_data = array();
                $update_data['last_signin'] = $date;
                //echo $result['user_id'];exit;
                $this->user_model->update($update_data, $result['user_id']);
				$this->session->set_userdata($result);
                //echo 'here';
				redirect(site_url('dashboard'));
			}else{
				$data['error'] = 'Invalid email/password!';
			}
		}
		$this->load->vars($data);
		$this->load->view('login_template');
	}

	function logout()
	{
		$this->session->sess_destroy();
		//print_debug($this->session);
		redirect(site_url('login'));
	}
}
