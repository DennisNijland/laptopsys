<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

    // ------------------------------------------------------------------------
    
    public function index()
    {
        $this->load->view('home', $this->data);
    }
    
    public function register()
    {
        $this->load->view('inc/header');
        $this->load->view('home/register', $this->data);
        $this->load->view('inc/footer');
    }

    public function create_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $date_added =$this->input->post('date_added');     
        $this->load->model('user_model');
        $this->user_model->create($email, $password, $date_added);
        redirect(site_url('home'));
    }
    
    // ------------------------------------------------------------------------
    
}
