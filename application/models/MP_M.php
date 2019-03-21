<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MP_M extends CI_Model {

    public function addProduct()
    {
        $data = array(
            "product" => $this->input->post("product"),
            "id_category" => $this->input->post("id_category"),
            "id_brand" => $this->input->post("id_brand"),
            "price" => $this->input->post("price"),
            "stock" => $this->input->post("stock"),
        );
        $this->db->insert("product", $data);
    }

    public function getProduct()
    {
        return $this->db->join("category", "product.id_category = category.id_category")
                        ->join("brand", "product.id_brand = brand.id_brand")
                        ->get('product')->result();
    }

    public function deleteProduct($id)
    {
        $this->db->where("id_product", $id)->delete("product");
    }
    
    public function editProduct($id)
    {
        $data = array(
            "product" => $this->input->post("product"),
            "id_category" => $this->input->post("id_category"),
            "id_brand" => $this->input->post("id_brand"),
            "price" => $this->input->post("price"),
            "stock" => $this->input->post("stock"),
        );
        $this->db->where("id_product", $id)->update("product", $data);
    }

}

/* End of file MP_M.php */

?>