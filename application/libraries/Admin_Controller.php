<?php
class Admin_Controller extends MY_Controller{
	function __construct(){
		parent::__construct();
		$this->data['site_title'] = 'Heart of Jesus and Mary Parish - Admin';
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('user_m');
		$this->load->model('priests_m');
		$this->load->model('burial_m');
		$this->load->model('baptist_m');
		$this->load->model('blessings_m');
		$this->load->model('calendar_m');
		$this->load->model('marriage_m');
		$this->load->model('time_m');
		$this->load->model('holidays_m');
		$this->load->model('records_m');
		//Login Check
		$exception_uris = array(
		'user/login',
		'user/logout',
		'user/forgot_password',
		);
		if(in_array(uri_string(), $exception_uris) == FALSE)
		{
			if($this->user_m->loggedin() == FALSE)
			{
				redirect('user/login');
			}
		}
	}
}
?>