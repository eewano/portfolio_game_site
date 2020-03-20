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

    public function set_chara_data()
    {
        $data = array(
            'name' => $this->input->post('name'),
            // 'icon' => $this->input->post('icon'),
            // 'photo01' => $this->input->post('photo01'),
            // 'photo02' => $this->input->post('photo02'),
            // 'photo03' => $this->input->post('photo03'),
            'sex' => $this->input->post('sex'),
            'class' => $this->input->post('class'),
            // 'blood01' => $this->input->post('blood01'),
            // 'blood02' => $this->input->post('blood02'),
            // 'blood03' => $this->input->post('blood03'),
            // 'blood04' => $this->input->post('blood04'),
            'hp' => $this->input->post('hp'),
            'strength' => $this->input->post('strength'),
            'magic' => $this->input->post('magic'),
            'dexterity' => $this->input->post('dexterity'),
            'speed' => $this->input->post('speed'),
            'luck' => $this->input->post('luck'),
            'defense' => $this->input->post('defense'),
            'resistance' => $this->input->post('resistance'),
            'skill01' => $this->input->post('skill01'),
            'skill02' => $this->input->post('skill02'),
            // 'skill03' => $this->input->post('skill03'),
            // 'skill04' => $this->input->post('skill04'),
            // 'skill05' => $this->input->post('skill05'),
            // 'skill06' => $this->input->post('skill06'),
            // 'skill07' => $this->input->post('skill07'),
            // 'skill08' => $this->input->post('skill08'),
            'profile' => $this->input->post('profile'),
            'message' => $this->input->post('message')
        );

        return $this->db->insert('character', $data);
    }
}