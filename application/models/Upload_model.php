<?php

class Upload_model extends MY_Model {
	protected $table = 'upload';
	protected $primaryKey = 'uploadId';

	public function __construct()
	{
		parent::__construct();
	}
}