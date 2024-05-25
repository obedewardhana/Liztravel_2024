<?php

class Partners_model extends CI_Model
{

    function post($data)
    {
        $this->db->insert("partners", $data);
    }

    function get($where = array())
    {
        if ($where) {
            return $this->db->get_where("partners", $where);
        } else {
            return $this->db->get("partners");
        }
    }

    function get_total()
    {
        $query = $this->db->get('partners');
        return $query->num_rows();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('partners');

        if ($result->num_rows() > 0) return $result->row();
        else return array();
    }

    function put($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("partners", $data);
    }

    function delete($id)
    {
        $this->db->delete("partners", ["id" => $id]);
    }
}
