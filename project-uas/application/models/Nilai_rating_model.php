<?php
class Nilai_rating_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->get('nilai_rating');
        return $query->result_array();
    }
    public function getRatingByFaskes($data) {
        $sql = "SELECT CAST(AVG(nilai_rating_id) AS DECIMAL(2,1)) AS rating FROM komentar WHERE faskes_id = ?";
        $query = $this->db->query($sql, $data);
        return $query->row();
    }
    public function updateRating($data) {
        $sql = "UPDATE faskes SET skor_rating = ? WHERE id = ?";
        $this->db->query($sql, $data);
    }
}