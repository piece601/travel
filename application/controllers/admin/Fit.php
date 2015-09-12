<?php

class Fit extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('fit_model');
		$this->check_login();
	}

	public function index()
	{
		$query = $this->fit_model->select_all_data();
		$this->load->view('admin/fit/index', compact('query'));
	}

	public function create()
	{
		if ( ! $this->input->post() ) {
			$this->load->view('admin/fit/create');
			return true;
		}
		$data = $this->input->post(['content', 'title']);
		if ( ! $this->fit_model->insert_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '新增失敗'
			]);
			return false;
		}

		$this->load->view('admin/success', [
			'message' => '新增成功',
			'redirectUrl' => 'admin/fit'
		]);
	}

	public function edit($fitId = null)
	{
		if ( ! $query = $this->fit_model->select_data($fitId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return false;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('admin/fit/edit', compact('query'));
			return true;
		}
		$data = $this->input->post(['content']);
		$data['fitId'] = $fitId;
		if ( ! $this->fit_model->update_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '更新失敗'
			]);
			return false;
		}
		$this->load->view('admin/success', [
			'message' => '更新成功',
			'redirectUrl' => 'admin/fit'
		]);
	}

	public function delete($fitId = null)
	{
		if ( ! $this->fit_model->select_data($fitId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return true;
		}
		if ( ! $this->fit_model->delete_data($fitId) ) {
			$this->load->view('admin/failure', [
				'message' => '刪除失敗'
			]);
			return false;
		}
		$this->load->view('admin/failure', [
			'message' => '刪除成功',
			'redirectUrl' => ''
		]);
	}
}