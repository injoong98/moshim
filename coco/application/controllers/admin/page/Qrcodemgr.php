<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(FCPATH.'/plugin/phpqrcode/qrlib.php');
/**
 * Qrcode class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 관리자>페이지설정>팝업관리 controller 입니다.
 */
class Qrcodemgr extends CB_Controller
{

	/**
	 * 관리자 페이지 상의 현재 디렉토리입니다
	 * 페이지 이동시 필요한 정보입니다
	 */
	public $pagedir = 'page/qrcodemgr';
	
	/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Qrcode', 'Qr_group');

	/**
	 * 이 컨트롤러의 메인 모델 이름입니다
	 */
	protected $modelname = 'Qrcode_model';

	/**
	 * 헬퍼를 로딩합니다
	 */
	protected $helpers = array('form', 'array');

	function __construct()
	{
		parent::__construct();

		/**
		 * 라이브러리를 로딩합니다
		 */
		$this->load->library(array('pagination', 'querystring'));
	}

	/**
	 * 목록을 가져오는 메소드입니다
	 */
	public function index()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_admin_page_Qrcode_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		/**
		 * 페이지에 숫자가 아닌 문자가 입력되거나 1보다 작은 숫자가 입력되면 에러 페이지를 보여줍니다.
		 */
		$param =& $this->querystring;
		$page = (((int) $this->input->get('page')) > 0) ? ((int) $this->input->get('page')) : 1;
		$view['view']['sort'] = array(
			'qr_id' => $param->sort('qr_id', 'asc'),
			'qr_title' => $param->sort('qr_title', 'asc'),
			'qr_url' => $param->sort('qr_url', 'asc'),
			'qr_target' => $param->sort('qr_target', 'asc'),
			'qr_start_date' => $param->sort('qr_start_date', 'asc'),
			'qr_end_date' => $param->sort('qr_end_date', 'asc'),
			'qr_hit' => $param->sort('qr_hit', 'asc'),
			'qr_order' => $param->sort('qr_order', 'asc'),
			'qr_activated' => $param->sort('qr_activated', 'asc'),
		);
		$findex = $this->input->get('findex') ? $this->input->get('findex') : $this->{$this->modelname}->primary_key;
		$forder = $this->input->get('forder', null, 'desc');
		$sfield = $this->input->get('sfield', null, '');
		$skeyword = $this->input->get('skeyword', null, '');

		$per_page = admin_listnum();
		$offset = ($page - 1) * $per_page;

		/**
		 * 게시판 목록에 필요한 정보를 가져옵니다.
		 */
		$this->{$this->modelname}->allow_search_field = array('qr_id', 'qr_title', 'qr_url','qr_target'); // 검색이 가능한 필드
		$this->{$this->modelname}->search_field_equal = array('qr_id'); // 검색중 like 가 아닌 = 검색을 하는 필드
		$this->{$this->modelname}->allow_order_field = array('qr_id', 'qr_start_date', 'qr_end_date', 'qr_title', 'qr_url','qr_target', 'qr_hit', 'qr_order', 'qr_activated'); // 정렬이 가능한 필드

		$where = array();
		if ($this->input->get('qr_activated') === 'Y') {
			$where['qr_activated'] = '1';
		}
		if ($this->input->get('qr_activated') === 'N') {
			$where['qr_activated'] = '0';
		}

		$result = $this->{$this->modelname}
			->get_admin_list($per_page, $offset, $where, '', $findex, $forder, $sfield, $skeyword);
		$list_num = $result['total_rows'] - ($page - 1) * $per_page;
		if (element('list', $result)) {
			foreach (element('list', $result) as $key => $val) {
				if (element('qr_image', $val)) {
					$result['list'][$key]['thumb_url'] = thumb_url('qrcode', element('qr_image', $val), '80');
				}
				if (empty($val['qr_start_date']) OR $val['qr_start_date'] === '0000-00-00') {
					$result['list'][$key]['qr_start_date'] = '미지정';
				}
				if (empty($val['qr_end_date']) OR $val['qr_end_date'] === '0000-00-00') {
					$result['list'][$key]['qr_end_date'] = '미지정';
				}
				$result['list'][$key]['num'] = $list_num--;
			}
		}

		$view['view']['data'] = $result;

