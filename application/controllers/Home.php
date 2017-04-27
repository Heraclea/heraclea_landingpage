<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();

		$this->load->model('home_model');

		if (!$this->session->has_userdata('language'))
			$this->session->set_userdata('language', 'es');
	}

	public function index(){
		$data = array();
		$data['seo'] = $this->home_model->get_seo();

		$data['language'] = $this->session->userdata('language');
		$data['head'] = $this->load->view('/template/head', $data, true);
		$data['header'] = $this->load->view('/template/header', $data, true);

		$data['data_footer'] = $this->home_model->get_footer();
		$data['footer'] = $this->load->view('/template/footer', $data, true);

		$data['home'] = $this->home_model->get_banner($data['language']);
		$data['about'] = $this->home_model->get_about($data['language']);
		$data['numbers'] = $this->home_model->get_numbers($data['language']);

		$data['services'] = $this->home_model->get_services($data['language']);
		$data['list_services'] = $this->home_model->get_list_services($data['language']);

		$data['portfolio'] = $this->home_model->get_portfolio($data['language']);
		$data['categories_portfolio'] = $this->home_model->get_categories_portfolio($data['language']);
		$data['items_portfolio'] = $this->home_model->get_items_portfolio($data['language']);

		$data['process'] = $this->home_model->get_process($data['language']);
		$data['items_process'] = $this->home_model->get_items_process($data['language']);


		$data['header_blog'] = $this->home_model->get_header_blog($data['language']);
		$data['blog'] = $this->home_model->get_featured_blog($data['language']);

		$data['team'] = $this->home_model->get_team($data['language']);
		$data['items_team'] = $this->home_model->get_items_team($data['language']);

		$data['clients'] = $this->home_model->get_clients($data['language']);
		$data['items_clients'] = $this->home_model->get_items_clients($data['language']);

		$data['items_brands'] = $this->home_model->get_items_brands($data['language']);

		$data['contact'] = $this->home_model->get_contact($data['language']);

		$data['section'] = $this->load->view('/home', $data, true); 
		$this->load->view('/template/index', $data);
	}

	public function sendEmail(){
		$config['mailtype'] = 'html';
		$this->email->initialize($config);

		$body =   "
          <html>
	          <body>";
	          foreach ($_POST as $key => $value) {
	            $body .= "<p><b>".str_replace(array('_text', '_'), array('', ' '), $key)."</b>: ".utf8_decode($value)."</p>"; 
	          }
		$body .= "<br></body></html>";

		$this->email->from('web@heraclea.com', 'HeraClea - Página Web');
		$this->email->to($this->home_model->get_seo()->contact_emails);

		$this->email->subject('Formulario de contacto');
		$this->email->message($body);

		$this->email->send();

		if ($this->session->userdata('language') == 'es'){
			echo 'Tu mensaje ha sido enviado exitosamente. Pronto nos comunicaremos contigo.';
		}else{
			echo 'Your message has been sent successfully. We will write to you soon.';
		}
	}

	public function change_language(){
		$this->session->set_userdata('language', $this->input->post('language'));
	}
}
