<?php
class Kecamatan_model extends CI_Model
{
    public function getViewAllbe()
    {
        $query = $this->db->get('kecamatan');
        return $query->result_array();
    }
    public function getViewByIdbe($id)
    {
        $query = $this->db->get_where('kecamatan', ['id' => $id]);
        return $query->row();
    }
    public function delete($data)
    {
        $sql = "DELETE FROM kecamatan WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function update($data)
    {
        $sql = "UPDATE kecamatan SET nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }
    public function insert($data)
    {
        $sql = "INSERT INTO kecamatan (nama) VALUES (?)";
        $this->db->query($sql, $data);
    }
}