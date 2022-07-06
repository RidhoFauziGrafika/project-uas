<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function indexbe()
    {
        $this->load->model('User_model', 'user');
        
        if($this->session->userdata('role') == "administrator"){
            $data['user'] = $this->user->getAll();
        } elseif ($this->session->userdata('role') == "public") {
            $data['user'] = $this->user->getUser($this->session->userdata('username'));
        } else {
            redirect('auth', 'refresh');
        }
		$judul['title'] = 'User Profile';

        $this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('user/indexbe', $data);
		$this->load->view('templates/admin_footer');
    }
    public function edit($id)
	{
		$this->load->model('User_model', 'user');
        if($this->session->userdata('role') == "administrator"){
            $data['user'] = $this->user->getUserById($id);
        } elseif ($this->session->userdata('role') == "public") {
            $data['user'] = $this->user->getUser($this->session->userdata('username'));
        } else {
            redirect('auth', 'refresh');
        }
		$judul['title'] = 'User Profile';

        $this->load->view('templates/admin_header', $judul);
		$this->load->view('templates/admin_sidebar');
		$this->load->view('user/edit', $data);
		$this->load->view('templates/admin_footer');
	}
    public function update($id)
	{
        $datalama = array('username' => $this->session->userdata('username'), 'email' => $this->session->userdata('email'), 'role' => $this->session->userdata('role'), 'password' => $this->session->userdata('password'));
        $this->load->model('User_model', 'user');
        
        $_nama = $this->input->post('username');
        $_password = $this->input->post('password1');
        $_email = $this->input->post('email');
        $_role = $this->input->post('role');
        
        
        if ($_password != NULL) {
            $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
                'matches' => 'Password dont matches!',
                'min_length' => 'Password to short!'
            ]);
            $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
            if ($this->form_validation->run() != FALSE) {
                $_hashpassword = password_hash($_password, PASSWORD_DEFAULT);
                $data = array('username' => $_nama, 'email' => $_email, 'role' => $_role, 'id' => $id);
                $password = array('password' => $_hashpassword, 'id' => $id);
                $this->user->update($data);
                $this->user->updatePassword($password);
                $this->session->set_userdata($datalama);
                redirect('user/indexbe', 'refresh');
            } else {
                $this->load->model('User_model', 'user');
                if($this->session->userdata('role') != "public"){
                    $data['user'] = $this->user->getUserById($id);
                } else {
                    $data['user'] = $this->user->getUser($this->session->userdata('username'));
                }
                $judul['title'] = 'User Profile';

                $this->load->view('templates/admin_header', $judul);
                $this->load->view('templates/admin_sidebar');
                $this->load->view('user/edit', $data);
                $this->load->view('templates/admin_footer');
            }
        } else {
            $data = array('username' => $_nama, 'email' => $_email, 'role' => $_role, 'id' => $id);
            $this->user->update($data);
            $this->session->set_userdata($datalama);
            redirect('user/indexbe', 'refresh');
        }
	}
    public function delete($id)
    {
        if($this->session->userdata('role') != "administrator"){
            redirect('user/indexbe', 'refresh');
        }
        $this->load->model('User_model', 'user');
        $data['id'] = $id;
        $this->user->delete($data);
        redirect('user/indexbe', 'refresh');
    }
}