		/**
		 * primary key 정보를 저장합니다
		 */
		$view['view']['primary_key'] = $this->{$this->modelname}->primary_key;

		/**
		 * 페이지네이션을 생성합니다
		 */
		$config['base_url'] = admin_url($this->pagedir) . '?' . $param->replace('page');
		$config['total_rows'] = $result['total_rows'];
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		$view['view']['paging'] = $this->pagination->create_links();
		$view['view']['page'] = $page;

		/**
		 * 쓰기 주소, 삭제 주소등 필요한 주소를 구합니다
		 */
		$search_option = array('qr_title' => '설명', 'qr_url' => 'Qrcode URL');
		$view['view']['skeyword'] = ($sfield && array_key_exists($sfield, $search_option)) ? $skeyword : '';
		$view['view']['search_option'] = search_option($search_option, $sfield);
		$view['view']['listall_url'] = admin_url($this->pagedir);
		$view['view']['write_url'] = admin_url($this->pagedir . '/write');
		$view['view']['list_delete_url'] = admin_url($this->pagedir . '/listdelete/?' . $param->output());

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 어드민 레이아웃을 정의합니다
		 */
		$layoutconfig = array('layout' => 'layout', 'skin' => 'index');
		$view['layout'] = $this->managelayout->admin($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	/**
	 * 게시판 글쓰기 또는 수정 페이지를 가져오는 메소드입니다
	 */
	public function write($pid = 0)
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_admin_page_Qrcode_write';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		/**
		 * 프라이머리키에 숫자형이 입력되지 않으면 에러처리합니다
		 */
		if ($pid) {
			$pid = (int) $pid;
			if (empty($pid) OR $pid < 1) {
				show_404();
			}
		}
		$primary_key = $this->{$this->modelname}->primary_key;

		/**
		 * 수정 페이지일 경우 기존 데이터를 가져옵니다
		 */
		$getdata = array();
		if ($pid) {
			$getdata = $this->{$this->modelname}->get_one($pid);
		}

		$group = $this->Qr_group_model->get_all_group();

		if (empty($group)) {
			alert('QR코드 위치를 먼저 생성하신 후에 QR코드 추가가 가능합니다. QR코드위치 생성 페이지로 이동합니다', admin_url($this->pagedir . '/group'));
		}

		$view['view']['group'] = $group;

		/**
		 * Validation 라이브러리를 가져옵니다
		 */
		$this->load->library('form_validation');

		/**
		 * 전송된 데이터의 유효성을 체크합니다
		 */

		$config[] = array(
			'field' => 'qrg_name',
			'label' => 'QR코드위치',
			'rules' => 'trim|required',
		);
	/* 	$config[] = array(
			'field' => 'qr_start_date',
			'label' => 'QR코드시작일',
			'rules' => 'trim|alpha_dash|exact_length[10]',
		);
		$config[] = array(
			'field' => 'qr_end_date',
			'label' => 'QR코드종료일',
			'rules' => 'trim|alpha_dash|exact_length[10]',
		); */
		$config[] = array(
			'field' => 'qr_title',
			'label' => '설명',
			'rules' => 'trim|required',
		);
		
		$config[] = array(
			'field' => 'qr_target',
			'label' => '타겟',
			'rules' => 'trim|valid_url',
		);
		$config[] = array(
			'field' => 'qr_device',
			'label' => 'QR코드표시기기',
			'rules' => 'trim|required',
		);
		
		$config[] = array(
			'field' => 'qr_order',
			'label' => '정렬순서',
			'rules' => 'trim|required|numeric|is_natural',
		);
		$config[] = array(
			'field' => 'qr_activated',
			'label' => 'QR코드활성화',
			'rules' => 'trim',
		);

			if($this->input->post($primary_key)) {
				$config[] = array(
					'field' => 'qr_url',
					'label' => 'Qrcode URL',
					'rules' => 'trim|is_unique[qrcode.qr_url.qr_url.' . element('qr_url', $getdata).']',
				);
				
			}else{
				$config[] = array(
					'field' => 'qr_url',
					'label' => 'Qrcode URL',
					'rules' => 'trim|is_unique[qrcode.qr_url]',
				);

			} 



		$this->form_validation->set_rules($config);
		$form_validation = $this->form_validation->run();
		$file_error = '';
		$updatephoto = '';

		if ($form_validation) {
			$this->load->library('upload');
			if (isset($_FILES) && isset($_FILES['qr_image']) && isset($_FILES['qr_image']['name']) && $_FILES['qr_image']['name']) {
				$upload_path = config_item('uploads_dir') . '/Qrcode/';
				if (is_dir($upload_path) === false) {
					mkdir($upload_path, 0707);
					$file = $upload_path . 'index.php';
					$f = @fopen($file, 'w');
					@fwrite($f, '');
					@fclose($f);
					@chmod($file, 0644);
				}
				$upload_path .= cdate('Y') . '/';
				if (is_dir($upload_path) === false) {
					mkdir($upload_path, 0707);
					$file = $upload_path . 'index.php';
					$f = @fopen($file, 'w');
					@fwrite($f, '');
					@fclose($f);
					@chmod($file, 0644);
				}
				$upload_path .= cdate('m') . '/';
				if (is_dir($upload_path) === false) {
					mkdir($upload_path, 0707);
					$file = $upload_path . 'index.php';
					$f = @fopen($file, 'w');
					@fwrite($f, '');
					@fclose($f);
					@chmod($file, 0644);
				}

				$uploadconfig = array();
				$uploadconfig['upload_path'] = $upload_path;
				$uploadconfig['allowed_types'] = 'jpg|jpeg|png|gif';
				$uploadconfig['max_size'] = '2000';
				$uploadconfig['max_width'] = '1000';
				$uploadconfig['max_height'] = '1000';
				$uploadconfig['encrypt_name'] = true;

				$this->upload->initialize($uploadconfig);

				if ($this->upload->do_upload('qr_image')) {
					$img = $this->upload->data();
					$updatephoto = cdate('Y') . '/' . cdate('m') . '/' . element('file_name', $img);
				} else {
					$file_error = $this->upload->display_errors();
				}
			}
		}


		/**
		 * 유효성 검사를 하지 않는 경우, 또는 유효성 검사에 실패한 경우입니다.
		 * 즉 글쓰기나 수정 페이지를 보고 있는 경우입니다
		 */
		if ($form_validation === false OR $file_error !== '') {

			// 이벤트가 존재하면 실행합니다
			$view['view']['event']['formrunfalse'] = Events::trigger('formrunfalse', $eventname);
			$view['view']['message'] = $file_error;

			if ($pid) {
				if (empty($getdata['qr_start_date']) OR $getdata['qr_start_date'] === '0000-00-00') {
					$getdata['qr_start_date'] = '';
				}
				if (empty($getdata['qr_end_date']) OR $getdata['qr_end_date'] === '0000-00-00') {
					$getdata['qr_end_date'] = '';
				}
				$view['view']['data'] = $getdata;
			}

			/**
			 * primary key 정보를 저장합니다
			 */
			$view['view']['primary_key'] = $primary_key;
			// 이벤트가 존재하면 실행합니다
			$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

			/**
			 * 어드민 레이아웃을 정의합니다
			 */
			$layoutconfig = array('layout' => 'layout', 'skin' => 'write');
			$view['layout'] = $this->managelayout->admin($layoutconfig, $this->cbconfig->get_device_view_type());
			$this->data = $view;
			$this->layout = element('layout_skin_file', element('layout', $view));
			$this->view = element('view_skin_file', element('layout', $view));

		} else {
			/**
			 * 유효성 검사를 통과한 경우입니다.
			 * 즉 데이터의 insert 나 update 의 process 처리가 필요한 상황입니다
			 */

			// 이벤트가 존재하면 실행합니다
			$view['view']['event']['formruntrue'] = Events::trigger('formruntrue', $eventname);

			$content_type = $this->cbconfig->item('use_popup_dhtml') ? 1 : 0;

			$qr_start_date = $this->input->post('qr_start_date');
			if ( ! $qr_start_date) $qr_start_date = null;
			$qr_end_date = $this->input->post('qr_end_date');
			if ( ! $qr_end_date) $qr_end_date = null;
			$qr_width = $this->input->post('qr_width') ? $this->input->post('qr_width') : 0;
			$qr_height = $this->input->post('qr_height') ? $this->input->post('qr_height') : 0;
			$qr_order = $this->input->post('qr_order') ? $this->input->post('qr_order') : 0;
			$qr_activated = $this->input->post('qr_activated') ? 1 : 0;
			$qr_image = $this->generate_qrcode($_POST,'write');
			$updatedata = array(
				'qr_start_date' => $qr_start_date,
				'qr_end_date' => $qr_end_date,
				'qr_title' => $this->input->post('qr_title', null, ''),
				'qrg_name' => $this->input->post('qrg_name', null, ''),
				'qr_url' => $this->input->post('qr_url', null, ''),
				'qr_target' => $this->input->post('qr_target', null, ''),
				'qr_device' => $this->input->post('qr_device', null, ''),
				'qr_ecc_level' => $this->input->post('qr_ecc_level', null, ''),
				'qr_pixel_size' => $this->input->post('qr_pixel_size', null, ''),
				'qr_frame_size' => $this->input->post('qr_frame_size', null, ''),
				'qr_width' => $qr_width,
				'qr_height' => $qr_height,
				'qr_order' => $qr_order,
				'qr_activated' => $qr_activated,
				'qr_image' => $qr_image,
			);

			/**
			 * 게시물을 수정하는 경우입니다
			 */
			if ($this->input->post($primary_key)) {
				$this->cache->delete('Qrcode/Qrcode-' . element('qrg_name', $getdata) . '-random-' . cdate('Y-m-d'));
				$this->cache->delete('Qrcode/Qrcode-' . element('qrg_name', $getdata) . '-order-' . cdate('Y-m-d'));
				$this->{$this->modelname}->update($this->input->post($primary_key), $updatedata);
				$this->session->set_flashdata(
					'message',
					'정상적으로 수정되었습니다'
				);
			} else {
				/**
				 * 게시물을 새로 입력하는 경우입니다
				 */
				$updatedata['qr_datetime'] = cdate('Y-m-d H:i:s');
				$updatedata['qr_ip'] = $this->input->ip_address();
				$updatedata['mem_id'] = $this->member->item('mem_id');
				$this->{$this->modelname}->insert($updatedata);
				$this->session->set_flashdata(
					'message',
					'정상적으로 입력되었습니다'
				);
			}

			// 이벤트가 존재하면 실행합니다
			Events::trigger('after', $eventname);

			/**
			 * 게시물의 신규입력 또는 수정작업이 끝난 후 목록 페이지로 이동합니다
			 */
			$param =& $this->querystring;
			$redirecturl = admin_url($this->pagedir . '?' . $param->output());

			redirect($redirecturl);
		}
	}

