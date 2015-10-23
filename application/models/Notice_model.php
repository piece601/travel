<?php

class Notice_model extends MY_Model {
	protected $table = 'notice';
	protected $primaryKey = 'noticeId';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_order_position()
	{
		$this->db->order_by('position', 'asc');
		$query = $this->db->get($this->table);
		return $query->result();
	}
}