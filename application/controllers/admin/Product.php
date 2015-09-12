<?php

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product_model');
	}

	public function ajax_change_position($major = null, $account = null, $password = null)
	{
		$this->check_login_ajax($account, $password);
		foreach ($this->input->post('item') as $key => $value) {
			$this->product_model->update_data([
				'productId' => $value,
				'position' => $key+1
			]);
		}
		return;
	}

	public function index($major = 'aluminium', $minor = 'all', $in = 'all')
	{
		$this->check_login();
		$query = $this->product_model->select_data_by_major_minor_in($major, $minor, $in);
		$this->load->view('admin/product/index', compact('query', 'major', 'minor'));
	}

	public function show($productId = null)
	{
		$this->check_login();
		if ( ! $query = $this->product_model->select_data($productId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return;
		}

		$this->load->view('admin/product/show', compact('query'));
	}

	public function create()
	{
		$this->check_login();
		// if ( $major != 'aluminium' && $major != 'polycarbonate') {
		// 	$this->load->view('admin/failure', [
		// 		'message' => '無此分類商品可以新增'
		// 	]);
		// 	return;
		// }

		if ( ! $data = $this->input->post() ) {
			$this->load->view('admin/product/create');
			return;
		}

		// echo implode(',', $data['color']);
		// exit();
		if ( isset($data['color']) ) {
			$data['color'] = implode(',', $data['color']);
		}

		if ( ! empty($_FILES["userfile"]["size"]) ) {
			$data['path'] = $this->singleUploading()['path'];
		}

		if ( ! $this->product_model->insert_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '新增失敗，請再試一次'
			]);
			return;
		}
		$this->load->view('admin/success', [
			'message' => '新增成功',
			'redirectUrl' => 'admin/product/index/'.$data['major'].'/'.$data['minor']
		]);
	}

	public function edit($productId = null)
	{
		$this->check_login();
		if ( ! $query = $this->product_model->select_data($productId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return;
		}

		if ( ! $data = $this->input->post() ) {
			$this->load->view('admin/product/edit', compact('query'));
			return;
		}

		if ( isset($data['color']) ) {
			$data['color'] = implode(',', $data['color']);
		}

		if ( ! empty($_FILES["userfile"]["size"]) ) {
			@unlink($query->path);
			$data['path'] = $this->singleUploading()['path'];
		}

		$data['productId'] = $productId;
		if ( ! $this->product_model->update_data($data) ) {
			$this->load->view('admin/failure', [
				'message' => '更新失敗，請再試一次'
			]);
		}

		$this->load->view('admin/success', [
			'message' => '更新成功',
			'redirectUrl' => 'admin/product/show/'.$productId
		]);
	}

	public function delete($productId = null)
	{
		$this->check_login();
		if ( ! $query = $this->product_model->select_data($productId) ) {
			$this->load->view('admin/failure', [
				'message' => '查無此資料'
			]);
			return;
		}

		@unlink($query->path);

		if ( ! $this->product_model->delete_data($productId) ) {
			$this->load->view('admin/failure', [
				'message' => '刪除失敗'
			]);
			return;
		}
		$this->load->view('admin/success', [
			'message' => '刪除成功',
			'redirectUrl' => 'admin/product'
		]);
	}

	public function order($major = 'aluminium')
	{
		$this->check_login();
		if ( $major != 'aluminium' && $major != 'polycarbonate') {
			$this->load->view('admin/failure', [
				'message' => '查無此分類'
			]);
			return;
		}
		$query = $this->product_model->select_data_by_major_minor_in($major);
		$this->load->view('admin/product/order', compact('query', 'major'));
	}

} 