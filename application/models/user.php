<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	// public function index()
	// {
	// 	$this->load->view('login_view');
	// }

	public function register_user($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at)
					VALUES ('{$post['first_name']}','{$post['last_name']}','{$post['email']}','{$post['password']}', NOW(), NOW())";
		$this->db->query($query);

	}

	public function sign_in_user ($email)
	{
		return $this->db->query("SELECT * FROM users WHERE email = '{$email}'")->row_array();
	}

}