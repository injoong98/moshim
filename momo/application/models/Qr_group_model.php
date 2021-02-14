<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Banner group model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Qr_group_model extends CB_Model
{

	/**
	 * 테이블명
	 */
	public $_table = 'qr_group';

	/**
	 * 사용되는 테이블의 프라이머리키
	 */
	public $primary_key = 'qrg_id'; // 사용되는 테이블의 프라이머리키

	function __construct()
	{
		parent::__construct();
	}


	public function get_all_group()
	{
		$result = $this->get('', '', '', '', '', 'qrg_name', 'ASC');
		return $result;
	}
}
