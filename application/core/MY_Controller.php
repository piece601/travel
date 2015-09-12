<?php

class MY_Controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	protected function singleUploading() //單檔案上傳
	{
		$config["encrypt_name"] = TRUE;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|zip|rar|xlsx|xls|csv|pdf|txt|doc|docx|ppt'; //上傳文件格式
		$this->load->library('upload',$config); //讀取上傳的Lib
		if( !$this->upload->do_upload('userfile') ){ // userfile為上傳field name
			return false; //上傳失敗
		}
		$data['path'] = 'uploads/'.$this->upload->data()['file_name']; // 抓取上傳路徑
		return $data; // 回傳$data 陣列
	}

	protected function mutiUploading() //多檔案上傳
	{
		$config["encrypt_name"] = TRUE;
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg|zip|rar|xlsx|xls|csv|pdf|txt|doc|docx|ppt'; //上傳文件格式
		$this->load->library('upload',$config); //讀取上傳的Lib
		foreach ($_FILES as $key => $value) {
			if( !empty($value['name'])){
				if( !$this->upload->do_upload($key)){
					return false; // 上傳失敗
				}
				$data[$key]['path'] = 'uploads/'.$this->upload->data()['file_name']; // 把檔案路徑放進去
			}
		}
		return $data; // 回傳$data 陣列
	}

	protected function mailing($email = NULL, $content = NULL) // 寄信
	{
		$this->load->library('email');
		$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.gmail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'piececustom',
	    'smtp_pass' => 'piececustom1234567890',
	    'mailtype'  => 'html', 
	    'charset'   => 'utf-8',
	    'newline' => "\r\n"
		);
		$this->email->initialize($config);
    $this->email->from('piececustom@gmail.com', '發信人');
    $this->email->to($email); // 收信人
    $this->email->subject('主題'); //主題
    $this->email->message($content);  // 內容
    $this->email->send();
    echo $this->email->print_debugger();
    // $this->load->view('email_view');
    return true;
	}

	protected function check_login()
	{
		if ( ! $this->session->userdata('account') ) {
			redirect('login');
			return;
		}
	}

	protected function check_login_ajax($account, $password)
	{
		$this->load->model('login_model');	
		if ( ! $this->login_model->select_by_data(['account' => $account, 'password' => $password]) ) {
			exit();
		}
	}

}