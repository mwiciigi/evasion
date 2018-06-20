<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}

	function about_us(){
		$data['main_content'] = 'fe/about_us';
		$this->load->view('fe/includes/template',$data);
	}

	function how_it_works(){
		$data['main_content'] = 'fe/our_services';
		$this->load->view('fe/includes/template',$data);
	}

	function contact(){
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}

	function career(){
		$data['main_content'] = 'fe/careers';
		$this->load->view('fe/includes/template',$data);
	}
}
