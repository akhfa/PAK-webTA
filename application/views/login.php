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
                    <li><a href="<?php echo base_url() ?>index.php/about">Tentang Kami</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/listpaper">Daftar Paper</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/contact">Kontak</a></li>
                    <li class="active"><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="content_bg">
    <div class="container">
        <div class="col-md-12">
            <div class="modal-dialog">

                    <div class="panel-heading">
                        <h3 class="panel-title">Sign In</h3>
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
                            </fieldset>
                        </form>
                    </div>

            </div>
        </div>
        <hr>
    </div>
</div>
<?php require_once 'footer.php' ?>
</body>
</html>