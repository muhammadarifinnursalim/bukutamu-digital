<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bukutamu extends CI_Controller {
	private $assets;

	function __construct()
	{
		parent::__construct();
		$this->load->model('model_bukutamu');
		$this->assets['css_folder'] = base_url('assets/css/');
		$this->assets['js_folder'] = base_url('assets/js/');
	}

	public function index()
	{
		$this->form_validation->set_rules($this->config->item('bukutamu'));
		$this->form_validation->set_message('min_length', '{field} minimal berisi {param} karakter.');
		$this->form_validation->set_message('valid_email', 'Email tidak valid');

		if ($this->form_validation->run() == FALSE)
		{
			$header['title'] = 'Bukutamu - Isi Data';
			$header['assets'] = $this->assets;

			$this->load->view('user/header', $header);
			$this->load->view('user/show_form');
			$this->load->view('user/footer');
		}
		else
		{
			$header['title'] = 'Bukutamu - Thank You';
			$header['assets'] = $this->assets;

			$input['nama'] = $this->input->post('nama');
			$input['namaortu'] = $this->input->post('namaortu');
			$input['kelas'] = $this->input->post('kelas');
			$input['instansi'] = $this->input->post('instansi');
			$input['alamatinstansi'] = $this->input->post('alamatinstansi');
			$input['notelepon'] = $this->input->post('notelepon');
			$input['email'] = $this->input->post('email');
			$input['komentar'] = $this->input->post('komentar');

			$this->model_bukutamu->add_bukutamu($input);

			$this->load->view('user/header', $header);
			$this->load->view('user/thank_you');
			$this->load->view('user/footer');
		}
	}

	public function view_list($page = 1)
	{
		$offset = ($page - 1) * LIST_PER_PAGE;
		$header['title'] = 'Bukutamu - Lihat Data';
		$header['assets'] = $this->assets;

		$this->load->library('pagination');
		$total_rows = $this->model_bukutamu->count_bukutamu();

		$config = $this->custom_pagination_element('view_list/', $total_rows, 2);

		$this->pagination->initialize($config);

		$data['pagination'] = $this->pagination->create_links();
		$data['lists'] = $this->model_bukutamu->get_bukutamu($offset);
		$data['row'] = $offset + 1;

		$this->load->view('user/header', $header);
		$this->load->view('user/view_list', $data);
		$this->load->view('user/footer');
	}

	private function custom_pagination_element($view, $total_rows, $uri_segment)
	{
		$config['base_url'] = base_url().$view;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = LIST_PER_PAGE;
		$config['attributes'] = array('class' => 'page-link');

		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-end">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First Page';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close'] = '</span></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['next_link'] = FALSE;
		$config['prev_link'] = FALSE;
		$config['use_page_numbers'] = TRUE;

		return $config;
	}
}