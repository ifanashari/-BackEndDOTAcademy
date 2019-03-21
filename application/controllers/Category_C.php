<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Category_C extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Category_M');
            
        }
        
        public function addCat()
        {
            $this->Category_M->addCat();
            
            redirect('Dashboard_C/addBC','refresh');
            
        }
    
        public function deleteCategory($id)
        {
            $this->Category_M->deleteCategory($id);

            redirect('Dashboard_C/category','refresh');
        }
    
        public function editCategory($id)
        {
            $this->Category_M->editCategory($id);

            redirect('Dashboard_C/category','refresh');
        }
    }
    
    /* End of file Category_C.php */
    
?>