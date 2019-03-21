<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category_M extends CI_Model {

    public function addCat()
    {
        $data = array(
            "category" => $this->input->post("category")
        );
        $this->db->insert("category", $data);
    }

    public function getCat()
    {
        return $this->db->get('category')->result();
    }

    public function deleteCategory($id)
    {
        $this->db->where("id_category", $id)->delete("category");
    }
    
    public function editCategory($id)
    {
        $data = array(
            "category" => $this->input->post("category")
        );
        $this->db->where("id_category", $id)->update("category", $data);
    }
}

/* End of file Category_M.php */

?>