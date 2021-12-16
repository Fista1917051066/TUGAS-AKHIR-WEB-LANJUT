<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">



    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                Form Edit Data
                <div class="card-body">
                <form action="/pasien/update/<?=$pasien['id_pasien'];?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode_pasien">ID Pasien</label>
                                <input type="text" class="form-control" id="kode_pasien" name="kode_pasien" value="<?= $pasien['kode_pasien'];?>"  autofocus required>     
                            </div>
                            <div class="form-group">
                                <label for="nama_pasien">Nama Pasien</label>
                                <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?= $pasien['nama_pasien'];?>" required>             
                            </div>
                            <div class="form-group">
                                <label for="alamat_pasien">Alamat Pasien</label>
                                <input type="text" class="form-control" id="alamat_pasien" name="alamat_pasien" value="<?= $pasien['alamat_pasien'];?>" required>       
                              </div>
                            <div class="form-group">
                                <label for="no_rm_pasien">No Ruangan </label>
                                <input type="text" class="form-control " id="no_rm_pasien" name="no_rm_pasien" value="<?=$pasien['no_rm_pasien'];?>" required>          
                            </div>
                            <div class="form-group">
                                <label for="nohp_pasien">No Hp Pasien</label>
                                <input type="text" class="form-control" id="nohp_pasien" name="nohp_pasien" value="<?= $pasien['nohp_pasien'];?>" required>     
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-paper-plane"></i> Edit Data
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
      <!-- /.content -->
  </div>
  

  

<?= $this->endSection(); ?>

