<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Laptop extends MY_Controller {


	    public function __construct() 
    {
        parent::__construct();
        
        // Get the last segment in the URI, and only redirect out of the
        // protected area if it is NOT the login form
        $section = $this->uri->segment_array();
        array_shift($section);
        
        $section = end($this->uri->segment_array());
        if ($section != 'login' && $section != 'submit' 
                && $this->session->userdata('user_id') == false
                ) {
            redirect(site_url('dashboard/login'));
        }
    }

    // -----------------------------------------------------------------------

        public function index()
    {
        $this->load->view('laptop/home', $this->data);
    }

    public function laptops()
    {
		$this->load->model('user_model');
        
        $this->data['users'] = $this->user_model->get();

        $this->data['laptop'] = $this->user_model->getlaptops();
        
        $this->load->view('laptop/laptops', $this->data);
    }

    public function reserve()
    {
       $this->load->model('user_model'); 
    }
}