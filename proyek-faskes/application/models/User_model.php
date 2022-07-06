<?php

class User_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM users ORDER BY role')->result_array();
    }
    public function getUser($data)
    {
        return $this->db->get_where('users', ['username' => $data])->row_array();
    }
    public function getUserById($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row_array();
    }
    public function getUserByUsername($username)
    {
        return $this->db->get_where('users', ['username' => $username])->row();
    }
    public function update($data)
    {
        $sql = "UPDATE users SET username=?, email=?, role=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function updatePassword($data)
    {
        $sql = "UPDATE users SET password=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function delete($data)
    {
        $sql = "DELETE FROM users WHERE id=? AND role='public'";
        $this->db->query($sql, $data);
    }
}
