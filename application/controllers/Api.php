<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

class Api extends REST_Controller {

    public function index_get(){
        $this->response(['status' => 0, 'message' => 'Get Works'], 400);
    }

    public function index_post() {
        $this->response(['status' => 0, 'message' => 'Post Works'], 400);
    }
}
