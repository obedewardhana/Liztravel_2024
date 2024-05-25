<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    private $dataAdmin;

    function __construct()
    {
        parent::__construct();

        if (!$this->session->auth) {
            redirect(base_url("auth/login"));
        }

        $this->load->model("user_model");
        $this->load->model("role_model");
        $this->load->model("hakakses_model");
        $this->load->model("partners_model");
        $this->load->model("products_model");
        $this->load->model("orders_model");

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);

    }


    public function index()
    {

        $push = [
            "pageTitle" => "Dashboard",
            "dataAdmin" => $this->dataAdmin,
            "user" => $this->user_model->get_total(),
            "role" => $this->role_model->get_total(),
            "orders" => $this->orders_model->get_total(),
            "products" => $this->products_model->get_total(),
            "clients" => $this->partners_model->get_total(),
            "allUser" => $this->user_model->get()->result(),
            "modulcek" => $this->dataModulcek

        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/dashboard', $push);
        $this->load->view('administrator/footer', $push);
    }

}
