<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
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
            "pageTitle" => "LIZRENTCAR - Solusi Rental Mobil Anda",
            "dataProducts" => $this->products_model->get(),
            "dataClients" => $this->partners_model->get()->result(),
            "dataBanner" => $this->banners_model->get_homepage()->row(),
            "dataProducts" => $this->products_model->get_available()->result(),
            "language" => $this->session->userdata('site_lang')
        ];
        $this->template->load(template() . '/template', template() . '/content', $push);
    }

    public function insert()
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

        $find = $this->products_model->find($service);

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

            $response['msg'] = "Silahkan tunggu konfirmasi dari admin kami, pastikan nomor handphone anda  dapat dihubungi.";
            $this->orders_model->post($insertData);

            $isipesan = 'Ada pesanan masuk <br><br>' .
                'Nama : *' .$name. '*<br>'.
                'No hp: *' .$handphone. '*<br>'.
                'Lokasi Rental: *'.$location. '*<br>'.
                'Tanggal & Jam Mulai: *'.tanggal_indo($startdate).', '.$starttime. '*<br>'.
                'Tanggal & Jam Berakhir: *'.tanggal_indo($enddate).', '.$endtime. '*<br>'.
                'Jenis mobil : *'.$find->name.' - '.$find->transmission.'*';

            $this->kirimWablas('082138555528', $isipesan);

        }

        echo json_encode($response);
    }

    public function partnership()
    {
        $name = $this->input->post("name");
        $no = $this->input->post("no");
        $type = $this->input->post("type");

        if (!$name) {
            $response['status'] = FALSE;
            $response['msg'] = "Periksa kembali data yang anda masukkan";
        } else {

            $insertData = [
                "id" => NULL,
                "name" => $name,
                "no" => $no,
                "type" => $type
            ];

            $response['status'] = TRUE;

            $response['msg'] = "Silahkan tunggu konfirmasi dari admin kami, pastikan nomor handphone anda  dapat dihubungi.";
            $this->partnership_model->post($insertData);

        }

        echo json_encode($response);
    }

    function kirimWablas($phone, $msg)
    {
        $link = "https://kudus.wablas.com/api/send-message";
        $data = [
            'phone' => $phone,
            'message' => $msg,
        ];


        $curl = curl_init();
        $token = "nnmH9gDNh0ZyGN4tuGjNbOqD7WQBpwG8r7CCgEYLUxvT2gk7qQMxAxo2qCeDUYw1";

        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "Authorization: $token",
            )
        );
        curl_setopt($curl, CURLOPT_URL, $link);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}