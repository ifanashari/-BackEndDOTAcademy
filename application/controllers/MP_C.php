<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class MP_C extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('MP_M');
            
        }
        
        public function addProduct()
        {
            $this->MP_M->addProduct();
            
            redirect('Dashboard_C/mp','refresh');
            
        }
    
        public function deleteProduct($id)
        {
            $this->MP_M->deleteProduct($id);

            redirect('Dashboard_C/mp','refresh');
        }
    
        public function editProduct($id)
        {
            $this->MP_M->editProduct($id);

            redirect('Dashboard_C/mp','refresh');
        }
    
    }
    
    /* End of file MP_C.php */
    
?>