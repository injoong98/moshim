<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * qrcode Click Log model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Qrcode_click_log_model extends CB_Model
{

	/**
	 * 테이블명
	 */
	public $_table = 'qrcode_click_log';

	/**
	 * 사용되는 테이블의 프라이머리키
	 */
	public $primary_key = 'qcl_id'; // 사용되는 테이블의 프라이머리키

	function __construct()
	{
		parent::__construct();
	}


	public function get_admin_list($limit = '', $offset = '', $where = '', $like = '', $findex = '', $forder = '', $sfield = '', $skeyword = '', $sop = 'OR')
	{
		$select = 'qrcode_click_log.*, qrcode.qrg_name, qrcode.qr_title, qrcode.qr_datetime, qrcode.qr_hit, qrcode.qr_image, qrcode.qr_url';
		$join[] = array('table' => 'qrcode', 'on' => 'qrcode_click_log.qr_id = qrcode.qr_id', 'type' => 'inner');
		$result = $this->_get_list_common($select, $join, $limit, $offset, $where, $like, $findex, $forder, $sfield, $skeyword, $sop);
		return $result;
	}


	public function get_qrcode_click_count($type = 'd', $start_date = '', $end_date = '', $orderby = 'asc')
	{
		if (empty($start_date) OR empty($end_date)) {
			return false;
		}
		$left = ($type === 'y') ? 4 : ($type === 'm' ? 7 : 10);
		if (strtolower($orderby) !== 'desc') $orderby = 'asc';

		$this->db->select('count(*) as cnt, left(qcl_datetime, ' . $left . ') as day ', false);
		$this->db->where('left(qcl_datetime, 10) >=', $start_date);
		$this->db->where('left(qcl_datetime, 10) <=', $end_date);
		$this->db->group_by('day');
		$this->db->order_by('qcl_datetime', $orderby);
		$qry = $this->db->get($this->_table);
		$result = $qry->result_array();

		return $result;
	}
}
