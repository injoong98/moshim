<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(FCPATH.'/plugin/phpqrcode/qrlib.php');
/**
 * Cmall class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * QR코드 호출 관련  controller 입니다.
 */
class Homestudy extends CB_Controller
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
	public function kids($qrcode_name='')
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
		$where['qr_activated'] = 1;
		$result = $this->Qrcode_model->get_all_by_where($where);
		if ($result) {
			if($result[0]['qr_target'] != '') {
				$this->Qrcode_model->play_updated($result[0]['qr_id']); 
				header( 'Location:'. $result[0]['qr_target'] );
			} 
		} else {

			show_404();
		}
		
	}
		/**
	 * 목록 페이지에서 선택삭제를 하는 경우 실행되는 메소드입니다
	 */
	public function generate_qrcode()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_generate_qrcode';
		$this->load->event($eventname);

		$level = $this->input->post('level', null, '');
		$size = $this->input->post('size', null, '');
		$qr_id = $this->input->post('qr_id', null, '');
		//$filePath = sha1($qrContents).".png"
		$upload_path = config_item('uploads_dir') . '/qrcode/';
		$codeContents =$this->input->post('contents', null, '');
		$filePath = $upload_path.sha1($upload_path.$qr_id).".png";
		
		if(file_exists($filePath)) {
			unlink($filePath);
		}
		
		$result = [];
		QRcode::png($codeContents, $filePath);
		$result['success'] = true;
		$result['message'] = "파일이 정상적으로 생성되었습니다.";
	   
		return json_encode($result);
	}


}