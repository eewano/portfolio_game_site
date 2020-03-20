<?php

class Characters extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('characters_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['character'] = $this->characters_model->get_chara_data();

        $this->load->view('templates/header', $data);
        $this->load->view('characters/chara_top', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['chara'] = $this->characters_model->get_chara_data($id);

        if (empty($data['chara'])) {
            show_404();
        }

        $data['name'] = $data['chara']['name'];

        $this->load->view('templates/header', $data);
        $this->load->view('characters/chara_detail', $data);
        $this->load->view('templates/footer');
    }
}