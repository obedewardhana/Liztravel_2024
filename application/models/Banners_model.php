<?php

class Banners_model extends CI_Model
{

    function post($data)
    {
        $this->db->insert("banners", $data);
    }

    function get($where = array())
    {
        if ($where) {
            return $this->db->get_where("banners", $where);
        } else {
            return $this->db->get("banners");
        }
    }

    function get_homepage()
    {
        return $this->db->where('displayon','Rent car')->get("banners");
    }
    
    function get_taxi()
    {
        return $this->db->where('displayon','Taxi/Cargo')->get("banners");
    }
    
    function get_room()
    {
        return $this->db->where('displayon','Penginapan')->get("banners");
    }
    
    function get_travel()
    {
        return $this->db->where('displayon','Tempat Wisata')->get("banners");
    }

    function get_total()
    {
        $query = $this->db->get('banners');
        return $query->num_rows();
    }

    public function find($id)
    {
        $result = $this->db->where('id', $id)
            ->limit(1)
            ->get('banners');

        if ($result->num_rows() > 0)
            return $result->row();
        else
            return array();
    }

    function put($id, $data)
    {
        $this->db->where("id", $id);
        $this->db->update("banners", $data);
    }

    function delete($id)
    {
        $this->db->delete("banners", ["id" => $id]);
    }
}
