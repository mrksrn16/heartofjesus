<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends Admin_Controller {	
	public function __construct(){
		parent::__construct();
	}		
	public function index()
	{
		$this->db->where('role', 'admin');
		$this->data['users'] = $this->db->get('users')->result();
		$this->data['subview'] = 'users/index';
		$this->load->view('_layout_main', $this->data);
	}
	public function profile(){
		$user_id = $this->session->userdata('id');
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$password = $this->input->post('password');
			if($password){
				$data = array(
					'username' => $this->input->post('username'),
					'password' => $this->user_m->hash($password),
					'email' => $this->input->post('email'),
				);
				$this->db->where('id', $user_id);
				$this->db->update('users', $data);
			}else{
				$data = array(
					'username' => $this->input->post('username'),
					'email' => $this->input->post('email'),
				);
				$this->db->where('id', $user_id);
				$this->db->update('users', $data);
			}
			$info = array(
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'contact' => $this->input->post('contact'),
			);
			$this->db->where('user_id', $user_id);
			if($this->db->update('user_info', $info)){
				
			}
		}
		$id = $this->session->userdata('id');
		$this->db->where('id', $id);
		$this->data['user'] = $this->db->get('users')->row();
		$this->data['subview'] = 'users/profile';
		$this->load->view('_layout_main', $this->data);
	}
	public function add(){
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->user_m->hash($this->input->post('password')),
				'email' => $this->input->post('email'),
				'role' => 'admin'
			);
			$this->db->insert('users', $data);
			$last_id = $this->db->insert_id();
			$info = array(
				'user_id' => $last_id,
				'name' => $this->input->post('name'),
				'address' => $this->input->post('address'),
				'contact' => $this->input->post('contact'),
			);
			if($this->db->insert('user_info', $info)){
				redirect('users');
			}
		}
		$this->data['subview'] = 'users/add';
		$this->load->view('_layout_main', $this->data);
	}
	public function deactivate($id){
		$where = "role = 'admin' AND id = $id";
		$data = array(
			'isActive' => 0
		);
		$this->db->where($where);
		if($this->db->update('users', $data)){
			redirect('users');
		}
	}
	public function activate($id){
		$where = "role = 'admin' AND id = $id";
		$data = array(
			'isActive' => 1
		);
		$this->db->where($where);
		if($this->db->update('users', $data)){
			redirect('users');
		}
	}
	public function delete($id){
		$where = "id = $id AND id != 1";
		$this->db->where($where);
		$this->db->limit(1);
		$this->db->delete('users');
		redirect('users');
	}
}
?>