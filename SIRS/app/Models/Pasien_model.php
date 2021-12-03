<?php

namespace App\Models;
Use CodeIgniter\Model;

class Pasien_model extends Model
{
    protected $table                = 'pasien';
	protected $primaryKey           = 'id_pasien';
	protected $allowedFields        = ['kode_pasien', 'nama_pasien', 'alamat_pasien', 'no_rm_pasien', 'nohp_pasien'];

    public function getPasien()
    {
        $bulder = $this->db->table('pasien');
        return $bulder->get();
    }
    public function savePasien($data)
    {
        $query = $this->db->table('pasien')->insert($data) ;
        return $query;
    }
    public function getEdit($id_pasien = false){
		if($id_pasien == false) {
			return $this->findAll();
		}
		return $this->where(['id_pasien' => $id_pasien])->first();
	}
}
