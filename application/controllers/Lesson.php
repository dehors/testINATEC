<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library(array('ion_auth','form_validation'));
		$this->load->model('Model_Results');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['contenido'] = "lesson/index";
		$data['results'] = $this->Model_Results->Show($this->ion_auth->get_user_id());
		$this->load->view('layout',$data);
	}
    public function show($id)
    {
       	$data['contenido'] = "lesson/show";
       	$data['id'] = $id;
       	$data['user_id'] = $this->ion_auth->get_user_id();
       	$data['results'] = $this->Model_Results->Show($this->ion_auth->get_user_id());
		$this->load->view('layout',$data);
    }
}
