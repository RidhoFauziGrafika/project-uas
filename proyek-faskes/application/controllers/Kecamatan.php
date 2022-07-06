<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
    }
    public function indexbe()
	{
		$this->load->model('Kecamatan_model', 'faskes');

		$data['faskes'] = $this->faskes->getViewAllbe();
		$judul['title'] = 'Kecamatan';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('kecamatan/indexbe', $data);
		$this->load->view('templates/admin_footer');
	}
    public function insert()
	{
		$this->load->model('Kecamatan_model', 'faskes');
		$_nama = $this->input->post('nama');
		$data = array('nama' => $_nama);
		$this->faskes->insert($data);
		redirect('kecamatan/indexbe', 'refresh');
	}
    public function update($id)
	{
		$this->load->model('Kecamatan_model', 'faskes');
		$_nama = $this->input->post('nama');
		$data = array('nama' => $_nama, 'id' => $id);
		$this->faskes->update($data);
		redirect('kecamatan/indexbe', 'refresh');
	}
    public function form()
    {
        $judul['title'] = 'Kecamatan';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('kecamatan/form');
		$this->load->view('templates/admin_footer');
    }
    public function edit($id)
	{
		$this->load->model('Kecamatan_model', 'faskes');
		$data['faskes'] = $this->faskes->getViewByIdbe($id);
        $judul['title'] = 'Kecamatan';
		$this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('kecamatan/edit', $data);
		$this->load->view('templates/admin_footer');
	}
    public function delete($id)
    {
        if($this->session->userdata('role') != "administrator"){
			redirect(base_url("auth"));
		}
        $this->load->model('Kecamatan_model', 'faskes');
		$data['id'] = $id;
		$this->faskes->delete($data);
		redirect('kecamatan/indexbe', 'refresh');
    }
}
?>