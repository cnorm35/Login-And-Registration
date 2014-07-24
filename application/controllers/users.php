<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('login_view');
	}

	public function process()
	{
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|matches[confirm_password]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required');

		if($this->form_validation->run())
		{
			// echo 'GOOD';
			//redirect to success page or load model, input valid data into db.
			$this->load->model('user');
			$this->user->register_user($this->input->post());
			$this->session->set_flashdata('success', 'User Successfully Created!');
			redirect('/users');

		}
		else
		{
			//returns strings of all the validation errors.
			// echo validation_errors();
			$this->session->set_flashdata('errors', validation_errors());
			//ex: you can hold validation errors in session data.  $this->session->set_userdata('errors', validation_errors());
			redirect('/users');
		}

	}

	public function sign_in ()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$this->load->model('user');
		$person = $this->user->sign_in_user($email);
		if($person && $person['password'] == $password)
		{
			$user = array(
					'user_id' => $person['id'],
					'user_email' => $person['email'],
					'first_name' => $person['first_name'],
					'last_name' => $person['last_name'],
					'logged_in' => TRUE,
						 );
			$this->session->set_userdata($user);
			redirect('/users/logged_in');
		} 
		else
		{
			$this->session->set_flashdata('login_error', 'Invalid email or password.');
			redirect('/users');
		}
	}

	public function logged_in()
	{
		$this->load->view('main_view');
	}

	public function log_out()
	{
		$this->session->sess_destroy();
		redirect('users');
	}
	

}
