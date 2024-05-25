<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
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
        $this->load->model("products_model");

        $this->dataAdmin = $this->user_model->get(["id" => $this->session->auth['id']])->row();
        $this->dataHakakses = $this->hakakses_model->find_hakakses($this->dataAdmin->role,4);

        if($this->dataHakakses < 1){
            redirect(base_url("dashboard"));
        }
        
        $this->dataRole = $this->role_model->get_exclude()->result();
        $this->dataproducts = $this->products_model->get()->result();
        $this->dataModulcek = $this->hakakses_model->find_moduls($this->dataAdmin->role);
    }


    public function index()
    {

        $push = [
            "pageTitle" => "Products",
            "dataAdmin" => $this->dataAdmin,
            "dataRole"  => $this->dataRole,
            "dataproducts"  => $this->dataproducts,
            "modulcek" => $this->dataModulcek
        ];

        $this->load->view('administrator/header', $push);
        $this->load->view('administrator/products', $push);
        $this->load->view('administrator/footer', $push);
    }

    public function json()
    {
        $this->load->model("datatables");
        $this->datatables->setTable("products");
        $this->datatables->setColumn([
            '<index>',
            '<button type="button" class="btn-previewimg" data-id="<get-id>" data-photo="<get-photo>"><div class="table-img"><img src="././img/[default_pic=<get-photo>]"></div></button>',
            '<get-name>',
            '<get-availability>',
            '<div class="text-center">
            <button type="button" class="btn btn-primary btn-sm btn-edit" data-id="<get-id>" data-name="<get-name>" data-category="<get-category>" data-photo="<get-photo>" data-transmission="<get-transmission>" data-seat="<get-seat>" data-wifi="<get-wifi>" data-hotwater="<get-hotwater>" data-price="<get-price>" data-availability="<get-availability>"><i class="fa fa-edit"></i></button>
            <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="<get-id>" data-name="<get-name>" ><i class="fa fa-trash"></i></button></div>'
        ]);
        $this->datatables->setOrdering(["id","name","category", "transmission","seat","wifi","hotwater","availability", NULL]);
        $this->datatables->setSearchField(["name","category", "transmission","seat","wifi","hotwater","availability"]);
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
        $category = $this->input->post("category");
        $transmission = $this->input->post("transmission");
        $seat = $this->input->post("seat");
        $wifi = $this->input->post("wifi");
        $hotwater = $this->input->post("hotwater");
        $price = $this->input->post("price");
        $availability = $this->input->post("availability");

        if (!$name or !$category) {
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
                    "name" => $name,
                    "category" => $category,
                    "transmission" => $transmission,
                    "seat" => $seat,
                    "wifi" => $wifi,
                    "hotwater" => $hotwater,
                    "price" => $price,
                    "availability" => $availability,
                    "photo" => $gambar
                ];
            } else {
                $insertData = [
                    "id" => NULL,
                    "name" => $name,
                    "category" => $category,
                    "transmission" => $transmission,
                    "seat" => $seat,
                    "wifi" => $wifi,
                    "hotwater" => $hotwater,
                    "price" => $price,
                    "availability" => $availability
                ];
            }

            $response['status'] = TRUE;

            if ($action == "add") {
                $response['msg'] = "Data berhasil ditambahkan";
                $this->products_model->post($insertData);
            } else {
                unset($insertData['id']);

                $response['msg'] = "Data berhasil diedit";
                $this->products_model->put($id, $insertData);
            }
        }

        echo json_encode($response);
    }
    

    function delete($id)
    {
        $response = '';
        $this->products_model->delete($id);
        if (!$this->products_model->find($id)) {
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