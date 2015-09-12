<?php

class Reserve_model extends MY_Model {
	protected $table = 'reserve';
	protected $primaryKey = 'reserveId';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_data_by_check($check = 'false')
	{
		$this->db->where('check', $check);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function select_data_by_offset($limit, $offset)
	{
		$this->db->order_by($this->primaryKey, 'desc');
		$this->db->where('check', '1');
		$query = $this->db->get($this->table, $limit, $offset);
		return $query->result();
	}
}