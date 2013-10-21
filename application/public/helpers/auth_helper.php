<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 4/7/13
 * Time: 5:27 PM
 * To change this template use File | Settings | File Templates.
 */

function _isLogin()
{

	$CI = &get_instance();
	if(!$CI->session->userdata('is_user_login')){
		redirect(site_url('login'));
	}
}