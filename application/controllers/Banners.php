<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Banners extends CI_Controller
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
        $this->load->model("banners_model");

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataHakakses = $this->hakakses_model->find_hakakses($this->dataAdmin->role,7);

        if($this->dataHakakses < 1){
            redirect(base_url("dashboard"));
        }
        
        $this->dataRole = $this->role_model->get_exclude()->result();
        $this->databanners = $this->banners_model->get()->result();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);
    }


    public function index()
    {

        $push = [
            "pageTitle" => "Banners",
            "dataAdmin" => $this->dataAdmin,
            "dataRole"  => $this->dataRole,
            "databanners"  => $this->databanners,
            "modulcek" => $this->dataModulcek
        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/banners', $push);
        $this->load->view('administrator/footer', $push);
    }

    public function json()
    {
        $this->load->model("datatables");
        $this->datatables->setTable("banners");
        $this->datatables->setColumn([
            '<index>',
            '<button type="button" class="btn-previewimg" data-id="<get-id>" data-photo="<get-photo>"><div class="table-img"><img src="././img/[default_pic=<get-photo>]"></div></button>',
            '<get-displayon>',
            '<div class="text-center">
            <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<get-id>" data-displayon="<get-displayon>"  data-photo="<get-photo>" ><i class="fa fa-edit"></i></button>
            </div>'
        ]);
        $this->datatables->setOrdering(["id","displayon", NULL]);
        $this->datatables->setSearchField(["displayon"]);
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
        $displayon = $this->input->post("displayon");
        if (!$displayon) {
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
                    "photo" => $gambar,
                    "displayon" => $displayon
                ];
            } else {
                $insertData = [
                    "id" => NULL,
                    "displayon" => $displayon
                ];
            }

            $response['status'] = TRUE;

            if ($action == "add") {
                $response['msg'] = "Data berhasil ditambahkan";
                $this->banners_model->post($insertData);
            } else {
                unset($insertData['id']);

                $response['msg'] = "Data berhasil diedit";
                $this->banners_model->put($id, $insertData);
            }
        }

        echo json_encode($response);
    }
    

    function delete($id)
    {
        $response = '';
        $this->banners_model->delete($id);
        if (!$this->banners_model->find($id)) {
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