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
<!--             <li><a href="--><?php //echo base_url() ?><!--index.php/about">Tentang Kami</a></li>-->
             <li><a href="<?php echo base_url() ?>index.php/listpaper">Daftar Paper</a></li>
             <li class="active"><a href="<?php echo base_url() ?>index.php/contact">Kontak Kami</a></li>
             <li><a href="<?php echo base_url() ?>index.php/login">Login</a></li>
      </ul>
	 </div>
	 <div class="clear"></div>
	</div>
</div>
</div>
<div class="content_bg">
<div class="wrap">
<div class="section group">				
				<div class="col span_1_of_3">
					<div class="contact_info">
			    	 	<h3>Lokasi Kami</h3>
			    	 		<div class="map">
<!--					   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=6.8899,107.6100" style="	color: #8B5D3E;;text-align:left;font-size:12px">View Larger Map</a></small>-->
                                <iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=Institut+Teknologi+Bandung,+Bandung,+West+Java,+Republic+of+Indonesia&key=AIzaSyCuOxN7TBcojscT1NWDVSG8VkTBNnYqyX8"></iframe>
					   		</div>
      				</div>
      			    <div class="company_address">
				     	<h3>Informasi :</h3>
						<p>Indonesian Student Research</p>
                        <p>Institute Teknologi Bandung</p>
						<p>Jl. Ganesha No.10, Bandung, Jawa Barat 40132</p>
						<p>Indonesia</p>
				   		<p>Telepon: (022) 2500935</p>
                        <p>Email: <span>info@itb.ac.id</span></p>
				   </div>
				</div>				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Kontak Kami</h3>
					      <form method="post" action="#">
					    	<div>
						    	<span><label>NAMA</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>TELEPON</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>ISI</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<span class="button-wrap" onclick="alert('Terima kasih sudah menghubungi kami.')"><input type="submit" value="Submit"></span>
						  </div>
					    </form>
				    </div>
  				</div>				
		  </div>
 <div class="clear"></div>
 </div>
</div>
<?php require_once 'header.php' ?>
</body>
</html>