<?php

class Login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		if ( $this->session->userdata('account') ) {
			redirect('admin');
			return;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('login/index');
			return;
		}

		$data = $this->input->post(['account', 'password'], true);
		if ( ! $this->login_model->select_by_data($data) ) {
			$this->load->view('failure', [
				'message' => '登入失敗'
			]);
			return;
		}
		$this->session->set_userdata($data);
		redirect('admin');
	}

	public function logout()
	{
		session_destroy();
		redirect('login');
	}
}