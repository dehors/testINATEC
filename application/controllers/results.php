<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Results extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Results');
        $this->methods['index_post']['limit'] = 500;
        $this->methods['index_put']['limit'] = 500;
    }

    public function index_post()
    {
        if (! $this->post('results')) {
            $this->response(NULL,400);
        }
        $resultId = $this->Model_Results->Save($this->post('results'));
        if (! is_null($resultId)) {
            $this->response(array('data' => $resultId), REST_Controller::HTTP_OK);
        }else{
            $this->set_response([
                    'status' => FALSE,
                    'message' => 'Result could not be found'
                ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_put($id)
    {
        if (! $this->put('results') || ! $id) {
            $this->response(NULL,400);
        }
        $update = $this->Model_Results->Update($id, $this->put('results'));
        if (! is_null($update)) {
            $this->response(array('data' => $update), REST_Controller::HTTP_OK);
        }else{
            $this->set_response([
                    'status' => FALSE,
                    'message' => $update
                ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
