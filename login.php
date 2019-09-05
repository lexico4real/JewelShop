<?php
	$page_title = 'Login' ; 
	$makeActiveLogin = 'active';
	include_once('include/header.html');
 ?>
<!-- 
Body Section 
-->
	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Watches</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fine Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Fashion Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Engagement & Wedding</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Men's Jewelry</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Vintage & Antique</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Diamonds </a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>Loose Beads</a></li>
		<li><a href="products.php"><span class="icon-chevron-right"></span>See All Jewelry & Watches</a></li>
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="cart.php"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Login</li>
    </ul>

	<div class="row">
		<div class="span9">
			<div class="well">
				<h2>LOGIN</h2>
					<form class="form-horizontal">
					  <div class="control-group">
						<label class="control-label" for="inputEmail">Email</label>
						<div class="controls">
						  <input class="span3"  type="text" placeholder="Email">
						</div>
					  </div>
					  <div class="control-group">
						<label class="control-label" for="inputPassword">Password</label>
						<div class="controls">
						  <input type="password" class="span3" placeholder="Password">
						</div>
					  </div>
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" class="shopBtn block">Sign in</button> <a href="forget_password.php">Forget password?</a>
						</div>
					  </div>
					</form>
			</div>
		</div>
	</div>	
	
</div>
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="assets/img/6.png"></a>
		</div>
	</div>
</section>

<?php 
	require_once('include/footer.html');
 ?>