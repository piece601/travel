<?php

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model(['product_model']);
	}

	// public function index($major = 'all', $minor = 'all', $in = 'all')
	public function index()
	{
		// if ( $major != 'aluminium' && $major != 'polycarbonate') {
		// 	$this->load->view('failure', [
		// 		'message' => '無此分類'
		// 	]);
		// 	return;
		// }
		// var_dump($this->input->get());
		$minor = $this->input->get('minor');
		$in = $this->input->get('in');
		$query = $this->product_model->select_data_by_minor_in_arr($minor, $in);
		$this->load->view('product/index', compact('query', 'in', 'major', 'minor'));
	}

	public function show($productId = null)
	{
		if ( ! $query = $this->product_model->select_data($productId) ) {
			$this->load->view('failure', [
				'message' => '查無此資料唷'
			]);
			return;
		}
		$in = $query->in;
		$major = $query->major;
		$minor = $query->minor;
		$this->load->view('product/show', compact('query', 'in', 'major', 'minor'));
	}
}