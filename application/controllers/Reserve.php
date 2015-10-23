<?php

class Reserve extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['reserve_model', 'notice_model']);
	}

	private function check_recaptcha($secret, $response, $ip)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, true); // 啟用POST
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
			'secret' => $secret,
			'response' => $response,
			'remoteip' => $ip
		])); 
		$output = curl_exec($ch); 
		curl_close($ch);
		return $output;
	}

	public function index()
	{
		if ( ! $this->input->post()) {
			$query = $this->notice_model->select_all_data();
			$this->load->view('reserve/index', compact('query'));
			return true;
		}
		$output = $this->check_recaptcha(
			'6Lf_AwsTAAAAAC9Wv0FwUb8B2h6dQ4Tg5xos_CeN',
			$this->input->post('g-recaptcha-response'),
			$_SERVER['REMOTE_ADDR']
		);
		if ( ! json_decode($output)->success ) {
			$this->load->view('failure', [
				'message' => '請點選驗證'
			]);
			return;
		}
		date_default_timezone_set("Asia/Taipei");
		$data = $this->input->post(['box', 'color', 'returnDate', 'day', 'name', 'telephone', 'address', 'email', 'content', 'deliver'], true);
		$data['createDate'] = date("Y-m-d");
		if ( ! $this->reserve_model->insert_data($data) ) {
			$this->load->view('failure', [
				'message' => '系統忙碌中，請再試一次'
			]);
			return true;
		}
		$this->load->view('success', [
			'message' => '訂單已送出'
		]);
	}

	public function notice()
	{
		$query = $this->notice_model->select_order_position();
		$this->load->view('reserve/notice', compact('query'));
	}

}