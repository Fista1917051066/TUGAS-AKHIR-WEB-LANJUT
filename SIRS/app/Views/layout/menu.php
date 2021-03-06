<?= $this->extend('layout/main'); ?>

<?= $this->section('menu') ?>

<li>
    <a href="/dashboard" class="waves-effect">
        <i class="mdi mdi-airplay"></i>
        <span> Beranda <span class="badge badge-pill badge-primary float-right"></span></span>
    </a>
</li>

<li class="has_sub">
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Master </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="list-unstyled">
        <li><a href="/dokter">Dokter</a></li>
        <li><a href="/pasien">Pasien</a></li>
        <li><a href="/ruangan">Ruangan</a></li>
    </ul>
</li>

<li class="has_sub">
    <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Transaksi </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
    <ul class="list-unstyled">
        <li><a href="/rawatinap/view">Form Rawat Inap</a></li>
        <li><a href="/rawatinap">Data Rawat Inap</a></li>
        
    </ul>
</li>

<?= $this->endSection('') ?>