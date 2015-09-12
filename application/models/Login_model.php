<?php

class Login_model extends MY_Model {
	protected $table = 'login';
	protected $primaryKey = 'loginId';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_by_data($data)
	{
		$this->db->where($data);		
		$query = $this->db->get($this->table);
		return $query->row();
	}
}