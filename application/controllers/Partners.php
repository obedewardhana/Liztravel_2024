<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Partners extends CI_Controller
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

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataHakakses = $this->hakakses_model->find_hakakses($this->dataAdmin->role,5);

        if($this->dataHakakses < 1){
            redirect(base_url("dashboard"));
        }
        
        $this->dataRole = $this->role_model->get_exclude()->result();
        $this->datapartners = $this->partners_model->get()->result();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);
    }


    public function index()
    {

        $push = [
            "pageTitle" => "Clients",
            "dataAdmin" => $this->dataAdmin,
            "dataRole"  => $this->dataRole,
            "datapartners"  => $this->datapartners,
            "modulcek" => $this->dataModulcek
        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/partners', $push);
        $this->load->view('administrator/footer', $push);
    }

    public function json()
    {
        $this->load->model("datatables");
        $this->datatables->setTable("partners");
        $this->datatables->setColumn([
            '<index>',
            '<button type="button" class="btn-previewimg" data-id="<get-id>" data-photo="<get-logo>"><div class="table-img"><img src="././img/[default_pic=<get-logo>]"></div></button>',
            '<get-nama>',
            '<div class="text-center">
            <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<get-id>" data-nama="<get-nama>"  data-photo="<get-logo>" ><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<get-id>" data-nama="<get-nama>" ><i class="fa fa-trash"></i></button></div>'
        ]);
        $this->datatables->setOrdering(["id","nama", NULL]);
        $this->datatables->setSearchField(["nama"]);
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
        $nama = $this->input->post("nama");
        $linkyoutube = $this->input->post("linkyoutube");
        if (!$nama) {
            $response['status'] = FALSE;
            $response['msg'] = "Periksa kembali data yang anda masukkan";
        } else {

            $config['upload_path'] = '././img/';
            $config['allowed_types'] = 'jpeg|jpg|png|JPEG|JPG|PNG';
            $config['max_size'] = 2048;
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('userfile')) {
                $gbr = $this->upload->data();
                $gambar = $gbr['file_name'];

                $insertData = [
                    "id" => NULL,
                    "nama" => $nama,
                    "logo" => $gambar
                ];
            } else {
                $insertData = [
                    "id" => NULL,
                    "nama" => $nama
                ];
            }

            $response['status'] = TRUE;

            if ($action == "add") {
                $response['msg'] = "Data berhasil ditambahkan";
                $this->partners_model->post($insertData);
            } else {
                unset($insertData['id']);

                $response['msg'] = "Data berhasil diedit";
                $this->partners_model->put($id, $insertData);
            }
        }

        echo json_encode($response);
    }
    

    function delete($id)
    {
        $response = '';
        $this->partners_model->delete($id);
        if (!$this->partners_model->find($id)) {
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