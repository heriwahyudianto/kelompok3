<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	public function __construct()
    {
    	parent::__construct();
        $this->load->model('sekolah_model'); 
        $this->load->model('event_model'); 
        $this->session->set_userdata(  ['idSekolah'  => 1,
        	'logged_in' => TRUE
        ]); 
    }
    public function index()
	{	
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data=[
				//'event' => $this->event_model->getEventBySekolahId($this->session->idSekolah),
				'sekolah' => $this->sekolah_model->getSekolahById($this->session->idSekolah),
			];
			$this->load->view('header');
			$this->load->view('profile', $data);
			$this->load->view('footer');			
		} else {
			$this->sekolah_model->updSekolah($this->input->post());
			redirect('sekolah');
		}
		
	}
}
