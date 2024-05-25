<?php

class Partnership_model extends CI_Model
{

    function post($data)
    {
        $this->db->insert("partnership", $data);
    }

    function get($where = array())
    {
        if ($where) {
            return $this->db->get_where("partnership", $where);
        } else {
            return $this->db->get("partnership");
        }
    }

    function get_total()
    {
        $query = $this->db->get('partnership');
        return $query->num_rows();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('partnership');

        if ($result->num_rows() > 0) return $result->row();
        else return array();
    }

    function put($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("partnership", $data);
    }

    function delete($id)
    {
        $this->db->delete("partnership", ["id" => $id]);
    }
}
