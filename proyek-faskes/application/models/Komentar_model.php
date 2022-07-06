<?php
class Komentar_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->query("SELECT a.id, a.tanggal, a.isi, b.username, a.faskes_id, a.nilai_rating_id FROM komentar a INNER JOIN users b ON a.users_id = b.id ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewByFaskesId($id)
    {
        $query = $this->db->query("SELECT a.id, a.tanggal, a.isi, b.username, a.faskes_id, a.nilai_rating_id FROM komentar a INNER JOIN users b ON a.users_id = b.id WHERE a.faskes_id = $id");
        return $query->result_array();
    }
    public function getViewAllbe()
    {
        $query = $this->db->query("SELECT a.id, a.tanggal, a.isi, b.username, c.nama AS fasilitas, a.nilai_rating_id AS rating FROM komentar a INNER JOIN users b ON a.users_id = b.id INNER JOIN faskes c ON a.faskes_id = c.id");
        return $query->result_array();
    }
    public function insert($data) {
        $query = "INSERT INTO komentar (tanggal, isi, users_id, faskes_id, nilai_rating_id) VALUES (?, ?, ?, ?, ?)";
        $this->db->query($query, $data);
    }
    public function delete($data)
    {
        $sql = "DELETE FROM komentar WHERE id=?";
        $this->db->query($sql, $data);
    }
}