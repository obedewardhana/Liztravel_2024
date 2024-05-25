<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Syarat extends CI_Controller
{
    private $dataAdmin;

    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('site_lang') == '') {
            $this->session->set_userdata('site_lang', 'english');
        }

        $this->load->model("user_model");
        $this->load->model("products_model");
        $this->load->model("banners_model");
        $this->load->model("orders_model");
    }

    public function index()
    {
        $push = [
            "pageTitle" => "Syarat & Ketentuan",
            "language" => $this->session->userdata('site_lang')
        ];
        $this->template->load(template() . '/template', template() . '/syarat', $push);
    }

}