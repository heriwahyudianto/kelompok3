<?php 
class Event_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function getEventBySekolahId($idSekolah)
    {	return $this->db->get('event')->result_array();
    }
    public function delKota($idKota='')
    {
    	//$this->db->where('id_pegawai', $idPegawai);
		//$this->db->delete('pegawai');
    	return 1;
    }
}
?>