<?php
namespace App\Models;

use CodeIgniter\Model;
class Modelproduct extends Model{
	function __construct()
	{
		$this->db = db_connect();
	}
	function datashow(){
		return $this->db->table('pemesanan')->get();
	}
    function simpan($save){
        return $this->db->table('pemesanan')->insert($save);
    }

    function deletedata($nik){
	    return $this->db->table('pemesanan')->delete(['nik' => $nik]);
    }
    function ambildata($nik){
		return $this->db->table('pemesanan')->getWhere(['nik' => $nik]);
    }
    function editdata($data, $nik){
	return $this->db->table('pemesanan')->update($data, ['nik' => $nik]);
    }
   
}