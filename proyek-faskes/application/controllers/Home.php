<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
        $this->load->model('Faskes_model', 'faskes');

        $data['faskes'] = $this->faskes->getViewAll();
        $judul['title'] = 'Faskes Depok';

		$this->load->view('layouts/header', $judul);
		$this->load->view('home/index', $data);
		$this->load->view('layouts/footer');
	}
}
