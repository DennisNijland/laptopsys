<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

    // ------------------------------------------------------------------------
    
    public function __construct() 
    {
        parent::__construct();
        

        $this->load->model('user_model');
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
    
    // ------------------------------------------------------------------------
    
    public function index()
    {
        redirect(site_url('dashboard/login'));
    }

    // ------------------------------------------------------------------------
    
    public function login($submit = null)
    {
        if ($submit == null) {
            $this->load->view('dashboard/login', $this->data);
            return true;
        }
    
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        //$type = $this->user_model->gettype();
        
        //var_dump($type);
        //die;
        
        $result = $this->user_model->login('type',$email, $password);
        
        //var_dump($type);
       // die;        
       if ($result == true) {
            if ($type = 'user') {
                $this->session->set_userdata('user_id', 1);
                redirect(site_url('dashboard/home'));
            }elseif ($type = 'admin') {
                $this->session->set_userdata('user_id', 1);
                $this->session->set_userdata('is_admin', 1);
                redirect(site_url('admin/home'));
            }
       } else {
            redirect(site_url('dashboard/login'));
       }
    }

    public function create_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $date_added =$this->input->post('date_added');     
        $this->load->model('user_model');
        $this->user_model->create($email, $password, $date_added);
    }
    
    // ------------------------------------------------------------------------

    public function home()
    {
        $this->load->view('inc/header');
        $this->data['user'] = $this->user_model->gettype();
        $this->load->view('dashboard/home', $this->data);
        $this->load->view('inc/footer');
    }
    
    
    // ------------------------------------------------------------------------

    public function account()
    {
        $this->load->view('inc/header');
        $this->load->view('dashboard/account', $this->data);
        $this->load->view('inc/footer');
    }
    

    
    // ------------------------------------------------------------------------

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('dashboard/login'));
    }
    
    // ------------------------------------------------------------------------
}
