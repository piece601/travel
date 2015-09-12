<?php

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('welcome_model');
	}

	public function immupload(){
		$this->load->model('upload_model');
		if ( $path = $this->singleUploading()['path'] ) {
			$this->upload_model->insert_data([
				'path' => $path
			]);
			echo $path;
			return true;
		}
		// echo base_url().$this->singleUploading()['path']; //上傳成功
		return false;
	}

	public function index()
	{
		$all = $this->welcome_model->select_all_data('asc');
		$this->load->view('welcome/index', compact('all'));
	}

	public function create()
	{
		if ( ! $this->input->post() ) {
			$this->load->view('welcome/create');
			return true;
		}
		$data = $this->input->post(['content', 'title']);
		if ( ! $this->welcome_model->insert_data($data) ) {
			$this->load->view('failure', [
				'message' => '新增失敗'
			]);
			return false;
		}

		$this->load->view('success', [
			'message' => '新增成功',
			'redirectUrl' => ''
		]);
	}

	public function edit($welcomeId = null)
	{
		if ( ! $query = $this->welcome_model->select_data($welcomeId) ) {
			$this->load->view('failure', [
				'message' => '查無此資料'
			]);
			return false;
		}

		if ( ! $this->input->post() ) {
			$this->load->view('welcome/edit', compact('query'));
			return true;
		}
		$data = $this->input->post(['content']);
		$data['welcomeId'] = $welcomeId;
		if ( ! $this->welcome_model->update_data($data) ) {
			$this->load->view('failure', [
				'message' => '更新失敗'
			]);
			return false;
		}
		$this->load->view('success', [
			'message' => '更新成功',
			'redirectUrl' => ''
		]);
	}

	public function delete($welcomeId = null)
	{
		if ( ! $this->welcome_model->select_data($welcomeId) ) {
			$this->load->view('failure', [
				'message' => '查無此資料'
			]);
			return true;
		}
		if ( ! $this->welcome_model->delete_data($welcomeId) ) {
			$this->load->view('failure', [
				'message' => '刪除失敗'
			]);
			return false;
		}
		$this->load->view('failure', [
			'message' => '刪除成功',
			'redirectUrl' => ''
		]);
	}

}