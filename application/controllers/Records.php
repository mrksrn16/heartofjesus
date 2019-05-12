<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Records extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->data['subview'] = 'records/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function categorized()
	{
		$this->data['subview'] = 'records/index';
		$this->load->view('_layout_main', $this->data);
	}
}
?>