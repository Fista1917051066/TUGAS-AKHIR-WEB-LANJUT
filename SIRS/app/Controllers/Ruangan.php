<?php

namespace App\Controllers;
use App\Models\Ruangan_model;

class Ruangan extends BaseController
{
	public function __construct() {
        
        $this->ruangan = new Ruangan_model();
    
    }

    public function index()
    {
		session();

        $model = new Ruangan_model();
        $data = [
			'ruangan' => $model->getRuangan()->getResultArray(),
			'validation' => \Config\Services::validation(),
		];
		echo view('ruangan/view_ruangan', $data);
    }

	public function save()
	{
		
		$valid = $this->validate([
			"kode_ruangan" => [
				"label" => "No Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_ruangan" => [
				"label" => "Nama Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"harga" => [
				"label" => "Harga",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"status" => [
				"label" => "Status",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$data = [
				'kode_ruangan' 	=> $this->request->getVar('kode_ruangan'),
				'nama_ruangan' 	=> $this->request->getVar("nama_ruangan"),
				'harga' => $this->request->getVar("harga"),
				'status' 	=> $this->request->getVar("status"),
			];
			# dd($data);

			$Ruangan_model = model("Ruangan_model");
			$Ruangan_model->saveRuangan($data);
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('ruangan'));
	
		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak boleh kosong!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('ruangan/index'))->withInput()->with('validation', $this->validator);
		}
	}

	public function edit($id_ruangan) {
		$data = [
			'title' => 'Form Edit Data',
			'ruangan' => $this->ruangan->getEdit($id_ruangan),
			'validation' => \Config\Services::validation()
		];
		return view("ruangan/edit_ruangan", $data);
	}

	public function update($id_ruangan) {
		$valid = $this->validate([
			"kode_ruangan" => [
				"label" => "No Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"nama_ruangan" => [
				"label" => "Nama Ruangan",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"harga" => [
				"label" => "Harga",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
			"status" => [
				"label" => "Status",
				"rules" => "required",
				"error" => [
					"required" => "{field} Harus diisi!",
				]
			],
		]);
		# dd($valid);

		if ($valid){
			$this->ruangan->save([
				'id_ruangan'	=> $id_ruangan,
				'kode_ruangan' 	=> $this->request->getVar('kode_ruangan'),
				'nama_ruangan' 	=> $this->request->getVar('nama_ruangan'),
				'harga' 		=> $this->request->getVar("harga"),
				'status' => $this->request->getVar("status"),	
			]);
			# dd($data);
			
			session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil diubah!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('/ruangan'));

		} else {
			session()->setFlashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Data tidak berhasil diedit. Semua data harus diisi!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>');
			return redirect()->to(base_url('ruangan/index'))->withInput()->with('validation', $this->validator);
			
		}
	}

	public function delete($id_ruangan) {
		$this->ruangan->delete($id_ruangan);
		session()->setFlashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
		<strong>Data berhasil dihapus!</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	</div>');
		return redirect()->to(base_url('/ruangan'));
	}
    


}