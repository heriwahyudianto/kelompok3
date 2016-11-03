<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	public function __construct()
    {
    	parent::__construct();
        $this->load->model('sekolah_model'); 
        $this->load->model('even_model');  
    }
    public function index()
	{	$this->load->view('header');
		$this->load->view('event_list');
		$this->load->view('footer');
	}
}
