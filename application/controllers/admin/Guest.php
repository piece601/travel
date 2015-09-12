<?php

class Guest extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guest_model');
	}

	public function ajax_load_checked($offset = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		$query = $this->guest_model->select_ajax(10, $offset*10, '1');
		echo json_encode($query);
	}

	public function ajax_select($guestId = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		$query = $this->guest_model->select_data($guestId);
		echo json_encode($query);
	}

	public function ajax_recontent($guestId = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		$data = $this->input->post(['recontent'], true);
		$data['replyDate'] = date('Y-m-d');
		$data['check'] = '1';
		$data['guestId'] = $guestId;
		if ( ! $this->guest_model->update_data($data) ) {
			echo '{"code": 0}';
			return true;
		}
		echo '{"code": 1}';
	}

	public function index()
	{
		$this->check_login();
		$query = $this->guest_model->select_data_by_check('0');
		$this->load->view('admin/guest/index', compact('query'));
	}

	public function checked()
	{
		$this->check_login();
		$this->load->view('admin/guest/checked');
	}

}