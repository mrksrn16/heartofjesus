<?php
class User extends Admin_Controller
{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
	}
	public function login(){

		//var_dump($this->user_m->hash('mark123'));
		$home = 'home';
		$this->user_m->loggedin() == FALSE || redirect($home);
		$rules = $this->user_m->rules;
		$this->form_validation->set_rules($rules);
		if($this->form_validation->run() == TRUE)
		{
			if($this->user_m->login() == TRUE)
			{
			}
			else if($this->session->userdata('logged_in') == FALSE)
			{
				echo '<script>alert("Username/Password didn`t exists.");</script>';

			}
			else
			{
				$this->session->set_flashdata('error', 'Username and Password dont exists');
				redirect('user/login' , 'refresh');
			}
		}
		$this->load->view('user/login', $this->data);
	}
	public function logout()
	{
		$this->user_m->logout();
		redirect('user/login');
	}
	public function forgot_password(){
		$message = false;
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$email = $this->input->post('email');
			$this->db->where('email', $email);
			$chk = $this->db->get('users')->row();
			if($chk){
				$new_pass = "";
				//Send on email
				$this->load->library('email');
				//SMTP & mail configuration
				$config = array(
				    'protocol'  => 'smtp',
				    'smtp_host' => 'ssl://smtp.googlemail.com',
				    'smtp_port' => 465,
				    'smtp_user' => 'mrkserns@gmail.com',
				    'smtp_pass' => 'Webdeveloper',
				    'mailtype'  => 'html',
				    'charset'   => 'utf-8'
				);
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->set_newline("\r\n");

				//Email content
				$htmlContent = '<h1>Your new password is : </h1>';
				$htmlContent .= '<p>'. $new_pass . '</p>';

				$this->email->to($email);
				$this->email->from('mrkserns@gmail.com','Heart of Jesus and Mary Parish');
				$this->email->subject('Forgot password');
				$this->email->message($htmlContent);

				//Send email
				if($this->email->send()){
					$message = "Your new password is sent on your email.";
					//Update table
					$new_pass = $this->randomPassword();
					$hash_new_pass = $this->user_m->hash($new_pass);
					$data = array(
							'password' => $hash_new_pass
						);
					$this->db->where('id', 1);
					$this->db->update('users', $data);

				}else{
					$message = "There is an error occured. Please try again.";
				}
			}else{
				echo "<script>alert('Email dont exists.');</script>";
			}
		}
		$this->data['message'] = $message;
		$this->load->view('user/forgot_password', $this->data);
	}
	public function randomPassword() {
	    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	    $pass = array(); //remember to declare $pass as an array
	    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
	    for ($i = 0; $i < 8; $i++) {
	        $n = rand(0, $alphaLength);
	        $pass[] = $alphabet[$n];
	    }
	    return implode($pass); //turn the array into a string
	}
}
?>