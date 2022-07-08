<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Komentar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("Auth"));
		}
    }
    public function indexbe()
	{
		$this->load->model('Komentar_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Komentar';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('komentar/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
    public function delete($id)
    {
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("Auth"));
		}
        $this->load->model('Komentar_model', 'faskes');
		$data['id'] = $id;
		$this->faskes->delete($data);
		redirect('komentar/indexbe', 'refresh');
    }
}
?>