</DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <style type="text/css">
            body{
                font-family: Arial ;
                color: black;
            }
        </style>
    </head>

    <body>
        <center>
            <img src="<?php echo base_url() ?>/assets/images/logors.png "  height="150px" width="150px">
            <h1>Rumah Sakit Primaya</h1>
            <h2>Data Rawat Inap Pasien</h2>
            <hr style="width: 90%; border-width: 5px; color: black">
                <table cellpadding="7">
                    <?php foreach($rawatinap as $r)?>
                        <tr>
                        <td><font size = 4>ID Rawat Inap</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['kode_rawatinap'] ?></td>
                        </tr>

                        <tr>
                            <td><font size = 4>Nama Pasien</td>
                            <td width=10%></td>
                            <td ><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['nama_pasien'] ?></td>

                        </tr>

                        <tr>
                        <td><font size = 4>No Hp </td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['nohp_pasien'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>Alamat </td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['alamat_pasien'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>No Ruangan</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['kode_ruangan'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>Nama Ruangan</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['nama_ruangan'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>Nama Dokter</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['nama_dokter'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>Rekam Medis</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['catatanmedis'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4><br>Tanggal Masuk</td>
                            <td width=10%></td>
                            <td><font size = 4><br> : &nbsp &nbsp &nbsp <?php echo $r['tglmasuk'] ?></td>
                        </tr>

                        <tr>
                        <td><font size = 4>Lama Rawat Inap</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp <?php echo $r['lamarawat'] ?> hari</td>
                        </tr>
                        
                        <tr>
                            <td><font size = 4>Biaya Rawat Inap</td>
                            <td width=10%></td>
                            <td><font size = 4> : &nbsp &nbsp &nbsp Rp <?php echo number_format($r['harga']*$r['lamarawat'],0,',','.') ?></td>
                        </tr>

                </table>

                <br><br>
                <table width="100%">
                <?php foreach($rawatinap as $r)?>
                <tr>
                    <td></td>
                    <td >
                        <p>Pasien</p>
                        <br><br>
                        <p class="font-weight-bold"><?php echo $r['nama_pasien'] ?></p>
                    </td>

                    <td></td>
                    <td width="200px">
                        <p>Bandar Lampung, <?php echo date("d M Y") ?> <br> Administrasi</p>
                        <br><br>
                        <p>.....................................</p>
                    </td>
                </tr>
            </table>
            </center>
    </body>
</html>

<script type="text/javascript">
    window.print() ;
</script>