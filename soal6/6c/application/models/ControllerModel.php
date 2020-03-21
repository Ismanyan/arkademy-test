<?php

class ControllerModel extends CI_Model
{
    // Get All Product
    public function getProduct() {
        $this->db->select('product.id, product.name AS product_name, product.price AS product_price, category.name AS category_name, cashier.name AS cashier_name');
        $this->db->from('product');
        $this->db->join('cashier', 'product.id_cashier = cashier.id');
        $this->db->join('category', 'product.id_category = category.id');
        $query = $this->db->get()->result();
        return $query;
    }

    // Get Cashier
    public function getCashier()
    {
        $query = $this->db->get('cashier')->result();
        return $query;
    }

    // Get Category
    public function getCategory()
    {
        $query = $this->db->get('category')->result();
        return $query;
    }

    // Add Product
    public function addProduct($data) {
        $this->db->insert('product', $data);
        return $this->db->affected_rows();
    }

    // Delete Product
    public function deleteProduct($id) {
        $this->db->where('id', $id);
        $this->db->delete('product');
        return $this->db->affected_rows();
    }
}