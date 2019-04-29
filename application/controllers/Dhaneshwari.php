<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dhaneshwari extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['middel_body'] = 'index';
			$data['keep_slider'] = true;
			$this->load->view('template',$data);
	}

	public function about()
	{
		$data['middel_body'] = 'about';
		$this->load->view('template',$data);
	}

	public function services()
	{
		$data['middel_body'] = 'services';
		$this->load->view('template',$data);
	}

	public function transport()
	{
		$data['middel_body'] = 'transport';
		$this->load->view('template',$data);
	}

	public function manpower()
	{
		$data['middel_body'] = 'manpower';
		$this->load->view('template',$data);
	}

	public function event()
	{
		$data['middel_body'] = 'event';
		$this->load->view('template',$data);
	}

	public function hotel_booking()
	{
		$data['middel_body'] = 'hotel_booking';
		$this->load->view('template',$data);
	}

	public function consulting()
	{
		$data['middel_body'] = 'consulting';
		$this->load->view('template',$data);
	}

	public function contact()
	{
		$data['middel_body'] = 'contact';
		$this->load->view('template',$data);
	}

	public function projects()
	{
		$data['middel_body'] = 'projects';
		$this->load->view('template',$data);
	}
	public function construction()
	{
		$data['middel_body'] = 'construction';
		$this->load->view('template',$data);
	}
	public function hotel_booking1()
	{
		$data['middel_body'] = 'hotel_booking1';
		$this->load->view('template',$data);
	}
	public function vision()
	{
		$data['middel_body'] = 'vision';
		$this->load->view('template',$data);
	}
}
