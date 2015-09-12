<?php

class Guest_model extends MY_Model {
	protected $table = 'guest';
	protected $primaryKey = 'guestId';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_data_by_check($check = '0')
	{
		$this->db->where('check', $check);
		$this->db->order_by($this->primaryKey, 'asc');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function select_ajax($limit, $offset, $check = null)
	{
		if ( isset($check) ) {
			$this->db->where('check', $check);
		}
		$this->db->order_by($this->primaryKey, 'desc');
		$query = $this->db->get($this->table, $limit, $offset);
		return $query->result();
	}

}