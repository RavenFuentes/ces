<?php
class Subject_m extends MY_Model
{
	
	protected $_table_name = 'subject';
	protected $_order_by = 'id';
	public $rules = array(
		'role' => array(
			'field' => 'role', 
			'label' => 'myrole', 
			'rules' => 'trim|required|xss_clean'
		), 
		'section_name' => array(
			'field' => 'section_name', 
			'label' => 'mysection', 
			'rules' => 'trim|required'
		)
	);
}
