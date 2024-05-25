<?php

class Orders_model extends CI_Model
{

    function post($data)
    {
        $this->db->insert("orders", $data);
    }

    function get($where = array())
    {
        if ($where) {
            return $this->db->get_where("orders", $where);
        } else {
            return $this->db->get("orders");
        }
    }

    function get_total()
    {
        $query = $this->db->get('orders');
        return $query->num_rows();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('orders');

        if ($result->num_rows() > 0) return $result->row();
        else return array();
    }

    function put($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("orders", $data);
    }

    function delete($id)
    {
        $this->db->delete("orders", ["id" => $id]);
    }
}
