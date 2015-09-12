<?php

class Guest extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('guest_model');
	}

	public function ajax_load($offset = null)
	{
		$this->output->set_content_type('application/json');
		$query = $this->guest_model->select_ajax(5, $offset*5);
		foreach ($query as $key => $value) {
			$query[$key]->content = nl2br($value->content);
			$query[$key]->recontent = nl2br($value->recontent);
		}
		echo json_encode($query);
	}	

	public function index()
	{
		$this->load->view('guest/index');
	}

	public function create()
	{
		if ( ! $this->input->post()) {
			$this->load->view('guest/create');
			return true;
		}

		$data = $this->input->post(['name', 'email', 'telephone', 'content'], true);
		// $data['content'] = nl2br($data['content']);
		date_default_timezone_set("Asia/Taipei");
		$data['createDate'] = date("Y-m-d");
		if ( ! $this->guest_model->insert_data($data) ) {
			$this->load->view('failure', [
				'message' => '新增失敗，請再試一次'
			]);
			return false;
		}
		$this->load->view('success', [
			'message' => '新增成功',
			'redirectUrl' => 'guest'
		]);
	}

}