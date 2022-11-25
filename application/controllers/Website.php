<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

	/**
	 * Website Page for this controller.
	 * Programmer Naufal Faza Fadhilah
	 * Copyright By HMIF NURATNIO 
	 */
	public function index()
	{
		$this->load->view('website/head');
		$this->load->view('website/body');
		$this->load->view('website/foot');
	}
}
