<?php

namespace App\Models;

use CodeIgniter\Model;

class Ruangan_model extends Model
{

    protected $table                = 'ruangan';
	protected $primaryKey           = 'id_ruangan';
	protected $allowedFields        = ['kode_ruangan', 'nama_ruangan', 'harga', 'status'];

    public function getRuangan()
    {
        $bulder = $this->db->table('ruangan');
        return $bulder->get();
    }
    public function saveRuangan($data)
    {
        $query = $this->db->table('ruangan')->insert($data) ;
        return $query;
    }
    public function getEdit($id_ruangan = false){
		if($id_ruangan == false) {
			return $this->findAll();
		}
		return $this->where(['id_ruangan' => $id_ruangan])->first();
	}
}
