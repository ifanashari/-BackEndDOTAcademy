<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Brand_M extends CI_Model {

    public function addBrand()
    {
        $data = array(
            "brand" => $this->input->post("brand")
        );
        $this->db->insert("brand", $data);
    }

    public function getBrand()
    {
        return $this->db->get("brand")->result();
    }

    public function deleteBrand($id)
    {
        $this->db->where("id_brand", $id)->delete("brand");
    }
    
    public function editBrand($id)
    {
        $data = array(
            "brand" => $this->input->post("brand")
        );
        $this->db->where("id_brand", $id)->update("brand", $data);
    }
}

/* End of file Brand_M.php */

?>