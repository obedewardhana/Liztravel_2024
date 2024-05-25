<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Travel extends CI_Controller
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
        $this->load->model("partners_model");
        $this->load->model("partnership_model");
    }

    public function index()
    {
        $push = [
            "pageTitle" => "Tempat Wisata",
            "dataProducts" => $this->products_model->get_travel()->result(),
            "dataClients" => $this->partners_model->get()->result(),
            "dataBanner" => $this->banners_model->get_travel()->row(),
            "language" => $this->session->userdata('site_lang')
        ];
        $this->template->load(template() . '/template', template() . '/travel', $push);
    }
}