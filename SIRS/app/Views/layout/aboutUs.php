<?= $this->extend('layout/main'); ?>
<?= $this->extend('layout/menu'); ?>
<?= $this->section('isi') ?>

  <div class="container">
    <center>
      <h2>Anggota Kelompok</h2>
      <hr style="width: 50%; border-width: 5px; color: black">
    </center>
    <br><br>
    <div class="row">
      <div class="col-md-3">
        <div class="card"><br>
          <center>
          <img src="<?php echo base_url() ?>/assets/images/Viny.jpeg" class="rounded-circle border border-dark" alt="" width="100px">
          </center>
          
          <div class="card-body">
            <center>
              <h5 class="card-title">Viny Silvia</h5>
              <p class="card-text">1917051010<br>Front end</p>
              <a href="https://instagram.com/vinysilvia__?utm_medium=copy_link" class="btn btn-outline-info">Follow us</a>
            </center>
          </div>
        </div>
      </div>

    <div class="col-md-3">
        <div class="card"><br>
          <center>
          <img src="<?php echo base_url() ?>/assets/images/Mita.jpeg" class="rounded-circle border border-dark" alt="" width="100px">
          </center>
          
          <div class="card-body">
            <center>
              <h5 class="card-title">Mita Anggraeni</h5>
              <p class="card-text">1917051040 <br>Back end</p>
              <a href="https://instagram.com/mita_anggraenni?utm_medium=copy_link" class="btn btn-outline-info">Follow us</a>
            </center>
            
          </div>
        </div>
      </div>

    <div class="col-md-3">
        <div class="card"><br>
          <center>
          <img src="<?php echo base_url() ?>/assets/images/Della.jpeg" class="rounded-circle border border-dark" alt="" width="100px">
          </center>
          
          <div class="card-body">
            <center>
              <h5 class="card-title">Della Hayu Enggarini</h5>
              <p class="card-text">1917051056<br>Database</p>
              <a href="https://instagram.com/dellahayue_?utm_medium=copy_link" class="btn btn-outline-info">Follow us</a>
            </center>            
          </div>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card"> <br>
          <center>
          <img src="<?php echo base_url() ?>/assets/images/Fista.jpeg" class="rounded-circle border border-dark" alt="" width="100px">
          </center>
          
          <div class="card-body">
            <center>
              <h5 class="card-title">Fista Dwi Septiana</h5>
              <p class="card-text">1917051066<br>Back end</p>
              <a href="https://instagram.com/fista.dwis?utm_medium=copy_link" class="btn btn-outline-info">Follow us</a>
            </center>
          </div>
        </div>
      </div>
  </div>

<?= $this->endSection('') ?>