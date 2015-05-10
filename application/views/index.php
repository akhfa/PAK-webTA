<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
 <?php require_once 'header.php'?>
<body>
<div class="h-bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
		  	 <a href="<?php base_url()?>"><img width="400" height="40" src="<?php echo base_url() ?>images/logo.png"> </a>
		 </div>
	<div class="header-right">
	 	 <ul class="nav">
	        <li class="active"><a href="<?php echo base_url()?>" title="Home">Home</a></li>
<!--	  		<li><a href="--><?php //echo base_url() ?><!--index.php/about">Tentang Kami</a></li>-->
             <li><a href="<?php echo base_url() ?>index.php/listpaper">Daftar Paper</a></li>
             <li><a href="<?php echo base_url() ?>index.php/contact">Kontak Kami</a></li>
	  	    <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
      </ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="slider_bg">
 <div class="wrap">
 <section class="slider">
        <div class="flexslider carousel">
          <ul class="slides">
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-1.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-2.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-3.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-4.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-5.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-6.jpg" />
  	    		</li>
  	    		<li>
  	    	    <img src="<?php echo base_url() ?>images/thumbnail-slider-8.jpg" />
  	    		</li>
          </ul>
        </div>
      </section>

</div>
</div>
<div class="cont_bg">
<div class="wrap">
<div class="content">
 <div class="main">
 	<h2>Selamat datang di Website Kami</h2>
 	<div class="text">
 		<div class="txt_img">
 			<a href="<?php echo base_url() ?>details.html"><img src="<?php echo base_url() ?>images/pic1.jpg"  alt="" /></a>
 		</div>
		<div class="txt_para">
		    <p">Plagiarisme sebagai bagian tindakan korupsi merupakan peruatan yang tercela dan menurunkan
                moral bangsa , oleh karena itu dibutuhkan akses terhadap system informasi yang gunanya bukan
                hanya memudahkan system referencing bagi mahasiswa namun juga sebagai bentuk pengawasan terhadap
                tindakan yang dilakukannya dengan memudahkan researcher-researcher lain untuk melihat apakah sudah
                pernah dilakukan research yang serupa dan memastikan bahwa tidak ada pihak
                yang dicurangi .Hal ini sangat penting mengingat Indonesia merupakan Negara yang
                luas dengan banyak universias yang terletak berjauhan. Oleh karena itu , kelompok
                kami berinisiatif untuk membuat suatu yang dapat mewadahi hal itu yaitu dengan
                menciptakan website IDstudent-research.tk . Website ini merupakan website yang
                sangat mudah di akses via internet dan dapat dikolaborasikan dengan universitas
                universitas di seluruh indonesia.</p>
		</div>

	</div>
     <div class="txt_para1">
         <p>Melalui website ini kami berharap Tindakan Korupsi , yang lebih tepatnya tindakan
             plagiarism dapat berkurang dan lebih banyaknya penelitian penelitian yang kredible
             untuk memajukan dunia pendidikan  dan penelitian Indonesia.</p>
     </div>

	<div class="clear"></div>

 </div>
 <div class="sidebar">
  <div class="side_bar">
 	<h2>Daftar Halaman</h2>
 	<p class="top"><a href="<?php echo base_url() ?>index.php/listpaper"><img src="<?php echo base_url() ?>images/art-pic1.jpg" alt="">Daftar Paper<br>Berisi daftar paper yang telah dibuat oleh mahasiswa.</a></p>
 	<p class="top"><a href="<?php echo base_url() ?>index.php/contact"><img src="<?php echo base_url() ?>images/art-pic2.jpg" alt="">Kontak Kami<br>Halaman untuk menghubungi kami apabila Anda punya saran.</a></p>
 	<p class="top"><a href="<?php echo base_url() ?>index.php/login"><img src="<?php echo base_url() ?>images/art-pic3.jpg" alt="">Login<br>Halaman untuk login ke dalam situs, untuk mengelola situs.</a></p>
 </div>
 </div>
  </div>
 <div class="clear"></div>
 </div>
</div>
<?php require_once 'footer.php'?>
</body>
</html>