<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Cmall class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 컨텐츠몰 페이지에 관한 controller 입니다.
 */
class Contents extends CB_Controller
{

		/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Qrcode', 'Qr_group');

	/**
	 * 헬퍼를 로딩합니다
	 */
	protected $helpers = array('form', 'array', 'cmall', 'dhtml_editor');

	function __construct()
	{
		parent::__construct();
		/**
		 * 라이브러리를 로딩합니다
		 */
		$this->load->library(array('pagination', 'querystring', 'accesslevel', 'cmalllib'));
	}






	/**
	 * 
	 */
	public function qrcode($qrcode_name='')
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_qrcode';
		$this->load->event($eventname);

		/**
		 * 로그인이 필요한 페이지입니다
		 */
		//required_user_login();

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);


		/**
		 * qr 코드 네임 값이 없으면 에러.
		 */
		if ($qrcode_name) {
			if (empty($qrcode_name) OR $qrcode_name == '') {
				show_404();
			}
		}
		$where['qr_url'] = $qrcode_name;
		$result = $this->Qrcode_model->get_all_by_where($where);
		if ($result) {
			if($result[0]['qr_target'] != '') {
				header( 'Location:'. $result[0]['qr_target'] );
			} 
		} else {

			show_404();
		}
		
	}


}