<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable, minimal-ui">
    <title>Data Rawat Inap</title>

    <meta content="Admin Dashboard" name="description"/>
    <meta content="Mannatthemes" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <link rel="shorcut icon" href="<?= base_url() ?>/assets/images/favicon.ico">
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/icon.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<div class="row">
    <div class="col-12">
        <div class="card m-b-30">
            <div class="card-body">
                <h1>Data Rawat Inap</h1><br>
                <button type="button" class="btn btn-sm btn-success"><a href="/rawatinap/view"> <font color="white">Isi Form Rawat Inap</font></a></button>
                <!-- <a href="Dokter/create" class="btn btn-success btn-lg active" role="button" aria-pressed="true"><i class="fa fa-plus"></i> Tambah Data</a> -->
                <br>
                    <table class="table table-sm table-striped" id="datapasien">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>ID Rawat Inap</th>
                                <th>Nama Pasien</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($rawatinap as $r => $rawatinap) : ?>
                                <tr>
                                    <td scope="row"><?= $r + 1; ?></td>
                                    <td><?= $rawatinap['kode_rawatinap']; ?></td>
                                    <td><?= $rawatinap['nama_pasien']; ?></td>
                                    <td>
                                        <!-- <button 
                                            type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Detail
                                        </button> -->
                                        <a href="/rawatinap/detail/<?= $rawatinap['id_rawatinap']; ?>" class="btn btn-sm btn-primary me-1"><i class="fa fa-info-circle"></i> Detail</a>
                                        <a href="/rawatinap/cetak/<?= $rawatinap['id_rawatinap']; ?>" class="btn btn-sm btn-success me-1"><i class="fa fa-print"></i> Cetak</a>
                                    </td>
                                </tr>
                            <?php endforeach ;?>
                        </tbody>
                    </p>
                </table>
        </div>
    </div>
    </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Data Rawat Inap Pasien</h5>
      </div>
      <div class="modal-body">
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Cetak </button>
      </div>
    </div>
  </div>
</div>
    <?= $this->endSection('') ?>
