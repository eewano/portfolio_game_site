<?php

class Characters extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('characters_model');
        $this->load->helper('url_helper');
        $this->load->library('word_conversion');
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

    public function chara_register()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'キャラクター名', 'required');
        $this->form_validation->set_rules('sex', '性別', 'required');
        $this->form_validation->set_rules('class', 'ユニット', 'required');
        $this->form_validation->set_rules('hp', 'HPの成長率', 'required');
        $this->form_validation->set_rules('strength', '力の成長率', 'required');
        $this->form_validation->set_rules('magic', '魔力の成長率', 'required');
        $this->form_validation->set_rules('dexterity', '技の成長率', 'required');
        $this->form_validation->set_rules('speed', '素早さの成長率', 'required');
        $this->form_validation->set_rules('luck', '運の成長率', 'required');
        $this->form_validation->set_rules('defense', '守備力の成長率', 'required');
        $this->form_validation->set_rules('resistance', '魔法防御の成長率', 'required');
        $this->form_validation->set_rules('skill01', 'スキル01', 'required');
        $this->form_validation->set_rules('skill02', 'スキル02', 'required');
        $this->form_validation->set_rules('profile', 'プロフィール', 'required');
        $this->form_validation->set_rules('message', '一言', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('characters/chara_register');
            $this->load->view('templates/footer');
        } else {
            $this->characters_model->set_chara_data();
            $this->load->view('news/success');
        }
    }
}