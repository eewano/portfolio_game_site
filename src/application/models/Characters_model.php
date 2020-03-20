<?php

class Characters_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function get_chara_data($id = FALSE)
    {
        if ($id === FALSE) {
            $query = $this->db->get('character');
            return $query->result_array();
        }
        
        $query = $this->db->get_where('character', array('id' => $id));
        return $query->row_array();
    }
}