<?php
/**
 * Created by JetBrains PhpStorm.
 * User: air-ibt2
 * Date: 3/7/13
 * Time: 4:53 PM
 * To change this template use File | Settings | File Templates.
 */

function _error_msg($msg)
{
	?>
	<div class="alert alert-error">
	    <button data-dismiss="alert" class="close" type="button">×</button>
	    <?= $msg ?>
	</div>
	<?
}
function _success_msg($msg)
{
	?>
	<div class="alert alert-success">
	    <button data-dismiss="alert" class="close" type="button">×</button>
	    <?=$msg?>
	</div>
	<?
}
function _error_flash_msg()
{
	$CI = &get_instance();
	$msg = $CI->session->flashdata('error_msg');
	echo $msg;
	if($msg){
		_error_msg($msg);
	}
}
function _success_flash_msg()
{
	$CI = &get_instance();
	$msg = $CI->session->flashdata('success_msg');
	echo $msg;
	if($msg){
		_success_msg($msg);
	}
}
function _flashMsg()
{
	_error_flash_msg();
	_success_flash_msg();
}
function _setFlashSuccess($msg)
{
	$CI = &get_instance();
	$CI->session->set_flashdata('success_msg', $msg);
}

function _setFlashError($msg)
{
	$CI = &get_instance();
	$CI->session->set_flashdata('error_msg', $msg);
}
