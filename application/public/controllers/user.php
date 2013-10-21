<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 3/17/13
 * Time: 10:58 AM
 * To change this template use File | Settings | File Templates.
 */
class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		_isLogin();
		$this->load->model('logo_model');
		$this->load->model('user_model');
	}

	function index()
	{
		redirect(site_url('user/user_list'));
	}
	function user_list()
	{
		$data = array();
        $this->load->model('user_model');
		$data['users'] = $this->user_model->getUsers($config = array());

		if($data['users']){
			foreach($data['users'] as $row=>$user){
				$logo = $this->logo_model->getAllLogo(array('user_id'=>$user['user_id']));

				$data['users'][$row]['num_of_post'] = $logo?count($logo):'0';
				$data['users'][$row]['logo_upload_date'] = $logo?$logo[0]['logo_upload_date']:'0';
			}
		}
		$this->load->vars($data);
		$this->load->view('template');
	}
	function user_list_csv()
	{
        $data = array();
        $this->load->model('user_model');
        $this->load->helper('csv_helper');
        $users = $this->user_model->getUsersCsvArray($config = array());

        $time = time();
        $file_name = 'user_list_'.$time.'.csv';
        $data['csv_file'] = array_to_csv($users, $file_name);
	}
    function user_stat()
    {
        $data = array();
        $config = array();
        $data['dateFrom'] = $dateFrom = date('m/d/Y', strtotime("-1 week"));
        $data['dateTo'] = $dateTo = date('m/d/Y');
        if(isset($_POST['dateFrom']))
        {
            $data['dateFrom'] = $dateFrom = $this->input->post('dateFrom');
            $data['dateTo'] = $dateTo = $this->input->post('dateTo');
        }
        $i = 0;
        while (strtotime($dateTo) > strtotime($dateFrom))
        {
            $data['user_stat'][$i]['date'] = date ("d-m-Y", strtotime($dateTo));
            $config['date'] = $dateTo;
            $config['user_status'] = 1;
            $data['user_stat'][$i]['total_user'] = $this->user_model->getTotalUserByInsertDate($config);
            $config['logo_status'] = 1;
            $data['user_stat'][$i]['total_logo'] = $this->logo_model->getTotalLogoByUploadDate($config);
            $dateTo = date ("d-m-Y", strtotime("-1 day", strtotime($dateTo)));
            $i++;
        }
        $this->load->vars($data);
        $this->load->view('template');
    }
}