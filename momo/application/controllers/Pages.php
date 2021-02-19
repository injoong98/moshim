<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Pages class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Pages extends CB_Controller
{

	/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Board');

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
		$this->load->library(array('querystring'));
	}


	/**
	 * 비전페이지
	 */
	public function vision()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'vision',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'vision';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
	/**
	 *  로그인 페이지
	 */
	public function login()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);
		
		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'login',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'login';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
	/**
	 * 비전페이지
	 */
	public function youtube()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'youtube',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'youtube';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
	/**
	 * 비전페이지
	 */
	public function books()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'books',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'books';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
	/**
	 * 비전페이지
	 */
	public function songs()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'songs',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'songs';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
	/**
	 * 비전페이지
	 */
	public function shop()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_Pages_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = $this->cbconfig->item('site_meta_title_Pages');
		$meta_description = $this->cbconfig->item('site_meta_description_Pages');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_Pages');
		$meta_author = $this->cbconfig->item('site_meta_author_Pages');
		$page_name = $this->cbconfig->item('site_page_name_Pages');

		$layoutconfig = array(
			'path' => 'pages',
			'layout' => 'layout_moshim',
			'skin' => 'shop',
			'layout_dir' => $this->cbconfig->item('layout_Pages'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_Pages'),
			'use_sidebar' => $this->cbconfig->item('sidebar_Pages'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_Pages'),
			'skin_dir' => $this->cbconfig->item('skin_Pages'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_Pages'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$view['layout']['menu_name'] = 'shop';
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}
}
