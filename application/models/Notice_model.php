<?php

class Notice_model extends MY_Model {
	protected $table = 'notice';
	protected $primaryKey = 'noticeId';

	public function __construct()
	{
		parent::__construct();
	}
}