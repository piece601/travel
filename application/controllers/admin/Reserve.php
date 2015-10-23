<?php

class Reserve extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['reserve_model', 'notice_model']);
	}

	public function ajax_select($reserveId = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		if ( ! $query = $this->reserve_model->select_data($reserveId) ) {
			echo "{}";
			return false;
		}
		echo json_encode($query);
	}

	public function ajax_check($reserveId = nullm, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		$data = ['reserveId' => $reserveId, 'check' => true];
		if ( ! $this->reserve_model->update_data($data) ) {
			echo '{"code":0}';
			return true;
		}
		echo '{"code":1}';
	}

	public function ajax_load_checked($offset = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		$this->output->set_content_type('application/json');
		$query = $this->reserve_model->select_data_by_offset(10, $offset*10);
		echo json_encode($query);
	}

	public function ajax_notice_change_position($account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		foreach ($this->input->post('item') as $key => $value) {
			$this->notice_model->update_data([
				'noticeId' => $value,
				'position' => $key+1
			]);
		}
		return;
	}

	// public function ajax_delete($reserveId)
	// {
	// 	$this->output->set_content_type('application/json');
	// 	if ( ! $this->reserve_model->delete_data($reserveId) ) {
	// 		echo '{"code": 0}';
	// 		return true;
	// 	}
	// 	echo '{"code": 1}';
	// }

	public function index()
	{
		$this->check_login();
		$query = $this->reserve_model->select_data_by_check('false');
		$this->load->view('admin/reserve/index', compact('query'));
	}

	public function checked()
	{
		$this->check_login();
		$this->load->view('admin/reserve/checked');
	}	

	public function notice()
	{
		$this->check_login();
		$query = $this->notice_model->select_order_position();
		$this->load->view('admin/reserve/notice', compact('query'));
	}

	public function notice_create()
	{
		$this->check_login();
		if ( ! $data = $this->input->post() ) {
			$this->load->view('admin/reserve/notice_create');
			return;
		}
		if ( ! $this->notice_model->insert_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '新增失敗，再試一次'
			]);
			return;
		}

		$this->load->view('admin/success', [
			'message' => '新增成功',
			'redirectUrl' => 'admin/reserve/notice'
		]);

	}

	public function notice_edit($noticeId = null)
	{
		$this->check_login();
		if ( ! $query = $this->notice_model->select_data($noticeId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return true;
		}
		if ( ! $data = $this->input->post() ) {
			$this->load->view('admin/reserve/notice_edit', compact('query'));
			return true;
		}

		$data['noticeId'] = $noticeId;
		if ( ! $this->notice_model->update_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '更新失敗，請再試一次'
			]);
			return true;
		}

		$this->load->view('admin/success', [
			'message' => '更新成功',
			'redirectUrl' => 'admin/reserve/notice'
		]);
	}

	public function notice_delete($noticeId = null)
	{
		$this->check_login();
		if ( ! $this->notice_model->select_data($noticeId) ) {
			$this->load->view('admin/failure', [
				'message' =>'查無此資料'
			]);
			return;
		}
		$this->notice_model->delete_data($noticeId);
		$this->load->view('admin/success', [
			'message' => '刪除成功',
			'redirectUrl' => 'admin/reserve/notice'
		]);
	}

	public function notice_order()
	{
		$this->check_login();
		$query = $this->notice_model->select_order_position();
		$this->load->view('admin/reserve/notice_order', compact('query'));
	}

	// public function check($reserveId = null)
	// {
	// 	if ( ! $this->reserve_model->select_data($reserveId) ) {
	// 		$this->load->view('admin/failure', [
	// 			'message' => '查無此資料'
	// 		]);
	// 		return false;
	// 	}
	// 	$data = ['reserveId' => $reserveId, 'check' => true];
	// 	if ( ! $this->reserve_model->update_data($data) ) {
	// 		$this->load->view('admin/failure', [
	// 			'message' => '更新失敗'
	// 		]);
	// 		return false;
	// 	}
	// 	$this->load->view('admin/success', [
	// 		'message' => '更新成功',
	// 		'redirectUrl' => 'admin/reserve'
	// 	]);
	// }	
}