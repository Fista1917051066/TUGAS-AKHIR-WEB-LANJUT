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
                <form action="/dokter/update/<?=$dokter['id_dokter'];?>" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="kode_dokter">ID Dokter</label>
                                <input type="text" class="form-control" id="kode_dokter" name="kode_dokter" value="<?=$dokter['kode_dokter'];?>" autofocus required>         
                                
                            </div>
                            <div class="form-group">
                                <label for="nama_dokter">Nama Dokter</label>
                                <input type="text" class="form-control" id="nama_dokter" name="nama_dokter" value="<?=$dokter['nama_dokter'];?>" required>         
                            </div>

                            <div class="form-group">
                                <label for="spesialis">Spesialis</label>
                                <input type="text" class="form-control" id="spesialis" name="spesialis" value="<?=$dokter['spesialis'];?>" required> 
                                   
                            </div>
                            
                            <div class="form-group">
                                <label for="nohp_dokter">No HP </label>
                                <input type="text" class="form-control" id="nohp_dokter" name="nohp_dokter" value="<?=$dokter['nohp_dokter'];?>" reuired>      
                                
                            </div>
                            
                            <div class="form-group">
                                <label for="alamat_dokter">Alamat</label>
                                <input type="text" class="form-control" id="alamat_dokter" name="alamat_dokter" value="<?=$dokter['alamat_dokter'];?>" required>  
                            </div>
                            
                            <div class="form-group">
                                <label for="jadwal_praktek">Jadwal Praktek</label>
                                <input type="text" class="form-control" id="jadwal_praktek" name="jadwal_praktek" value="<?= $dokter['jadwal_praktek'];?>" required> 
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
