<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class User_M extends CI_Model {
    
        public function regist()
        {
            $data = array(
                "username" => $this->input->post("username"),
                "password" => $this->input->post("password"),
                "role" => 2,
            );

            $this->db->insert('user', $data);

            
            $array = array(
                "username" => $this->input->post("username"),
                "password" => $this->input->post("password"),
                "role" => 2,
            );
            
            $this->session->set_userdata("user", $array);
            
        }    

        public function login()
        {
            $data = array(
                "username" => $this->input->post("username"),
                "password" => $this->input->post("password"),
                "role" => 2,
            );

            $this->db->get_where('user', $data);

            
            $array = array(
                "username" => $this->input->post("username"),
                "password" => $this->input->post("password"),
                "role" => 2,
            );
            
            $this->session->set_userdata("user", $array);
            
        }  
    
    }
    
    /* End of file User_M.php */
    
?>