<?php

class Product_model extends MY_Model {
	protected $table = 'product';
	protected $primaryKey = 'productId';

	public function __construct()
	{
		parent::__construct();
	}

	public function select_data_by_major_minor_in($major = 'all', $minor = 'all', $in = 'all')
	{
		$this->db->order_by('position', 'asc');
		if ($major != 'all') {
			$this->db->where('major', $major);
		}	
		if ($minor != 'all') {
			$this->db->where('minor', $minor);
		}
		if ($in != 'all') {
			$this->db->where('in', $in);
		}
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function select_data_by_minor_in_arr($minor, $in, $fit)
	{
		$this->db->order_by('position', 'asc');
		if ( $minor != null) {
			$this->db->or_where_in('minor', $minor);
			// $this->db->where_in('minor', $minor);
		}
		if ( $in != null) {
			$this->db->or_where_in('in', $in);
			// $this->db->where_in('in', $in);
		}
		if ( $fit != null) {
			$this->db->or_where_in('major', $fit);
		}
		$query = $this->db->get($this->table);
		return $query->result();
	}

}