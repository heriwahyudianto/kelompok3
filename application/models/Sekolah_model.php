<?php 
class Sekolah_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getSekolahById($idSekolah)
    {	$this->db->where('id',$idSekolah);
        return $this->db->get('sekolah')->result_array();
    }
    public function delSekolah($idSekolah='')
    {
    	$this->db->where('idSekolah', $idSekolah);
		$this->db->delete('pegawai');
    	return 1;
    }
}
?>