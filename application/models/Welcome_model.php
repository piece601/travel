<?php

class Welcome_model extends MY_Model {
	protected $table = 'welcome';
	protected $primaryKey = 'welcomeId';

	public function __construct()
	{
		parent::__construct();
	}
}