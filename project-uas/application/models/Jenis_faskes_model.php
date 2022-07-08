<?php
class Jenis_faskes_model extends CI_Model
{
    public function getViewAllbe()
    {
        $query = $this->db->get('jenis_faskes');
        return $query->result_array();
    }
    public function getViewByIdbe($id)
    {
        $query = $this->db->get_where('jenis_faskes', ['id' => $id]);
        return $query->row();
    }
    public function delete($data)
    {
        $sql = "DELETE FROM jenis_faskes WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE jenis_faskes SET nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function insert($data)
    {
        $sql = "INSERT INTO jenis_faskes (nama) VALUES (?)";
        $this->db->query($sql, $data);
    }
}