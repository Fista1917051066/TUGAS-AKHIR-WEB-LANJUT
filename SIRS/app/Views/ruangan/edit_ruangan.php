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
                <form action="/ruangan/update/<?=$ruangan['id_ruangan'];?>" method="post">
                <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode_ruangan">No Ruangan</label>
                                <input type="text" class="form-control" id="kode_ruangan" name="kode_ruangan" value="<?= $ruangan['kode_ruangan'];?>" autofocus required>         
                                
                            </div>

                            <div class="form-group">
                                <label for="nama_ruangan">Nama Ruangan</label>
                                <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="<?= $ruangan['nama_ruangan'];?>" required>         
                                
                            </div>

                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" value="<?= $ruangan['harga'];?>" required> 
                            </div>
                            
                            <div class="form-group">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" id="status" name="status" value="<?= $ruangan['status'];?>" required> 
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
