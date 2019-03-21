<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_C extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_M');


        // if($this->session->all_userdata("username") != null){
                
        //     redirect('Dashboard_C','refresh');
            
        // }
        
    }

    public function index()
    {
        $this->load->view('login');
        
    }

    public function register()
    {
        $this->load->view('register');
    }

    public function regist()
    {
        $this->User_M->regist();

        redirect('Dashboard_C','refresh');
    }

    public function login()
    {
        $this->User_M->login();

        redirect('Dashboard_C','refresh');
    }

    public function logout()
    {
        
        $this->session->sess_destroy();
        
        redirect('User_C','refresh');
        
    }

}

/* End of file User_C.php */

?>