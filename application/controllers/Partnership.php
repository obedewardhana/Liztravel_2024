<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partnership extends CI_Controller
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
        $this->load->model("partnership_model");

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataHakakses = $this->hakakses_model->find_hakakses($this->dataAdmin->role, 6);

        if ($this->dataHakakses < 1) {
            redirect(base_url("dashboard"));
        }

        $this->dataRole = $this->role_model->get_exclude()->result();
        $this->dataPartnership = $this->partnership_model->get()->result();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);
    }


    public function index()
    {

        $push = [
            "pageTitle" => "Partnership",
            "dataAdmin" => $this->dataAdmin,
            "dataRole" => $this->dataRole,
            "dataPartnership" => $this->dataPartnership,
            "modulcek" => $this->dataModulcek
        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/partnership', $push);
        $this->load->view('administrator/footer', $push);
    }

    public function json()
    {
        $this->load->model("datatables");
        $this->datatables->setTable("partnership");
        $this->datatables->setColumn([
            '<index>',
            '<get-name>',
            '<get-no>',
            '<get-type>',
            '<div class="text-center">
            <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<get-id>" data-name="<get-name>" data-no="<get-no>" data-type="<get-type>" data-date="<get-date>" ><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<get-id>" data-name="<get-name>" ><i class="fa fa-trash"></i></button></div>'
        ]);
        $this->datatables->setOrdering(["id", "name","no","type","date", NULL]);
        $this->datatables->setSearchField(["name","no","type","date"]);
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
        $type = $this->input->post("type");
        $no = $this->input->post("no");
        $date = date("Y:m:d H:i:s");

        if (!$name) {
            $response['status'] = FALSE;
            $response['msg'] = "Periksa kembali data yang anda masukkan";
        } else {

            $insertData = [
                "id" => NULL,
                "name" => $name,
                "type" => $type,
                "no" => $no,
                "date" => $date,
            ];

            $response['status'] = TRUE;

            if ($action == "add") {
                $response['msg'] = "Data berhasil ditambahkan";
                $this->partnership_model->post($insertData);
            } else {
                unset($insertData['id']);

                $response['msg'] = "Data berhasil diedit";
                $this->partnership_model->put($id, $insertData);
            }
        }

        echo json_encode($response);
    }


    function delete($id)
    {
        $response = '';
        $this->partnership_model->delete($id);
        if (!$this->partnership_model->find($id)) {
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