	/**
	 * QR코드 위치관리 페이지를 가져오는 메소드입니다
	 */
	public function group()
	{

		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_admin_page_Qr_group';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		/**
		 * Validation 라이브러리를 가져옵니다
		 */
		$this->load->library('form_validation');
		/**
		 * 전송된 데이터의 유효성을 체크합니다
		 */
		$config = array(
			array(
				'field' => 'qrg_name',
				'label' => '위치명',
				'rules' => 'trim|required|alpha_dash|is_unique[qr_group.qrg_name]',
			),
		);
		$this->form_validation->set_rules($config);

		/**
		 * 유효성 검사를 하지 않는 경우, 또는 유효성 검사에 실패한 경우입니다.
		 * 즉 글쓰기나 수정 페이지를 보고 있는 경우입니다
		 */
		if ($this->form_validation->run() === false) {

			// 이벤트가 존재하면 실행합니다
			$view['view']['event']['formrunfalse'] = Events::trigger('formrunfalse', $eventname);

		} else {
			/**
			 * 유효성 검사를 통과한 경우입니다.
			 * 즉 데이터의 insert 나 update 의 process 처리가 필요한 상황입니다
			 */

			// 이벤트가 존재하면 실행합니다
			$view['view']['event']['formruntrue'] = Events::trigger('formruntrue', $eventname);

			$insertdata = array(
				'qrg_name' => $this->input->post('qrg_name', null, ''),
			);
			$this->Qr_group_model->insert($insertdata);
		}

		/**
		 * 페이지에 숫자가 아닌 문자가 입력되거나 1보다 작은 숫자가 입력되면 에러 페이지를 보여줍니다.
		 */
		$param =& $this->querystring;
		$findex = $this->input->get('findex', null, 'bng_group');
		$forder = $this->input->get('forder', null, 'asc');

		$result = $this->Qr_group_model
				->get_admin_list(1000, 0, '', '', $findex, $forder);
		if (element('list', $result)) {
			foreach (element('list', $result) as $key => $val) {
				$countwhere = array(
					'qrg_name' => element('qrg_name', $val),
				);
				$result['list'][$key]['Qrcode_count'] = $this->Qrcode_model->count_by($countwhere);
			}
		}

		$view['view']['data'] = $result;

		$primary_key = $this->Qr_group_model->primary_key;

		$view['view']['list_delete_url'] = admin_url($this->pagedir . '/groupdelete/?' . $param->output());
		$view['view']['primary_key'] = $primary_key;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 어드민 레이아웃을 정의합니다
		 */
		$layoutconfig = array('layout' => 'layout', 'skin' => 'group');
		$view['layout'] = $this->managelayout->admin($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));

	}

	/**
	 * 목록 페이지에서 선택삭제를 하는 경우 실행되는 메소드입니다
	 */
	public function listdelete()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_admin_page_Qrcode_listdelete';
		$this->load->event($eventname);

		// 이벤트가 존재하면 실행합니다
		Events::trigger('before', $eventname);

		/**
		 * 체크한 게시물의 삭제를 실행합니다
		 */
		if ($this->input->post('chk') && is_array($this->input->post('chk'))) {
			foreach ($this->input->post('chk') as $val) {
				if ($val) {
					$getdata = $this->{$this->modelname}->get_one($val);
					$this->cache->delete('Qrcode/Qrcode-' . element('qrg_name', $getdata) . '-random-' . cdate('Y-m-d'));
					$this->cache->delete('Qrcode/Qrcode-' . element('qrg_name', $getdata) . '-order-' . cdate('Y-m-d'));
					$this->{$this->modelname}->delete($val);
				}
			}
		}

		// 이벤트가 존재하면 실행합니다
		Events::trigger('after', $eventname);

		/**
		 * 삭제가 끝난 후 목록페이지로 이동합니다
		 */
		$this->session->set_flashdata(
			'message',
			'정상적으로 삭제되었습니다'
		);
		$param =& $this->querystring;
		$redirecturl = admin_url($this->pagedir . '?' . $param->output());
		redirect($redirecturl);
	}

	/**
	 * 목록 페이지에서 선택삭제를 하는 경우 실행되는 메소드입니다
	 */
	public function groupdelete()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_admin_page_Qr_groupdelete';
		$this->load->event($eventname);

		// 이벤트가 존재하면 실행합니다
		Events::trigger('before', $eventname);

		/**
		 * 체크한 게시물의 삭제를 실행합니다
		 */
		if ($this->input->post('chk') && is_array($this->input->post('chk'))) {
			foreach ($this->input->post('chk') as $val) {
				if ($val) {
					$this->Qr_group_model->delete($val);
				}
			}
		}

		// 이벤트가 존재하면 실행합니다
		Events::trigger('after', $eventname);

		/**
		 * 삭제가 끝난 후 목록페이지로 이동합니다
		 */
		$this->session->set_flashdata(
			'message',
			'정상적으로 삭제되었습니다'
		);
		$param =& $this->querystring;
		$redirecturl = admin_url($this->pagedir . '/group?' . $param->output());

		redirect($redirecturl);
	}
	public function generate_qrcode($qr_data=[],$type="view")
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_generate_qrcode';
		$this->load->event($eventname);

		$ecc_level = $qr_data['qr_ecc_level']; 
		$pixel_size = $qr_data['qr_pixel_size'];
		$frame_size = $qr_data['qr_frame_size'];
		//$qr_id = $qr_data['qr_id'];
		$codeContents = qr_url($qr_data['qr_url']); 
		$filePath = config_item('uploads_dir') . '/qrcode/'.$qr_data['qr_url'].".png";
		
		if($type == 'view'){
			return $filePath;
		}else {
			if(file_exists($filePath)) {
				unlink($filePath);
			}
			QRcode::png($codeContents, $filePath, $ecc_level ,$pixel_size,$frame_size);
		}
		return $filePath;
	}


}
