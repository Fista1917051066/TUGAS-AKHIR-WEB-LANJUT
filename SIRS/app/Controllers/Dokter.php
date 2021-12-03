<?php

namespace App\Controllers;
use App\Models\Dokter_model;

class Dokter extends BaseController
{

	public function __construct() {
        
        $this->dokter = new Dokter_model();
    
    }
	
    public function index()
    {

        $model = new Dokter_model();
		$data = [
			'dokter' => $model->getDokter()->getResultArray(),
			'validation' => \Config\Services::validation(),
		];
		

        echo view('dokter/view_dokter', $data);
    }
	

	public function save()
	{
		$valid = $this->validate([
			"kode_dokter" => [
				"label" => "ID Dokter",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_dokter" => [
				"label" => "Nama Dokter",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"spesialis" => [
				"label" => "Spesialis",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nohp_dokter" => [
				"label" => "No HP",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"alamat_dokter" => [
				"label" => "Alamat",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"jadwal_praktek" => [
				"label" => "Jadwal Praktek",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$data = [
				'kode_dokter' 	=> $this->request->getVar('kode_dokter'),
				'nama_dokter' 	=> $this->request->getVar("nama_dokter"),
				'spesialis' 	=> $this->request->getVar("spesialis"),
				'nohp_dokter' 	=> $this->request->getVar("nohp_dokter"),
				'alamat_dokter' => $this->request->getVar("alamat_dokter"),
				'jadwal_praktek'=> $this->request->getVar("jadwal_praktek"),
			];
			# dd($data);

			$Dokter_model = model("Dokter_model");
			$Dokter_model->saveDokter($data);
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('dokter'));
	
		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak boleh kosong!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('dokter/index'))->withInput()->with('validation', $this->validator);
		}
	}

	public function edit($id_dokter) {
		session();
		$data = [
			'title' => 'Form Edit Data',
			'dokter' => $this->dokter->getEdit($id_dokter),
			'validation' => \Config\Services::validation()
		];
		return view("dokter/edit_dokter", $data);


	}

	public function update($id_dokter) {
		$valid = $this->validate([
			"kode_dokter" => [
				"label" => "ID Dokter",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_dokter" => [
				"label" => "Nama Dokter",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"spesialis" => [
				"label" => "Spesialis",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nohp_dokter" => [
				"label" => "No HP",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"alamat_dokter" => [
				"label" => "Alamat",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"jadwal_praktek" => [
				"label" => "Jadwal Praktek",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$this->dokter->save([
				'id_dokter'	=> $id_dokter,
				'kode_dokter' 	=> $this->request->getVar('kode_dokter'),
				'nama_dokter' 	=> $this->request->getVar('nama_dokter'),
				'spesialis' 	=> $this->request->getVar("spesialis"),
				'nohp_dokter' 	=> $this->request->getVar("nohp_dokter"),
				'alamat_dokter' => $this->request->getVar("alamat_dokter"),
				'jadwal_praktek' => $this->request->getVar("jadwal_praktek")
			]);
			# dd($data);

			
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diubah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('/dokter'));

		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak berhasil diedit. Semua data harus diisi!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to('/dokter')->withInput()->with('validation', $this->validator);
			
		}
			
			
	}

	public function delete($id_dokter) {
		$this->dokter->delete($id_dokter);
		session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>');
		return redirect()->to(base_url('/dokter'));
	}

}
