<?php

class Jadwal_model extends CI_Model
{
	public function find()
  {
    $query = $this->db->get_where('table_name', ['id' => $id]);
    return $query->row(); // return berupa satu object
  }
  public function get_dokter()
  {
    $id = $this->input->post('id');
    $hari = $this->input->post('hari');
    $k = trim($id);
    $Hari = trim($hari);
    $query = $this->db->query("SELECT b_ms_unit.id,b_ms_unit.nama,b_ms_jadwal_dokter.hari,b_ms_jadwal_dokter.mulai,b_ms_jadwal_dokter.selesai,b_ms_pegawai.nama,b_ms_jadwal_dokter.aktif,
    CASE b_ms_jadwal_dokter.hari
    WHEN 1 THEN 'Senin'
    WHEN 2 THEN 'Selasa'
    WHEN 3 THEN 'Rabu'
    WHEN 4 THEN 'Kamis'
    WHEN 5 THEN 'Jum\'at'
    WHEN 6 THEN 'Sabtu'
    WHEN 7 THEN 'Minggu'
    END AS hari2 FROM ((`b_ms_jadwal_dokter` INNER JOIN b_ms_pegawai ON b_ms_jadwal_dokter.dokter_id = b_ms_pegawai.id) INNER JOIN b_ms_unit ON b_ms_jadwal_dokter.unit_id = b_ms_unit.id)  WHERE b_ms_unit.id='{$k}' AND b_ms_jadwal_dokter.aktif = 1 AND b_ms_jadwal_dokter.hari = '{$Hari}' ORDER BY hari ASC, dokter_id ASC ");
    // echo "<pre>"; print_r($query);
    return $query; // return berupa array objek
  }
  public function get_poli(){
    $data2 =$this->db->query("SELECT * from b_ms_unit WHERE nama LIKE 'Poli%' AND aktif=1 GROUP BY nama") ;
    // echo "<pre>"; print_r($data2);
    return $data2;
  }
}