<?php
class Faskes_model extends CI_Model
{
    public function getViewAll()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewById($id)
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE a.id = $id");
        return $query->row();
    }
    public function getViewRumahSakit()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Rumah Sakit' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewKlinikGigi()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Klinik Gigi' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewKlinikUmum()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Klinik Umum' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewPuskesmas()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Puskesmas' ORDER BY RAND()");
        return $query->result_array();
    }
    public function getViewApotik()
    {
        $query = $this->db->query("SELECT a.id, a.nama, a.alamat, a.latlong, b.nama as jenis, a.deskripsi, a.skor_rating, a.foto1, a.foto2, a.foto3, c.nama as kecamatan, a.website, a.jumlah_dokter, a.jumlah_pegawai  FROM faskes a INNER JOIN jenis_faskes b ON a.jenis_id = b.id INNER JOIN kecamatan c ON a.kecamatan_id = c.id WHERE b.nama = 'Apotik' ORDER BY RAND()");
        return $query->result_array();
    }
}
