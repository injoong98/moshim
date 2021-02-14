<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * qrcode model class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

class Qrcode_model extends CB_Model
{

	/**
	 * 테이블명
	 */
	public $_table = 'qrcode';

	/**
	 * 사용되는 테이블의 프라이머리키
	 */
	public $primary_key = 'qr_id'; // 사용되는 테이블의 프라이머리키

	public $cache_time = 86400; // 캐시 저장시간

	function __construct()
	{
		parent::__construct();

		check_cache_dir('qrcode');
	}


	public function get_qrcode($position = '', $type = '', $limit = '')
	{
		if (empty($position)) {
			return;
		}
		if (strtolower($type) !== 'order') {
			$type = 'random';
		}

		$cachename = 'qrcode/qrcode-' . $position . '-' . $type . '-' . cdate('Y-m-d');

		if ( ! $result = $this->cache->get($cachename)) {
			$this->db->from($this->_table);
			$this->db->where('qrg_name', $position);
			$this->db->where('qr_activated', 1);
			$this->db->group_start();
			$this->db->where(array('qr_start_date <=' => cdate('Y-m-d')));
			$this->db->or_where(array('qr_start_date' => null));
			$this->db->group_end();
			$this->db->group_start();
			$this->db->where('qr_end_date >=', cdate('Y-m-d'));
			$this->db->or_where('qr_end_date', '0000-00-00');
			$this->db->or_where(array('qr_end_date' => ''));
			$this->db->or_where(array('qr_end_date' => null));
			$this->db->group_end();
			$this->db->order_by('qr_order', 'DESC');
			$res = $this->db->get();
			$result = $res->result_array();

			$this->cache->save($cachename, $result, $this->cache_time);
		}

		if ($type === 'random') {
			shuffle($result);
		}
		if ($limit) {
			$result = array_slice($result, 0, $limit);
		}
		return $result;
	}


	public function get_all_by_where($where = '')
	{
		$this->db->select('*');
		if ($where) {
			$this->db->where($where);
		}
		
		$qry = $this->db->get($this->_table);
		$result = $qry->result_array();

		return $result;
	}
	public function play_updated($primary_value = '')
	{
		if (empty($primary_value)) {
			return false;
		}

		$this->db->where($this->primary_key, $primary_value);
		$this->db->set('qr_hit', 'qr_hit+1', false);
		$result = $this->db->update($this->_table);

		return $result;
	}

}
