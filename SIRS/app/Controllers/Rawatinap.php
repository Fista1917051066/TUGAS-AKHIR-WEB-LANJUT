<?php

namespace App\Controllers;
use App\Models\Rawatinap_model;

class Rawatinap extends BaseController
{

    public function __construct() {
        
        $this->rawatinap = new Rawatinap_model();
    
    }


        public function index()
        {
            helper(['form', 'url']);

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/data_rawatinap', $data);
        }

        public function view()
        {
            helper(['form', 'url']);

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/view_rawatinap', $data);
        }
    
        public function simpan()
        {
            $model = new Rawatinap_model();
            $data= array(
                'kode_rawatinap'=> $this->request->getPost('kode_rawatinap'),
                'kode_dokter'=> $this->request->getPost('kode_dokter'),
                'nama_dokter'=> $this->request->getPost('nama_dokter'),
                'kode_pasien'=> $this->request->getPost('kode_pasien'),
                'nama_pasien'=> $this->request->getPost('nama_pasien'),
                'nohp_pasien'=> $this->request->getPost('nohp_pasien'),
                'alamat_pasien'=> $this->request->getPost('alamat_pasien'),
                'kode_ruangan'=> $this->request->getPost('kode_ruangan'),
                'harga'=> $this->request->getPost('harga'),
                'tglmasuk'=> $this->request->getPost('tglmasuk'),
                'lamarawat'=> $this->request->getPost('lamarawat'),
                'catatanmedis'=> $this->request->getPost('catatanmedis'),
                'nama_ruangan'=> $this->request->getPost('nama_ruangan'),
            );
            $model->saveRawatinap($data);
            return redirect()->to('/rawatinap');
        }

        public function detail($kode_pasien) {
            $data['title'] = "Data Pasien";
            helper(['form', 'url']);

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/detail_rawatinap', $data);
        }

        public function cetak($kode_pasien) {
            $data['title'] = "Data Administrasi Pasien";

            $model = new Rawatinap_model();
            $data['dokter'] = $model->getDokter()->getResultArray();
            $data['pasien'] = $model->getPasien()->getResultArray();
            $data['ruangan'] = $model->getRuangan()->getResultArray();
            $data['rawatinap'] = $model->getRawatInap()->getResultArray();
            return view('transaksi/cetak_rawatinap', $data);
        }

}