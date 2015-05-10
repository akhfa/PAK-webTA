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
                    <li><a href="<?php echo base_url() ?>index.php/listpaper">Daftar Paper</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/contact">Kontak Kami</a></li>
                    <li class="active"><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="content_bg">
    <div class="wrap">
        <div class="content">
            <div class="container">
                <div class="main">
                    <div class="col-md-12">
                        <div class="modal-dialog">

                                <div class="panel-heading">
                                    <h2 class="panel-title">* Sign In</h2>
                                </div>
                                <div class="panel-body">
                                    <form role="form">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                            </div>
                                            <!-- Change this to a button or input when using this as a form -->
                                            <a href="javascript:;" class="btn btn-sm btn-success">Login</a>
                                            <h5>* Untuk mendapatkan akun, silahkan menuju halaman <a href="<?php echo base_url()?>index.php/contact">kontak kami</a></h5>
                                        </fieldset>
                                    </form>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="side_bar">
                        <h2>Daftar Halaman</h2>
                        <p class="top"><a href="<?php echo base_url() ?>index.php/listpaper"><img src="<?php echo base_url() ?>images/art-pic1.jpg" alt="">Daftar Paper<br>Berisi daftar paper yang telah dibuat oleh mahasiswa.</a></p>
                        <p class="top"><a href="<?php echo base_url() ?>index.php/contact"><img src="<?php echo base_url() ?>images/art-pic2.jpg" alt="">Kontak Kami<br>Halaman untuk menghubungi kami apabila Anda punya saran.</a></p>
                        <p class="top"><a href="<?php echo base_url() ?>index.php/login"><img src="<?php echo base_url() ?>images/art-pic3.jpg" alt="">Login<br>Halaman untuk login ke dalam situs, untuk mengelola situs.</a></p>
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>