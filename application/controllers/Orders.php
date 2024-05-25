<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
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
        $this->load->model("orders_model");
        $this->load->model("products_model");

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataHakakses = $this->hakakses_model->find_hakakses($this->dataAdmin->role, 8);

        if ($this->dataHakakses < 1) {
            redirect(base_url("dashboard"));
        }

        $this->dataRole = $this->role_model->get_exclude()->result();
        $this->dataOrders = $this->orders_model->get()->result();
        $this->dataProducts = $this->products_model->get()->result();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);
    }


    public function index()
    {

        $push = [
            "pageTitle" => "Orders",
            "dataAdmin" => $this->dataAdmin,
            "dataRole" => $this->dataRole,
            "dataOrders" => $this->dataOrders,
            "dataProducts" => $this->dataProducts,
            "modulcek" => $this->dataModulcek
        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/orders', $push);
        $this->load->view('administrator/footer', $push);
    }

    public function json()
    {
        $this->load->model("datatables");
        $this->datatables->setTable("orders");
        $this->datatables->setColumn([
            '<index>',
            '[tanggal_indo=<get-startdate>] <br> <get-starttime>',
            '[tanggal_indo=<get-enddate>] <br> <get-endtime>',
            '<get-name> <br> <get-handphone>',         
            '[product_name=<get-service>]',
            '[status_style=<get-status>]',
            '<div class="text-center">
            <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<get-id>" data-name="<get-name>" data-handphone="<get-handphone>" data-service="<get-service>" data-enddate="<get-enddate>" data-startdate="<get-startdate>" data-starttime="<get-starttime>" data-endtime="<get-endtime>" data-status="<get-status>" data-location="<get-location>" ><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<get-id>" data-name="<get-name>" ><i class="fa fa-trash"></i></button></div>'
        ]);
        $this->datatables->setOrdering(["id", "name","service","handphone","status","startdate","enddate","starttime","endtime", NULL]);
        $this->datatables->setSearchField(["name","service","handphone","status","startdate","enddate","starttime","endtime"]);
        $this->datatables->generate();

    }

    function insert()
    {
        $this->process();
    }

    function update($id)
    {
        $this->process("edit", $id);
    }

    private function process($action = "add", $id = 0)
    {
        $name = $this->input->post("name");
        $service = $this->input->post("service");
        $handphone = $this->input->post("handphone");
        $startdate = $this->input->post("startdate");
        $enddate = $this->input->post("enddate");
        $starttime = $this->input->post("starttime");
        $endtime = $this->input->post("endtime");
        $status = $this->input->post("status");
        $location = $this->input->post("location");

        if (!$name) {
            $response['status'] = FALSE;
            $response['msg'] = "Periksa kembali data yang anda masukkan";
        } else {

            $insertData = [
                "id" => NULL,
                "name" => $name,
                "service" => $service,
                "handphone" => $handphone,
                "location" => $location,
                "startdate" => $startdate,
                "enddate" => $enddate,
                "starttime" => $starttime,
                "endtime" => $endtime,
                "status" => $status
            ];

            $response['status'] = TRUE;

            if ($action == "add") {
                $response['msg'] = "Data berhasil ditambahkan";
                $this->orders_model->post($insertData);
            } else {
                unset($insertData['id']);

                $response['msg'] = "Data berhasil diedit";
                $this->orders_model->put($id, $insertData);
            }
        }

        echo json_encode($response);
    }

    function delete($id)
    {
        $response = '';
        $this->orders_model->delete($id);
        if (!$this->orders_model->find($id)) {
            $response = [
                'status' => TRUE,
                'msg' => "Data berhasil dihapus"
            ];
        } else {
            $response = [
                'status' => FALSE,
                'msg' => "Data gagal dihapus"
            ];
        }

        echo json_encode($response);
    }
}