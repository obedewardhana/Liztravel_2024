<?php

class Products_model extends CI_Model
{

    function post($data)
    {
        $this->db->insert("products", $data);
    }

    function get($where = array())
    {
        if ($where) {
            return $this->db->get_where("products", $where);
        } else {
            return $this->db->get("products");
        }
    }

    function get_total()
    {
        $query = $this->db->get('products');
        return $query->num_rows();
    }
    
    function get_taxi()
    {
        $where = array('availability' => 'Tersedia', 'category' => 'Taxi/Cargo');
        $query = $this->db->where($where)->get('products');
        return $query;
    }
    
    function get_room()
    {
        $where = array('availability' => 'Tersedia', 'category' => 'Penginapan');
        $query = $this->db->where($where)->get('products');
        return $query;
    }
    
    function get_travel()
    {
        $where = array('availability' => 'Tersedia', 'category' => 'Tempat wisata');
        $query = $this->db->where($where)->get('products');
        return $query;
    }

    function get_available()
    {
        $where = array('availability' => 'Tersedia', 'category' => 'Rent car');
        $query = $this->db->where($where)->get('products');
        return $query;
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('products');

        if ($result->num_rows() > 0) return $result->row();
        else return array();
    }

    function put($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("products", $data);
    }

    function delete($id)
    {
        $this->db->delete("products", ["id" => $id]);
    }
}
