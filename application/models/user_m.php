<?php
class User_M extends MY_Model {
	
	protected $_table_name = "users";
	protected $_primary_filter = "intval";
	public $rules = array(
			'username' => array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required'
				),
			'password' => array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required'
				)
		);
	public function __construct(){
		parent::__construct();

	}
	public function login()
	{
		$user = $this->get_by(array(
			'username' => $this->input->post('username'),
			'password' => $this->hash($this->input->post('password'))
			), TRUE);
		if(count($user))
		{
			if($user->isActive == 1){
				$data = array(
					'username' => $user->username,
					'id' => $user->id,
					'role' => $user->role,
					'logged_in' => TRUE
					);
				$this->session->set_userdata($data);
			}else{
				$data = array(
					'logged_in' => FALSE
					);
				$this->session->set_userdata($data);
			}
		}
		else
		{
			$data = array(
				'logged_in' => FALSE
				);
			$this->session->set_userdata($data);
		}
	}
	public function loggedin()
	{
		return (bool)$this->session->userdata('logged_in');
	}
	public function logout()
	{
		$this->session->sess_destroy();
	}
	public function hash($string)
	{
		return hash('md5',$string);
	}
	public function get_admin(){
		$id = $this->session->userdata('id');
		$this->db->where('id', $id);
		return  $this->db->get('users')->row();
	}
	public function get_user_info_by_id($id){
		$this->db->where('user_id', $id);
		return  $this->db->get('user_info')->row();
	}
}
?>