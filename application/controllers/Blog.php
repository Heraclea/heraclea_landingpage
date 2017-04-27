<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('home_model');

		if (!$this->session->has_userdata('language'))
			$this->session->set_userdata('language', 'es');
	}

	public function index(){
		$data = array();
		$data['language'] = $this->session->userdata('language');
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header', $data, true);

		$data['data_footer'] = $this->home_model->get_footer();
		$data['footer'] = $this->load->view('/template/footer', $data, true);

		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/page/';
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;

  	if ($data['language'] == 'es') {
  		$config['next_link'] = 'Siguiente';
  		$config['prev_link'] = 'Anterior';
  	}else{
  		$config['next_link'] = 'Next';
  		$config['prev_link'] = 'Preview';
  	}

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['blog'] = $this->home_model->get_blog($data['language'], $config['per_page'], $page);

    $config['total_rows'] = count($this->home_model->get_blog($data['language'], $config['per_page'], null));
    $choice = $config['total_rows'] / $config['per_page'];
  	$config['num_links'] = round($choice);

  	$this->pagination->initialize($config);
  	$data['pagination'] = $this->pagination->create_links();

		$data['section'] = $this->load->view('/blog', $data, true); 
		
		$this->load->view('/template/index', $data);
	}

	public function page(){
		$data = array();
		$data['language'] = $this->session->userdata('language');
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header', $data, true);

		$data['data_footer'] = $this->home_model->get_footer();
		$data['footer'] = $this->load->view('/template/footer', $data, true);

		$this->load->library('pagination');
		$config['base_url'] = base_url().'blog/page/';
		$config['per_page'] = 10;
		$config['uri_segment'] = 3;

  	if ($data['language'] == 'es') {
  		$config['next_link'] = 'Siguiente';
  		$config['prev_link'] = 'Anterior';
  	}else{
  		$config['next_link'] = 'Next';
  		$config['prev_link'] = 'Preview';
  	}

    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

    $data['blog'] = $this->home_model->get_blog($data['language'], $config['per_page'], $page);

    $config['total_rows'] = count($this->home_model->get_blog($data['language'], $config['per_page'], null));
    $choice = $config['total_rows'] / $config['per_page'];
  	$config['num_links'] = round($choice);

  	$this->pagination->initialize($config);
  	$data['pagination'] = $this->pagination->create_links();

		$data['section'] = $this->load->view('/blog', $data, true); 
		
		$this->load->view('/template/index', $data);
	}

	public function post(){
		$data = array();
		$data['language'] = $this->session->userdata('language');
		$data['seo'] = $this->home_model->get_seo();
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header', $data, true);

		$data['data_footer'] = $this->home_model->get_footer();
		$data['footer'] = $this->load->view('/template/footer', $data, true);
		

		if (is_numeric($this->uri->segment(3))){
			$data['post'] = $this->home_model->get_post($data['language'], $this->uri->segment(3));

			$data['post_preview'] = $this->home_model->get_post_preview($data['language'], $this->uri->segment(3));
			$data['post_next'] = $this->home_model->get_post_next($data['language'], $this->uri->segment(3));
		}else{
			redirect('/');
		}
		
		$data['section'] = $this->load->view('/post', $data, true); 
		$this->load->view('/template/index', $data);
	}
}
