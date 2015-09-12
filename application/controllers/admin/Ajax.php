<?php

class Ajax extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function immupload($account = null, $password = null){
		$this->check_login_ajax($account, $password);
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
}