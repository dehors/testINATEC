<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';

use Restserver\Libraries\REST_Controller;

class Examples extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Examples');
        $this->methods['index_get']['limit'] = 500; 
    }

    public function index_get()
    {
        $Example = $this->Model_Examples->Get();
        if (! is_null($Example)) {
            $this->response(array('data' => $Example), REST_Controller::HTTP_OK);
        }else{
            $this->set_response([
                    'status' => '404',
                    'message' => 'example could not be found'
                ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
