<?php

namespace App\Controllers;
use App\Models\Pasien_model;

class Pasien extends BaseController
{
	public function __construct() {
        
        $this->pasien = new Pasien_model();
    
    }
	

    public function index()
    {
		session();

        $model = new Pasien_model();
        $data = [
			'pasien' => $model->getPasien()->getResultArray(),
			'validation' => \Config\Services::validation(),
		];

        echo view('pasien/view_pasien', $data);
    }

	public function save()
	{

		$valid = $this->validate([
			"kode_pasien" => [
				"label" => "ID Pasien",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_pasien" => [
				"label" => "Nama Pasien",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"alamat_pasien" => [
				"label" => "Alamat",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"no_rm_pasien" => [
				"label" => "Nomor Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nohp_pasien" => [
				"label" => "No HP",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$data = [
				'kode_pasien' 	=> $this->request->getVar('kode_pasien'),
				'nama_pasien' 	=> $this->request->getVar("nama_pasien"),
				'alamat_pasien' => $this->request->getVar("alamat_pasien"),
				'no_rm_pasien' 	=> $this->request->getVar("no_rm_pasien"),
				'nohp_pasien' 	=> $this->request->getVar("nohp_pasien"),
			];
			# dd($data);

			$Pasien_model = model("Pasien_model");
			$Pasien_model->savePasien($data);
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('pasien'));
	
		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak boleh kosong!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('pasien/index'))->withInput()->with('validation', $this->validator);
		}
	}

	public function edit($id_pasien) {
		$data = [
			'title' => 'Form Edit Data',
			'pasien' => $this->pasien->getEdit($id_pasien),
			'validation' => \Config\Services::validation()
		];
		return view("pasien/edit_pasien", $data);
	}

	public function update($id_pasien) {
		$valid = $this->validate([
			"kode_pasien" => [
				"label" => "ID Pasien",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_pasien" => [
				"label" => "Nama Pasien",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"alamat_pasien" => [
				"label" => "Alamat",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"no_rm_pasien" => [
				"label" => "No Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nohp_pasien" => [
				"label" => "No HP",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$this->pasien->save([
				'id_pasien'	=> $id_pasien,
				'kode_pasien' 	=> $this->request->getVar('kode_pasien'),
				'nama_pasien' 	=> $this->request->getVar('nama_pasien'),
				'alamat_pasien' 	=> $this->request->getVar("alamat_pasien"),
				'no_rm_pasien' => $this->request->getVar("no_rm_pasien"),
				'nohp_pasien' 	=> $this->request->getVar("nohp_pasien"),
				
			]);
			# dd($data);

			
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diubah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('/pasien'));

		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak berhasil diedit. Semua data harus diisi!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('pasien/index'))->withInput()->with('validation', $this->validator);
			
		}
	}

	public function delete($id_pasien) {
		$this->pasien->delete($id_pasien);
		session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>');
		return redirect()->to(base_url('/pasien'));
	}
    

}
