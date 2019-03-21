<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Brand_C extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Brand_M');
            
        }
        
        public function addBrand()
        {
            $this->Brand_M->addBrand();
            
            redirect('Dashboard_C/addBC','refresh');
            
        }

        public function deleteBrand($id)
        {
            $this->Brand_M->deleteBrand($id);

            redirect('Dashboard_C/brand','refresh');
        }
    
        public function editBrand($id)
        {
            $this->Brand_M->editBrand($id);

            redirect('Dashboard_C/brand','refresh');
        }
    }
    
    /* End of file Brand_C.php */
    
?>