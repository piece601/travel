<?php

class Fit_model extends MY_Model {
	protected $table = 'fit';
	protected $primaryKey = 'fitId';

	public function __construct()
	{
		parent::__construct();
	}
}