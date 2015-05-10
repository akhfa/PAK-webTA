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
                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url()?>images/logo.png"> </a>
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
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
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