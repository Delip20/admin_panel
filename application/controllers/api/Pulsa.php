<?php

defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
class Pulsa extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Mobile_model', 'mpulsa');
        $this->load->helper('topup_helper', 'topup');
    }

    public function index_post()
    {
        $this->load->view('api/Pulsa');
        $ref_id   = 'delip-' . uniqid() . rand();
        $apiKey   = '8675f0c17b6d90a0';
        $username = '081212043833';
        $sign = md5($username . $apiKey . $ref_id);
        $data = [
            'commands'      => 'topup',
            'username'      => htmlspecialchars($this->post($username)),
            'ref_id'        => htmlspecialchars($this->post($ref_id)),
            'hp'            => htmlspecialchars($this->post('hp')),
            'pulsa_code'    => htmlspecialchars($this->post('code')),
            'sign'          => htmlspecialchars($this->post($sign))
        ];
        if ($this->mpulsa->topup_pulsa($data) > 0) {
            $this->response([
                'status' => true,
                'massage' => 'Topup berhasil!'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => true,
                'massage' => 'Topup gagal!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }



    public function callback_get()
    {
        $data = file_get_contents('php://input');
        $my_file = 'mobileP_callback.txt';
        $handle = fopen($my_file, 'w') or die('Cannot open file:  ' . $my_file);
        fwrite($handle, $data);
        $this->mpulsa->postCallback($data);
        fclose($handle);
    }
}
