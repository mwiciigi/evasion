<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$data['main_content'] = 'user/dashboard';
		$this->load->view('user/includes/template',$data);
	}

  public function profile(){
    $data['main_content'] = 'user/profile';
    $this->load->view('user/includes/template',$data);
  }

	public function bookings(){
		$data['main_content'] = 'user/bookings';
		$this->load->view('user/includes/template',$data);
	}

	public function messages(){
		$data['main_content'] = 'user/messages';
		$this->load->view('user/includes/template',$data);
	}

	public function mylisting(){
		$data['main_content'] = 'user/mylisting';
		$this->load->view('user/includes/template',$data);
	}

	public function resetmypassword(){
		$data['main_content'] = 'user/resetpassword';
		$this->load->view('user/includes/template',$data);
	}

	public function reviews(){
		$data['main_content'] = 'user/reviews';
		$this->load->view('user/includes/template',$data);
	}

	public function addnew(){
		$data['main_content'] = 'user/addnew';
		$this->load->view('user/includes/template',$data);
	}
}
