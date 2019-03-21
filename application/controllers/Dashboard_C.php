<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Dashboard_C extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Category_M');
            $this->load->model('Brand_M');
            $this->load->model('MP_M');

            if($this->session->all_userdata("username") == ""){
                
                redirect('User_C/login','refresh');
                
            }
            
            // $this->session->sess_destroy();
            // echo $this->session->all_userdata("username");
            
        }
        

        public function index()
        {
            $data["loadPage"] = "main";
            $data["main"] = "active";
            $this->load->view('dashboard', $data);
        }

        public function addBC()
        {
            $data["loadPage"] = "addBC";
            $data["bc"] = "active";
            $data["dataCategory"] = $this->Category_M->getCat();
            $data["dataBrand"] = $this->Brand_M->getBrand();
            $this->load->view('dashboard', $data);
        }
    
        public function brand()
        {
            $data["loadPage"] = "brandList";
            $data["brand"] = "active";
            $data["dataBrand"] = $this->Brand_M->getBrand();
            $this->load->view('dashboard', $data);
        }

        public function category()
        {
            $data["loadPage"] = "categoryList";
            $data["category"] = "active";
            $data["dataCategory"] = $this->Category_M->getCat();
            $this->load->view('dashboard', $data);
        }
        
        public function mp()
        {
            $data["loadPage"] = "manageProducts";
            $data["mp"] = "active";
            $data["dataCategory"] = $this->Category_M->getCat();
            $data["dataBrand"] = $this->Brand_M->getBrand();
            $data["dataMP"] = $this->MP_M->getProduct();
            $this->load->view('dashboard', $data);
        }
    }
    
    /* End of file Dashboard_C.php */
    
?>