<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<?php require_once 'header.php' ?>
<body>
<div class="h-bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="<?php base_url()?>"><img width="400" height="40" src="<?php echo base_url() ?>images/logo.png"> </a>
            </div>
            <div class="header-right">
                <ul class="nav">
                    <li><a href="<?php echo base_url()?>" title="Home">Home</a></li>
<!--                    <li><a href="--><?php //echo base_url() ?><!--index.php/about">Tentang Kami</a></li>-->
                    <li class="active"><a href="<?php echo base_url() ?>index.php/listpaper">Daftar Paper</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/contact">Kontak Kami</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="content_bg">
    <div class="wrap">
        <div class="content">
            <div class="main">
<!--                Tabel list dari TA nya-->
                <div class="container">
                    <h2>Daftar Paper Mahasiswa</h2>
                    <div class="row">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading">
                                <h3 class="panel-title">Users</h3>
                                <div class="pull-right">
                                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                                </div>
                            </div>
                            <table class="table table-hover">
                                <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="No" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Judul" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Universitas" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Tahun" disabled></th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_Tesis%20Teguh%20Budi%20(Indonesia).pdf';">
                                        <td>1</td>
                                        <td>Pengembangan Heuristik Diferensial Terkompresi untuk Algoritma Block A*</td>
                                        <td>Institute Teknologi Bandung</td>
                                        <td>2014</td>
                                    </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_Tesis%20Patrick%20Telnoni.pdf';">
                                    <td>2</td>
                                    <td>Pengembangan Protokol Single Sign On (SSO) SAML dengan Speech dan Speaker Recognition</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2014</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_Tesis%20Kurnia.pdf';">
                                    <td>3</td>
                                    <td>Pengembangan Framework Mobile Device Management pada Platform Android untuk Keamanan Perangkat dan Aplikasi</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2013</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_Tesis%20Alfian.pdf';">
                                    <td>4</td>
                                    <td>STEGANOGRAFI CITRA DIGITAL MENGGUNAKAN TEKNIK DISCRETE WAVELET TRANSFORM PADA RUANG WARNA CIELab</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2013</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20Kevin%20Winata.pdf';">
                                    <td>5</td>
                                    <td>PERANCANGAN SISTEM INFERENSI DALAM AI GAME DENGAN LOGIKA FUZZY</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2013</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20Zulhendra%20Valiant%20Janir.pdf';">
                                    <td>6</td>
                                    <td>Penentuan Distribusi Angklung Berdasarkan Partitur Menggunakan Algoritma Pencarian A*</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2012</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20Rubiano%20Adityas.pdf';">
                                    <td>7</td>
                                    <td>Skema Fragile Watermarking dengan Fungsi Hash dan Ketergantungan Blok Tak Deterministik</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2012</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20Aditya%20Agung%20Putra.pdf';">
                                    <td>8</td>
                                    <td>Pemanfaatan Sistem Inferensi Fuzzy pada Aplikasi Pendiagnosis Penyakit Kulit pada Anak</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2012</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20David%20Eko%20Wibowo.pdf';">
                                    <td>9</td>
                                    <td>Sistem Rekomendasi Jual Beli Barang Dengan Memanfaatkan Metode Collaborative Filtering dan Basis Data Graf. Studi Kasus: Bukalapak.com</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2012</td>
                                </tr>
                                <tr onclick="window.location.href = 'http://informatika.stei.itb.ac.id/~rinaldi.munir/TA/Makalah_TA%20Fakhri.pdf';">
                                    <td>10</td>
                                    <td>Pengembangan Algoritma Steganografi pada Objek 3D</td>
                                    <td>Institute Teknologi Bandung</td>
                                    <td>2012</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>