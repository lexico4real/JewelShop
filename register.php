<?php
	$page_title = 'Register' ;
	$makeActiveRegister = 'active'; 
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
		<li> <a class="totalInCart" href="cart.php"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"><?php echo $naira; ?>448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-ecommerce-templates.png" alt="bootstrap ecommerce templates">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right"><?php echo $naira; ?>22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/shopping-cart-template.png" alt="shopping cart template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right"><?php echo $naira; ?>22.00</span></h4>
				</div>
			  </div>
			</li>
			<li style="border:0"> &nbsp;</li>
			<li>
			  <div class="thumbnail">
				<a class="zoomTool" href="product_details.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="assets/img/bootstrap-template.png" alt="bootstrap template">
				<div class="caption">
				  <h4><a class="defaultBtn" href="product_details.php">VIEW</a> <span class="pull-right"><?php echo $naira; ?>22.00</span></h4>
				</div>
			  </div>
			</li>
		  </ul>

	</div>
	<div class="span9">
    <ul class="breadcrumb">
		<li><a href="index.html">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
	<h3> Registration</h3>	
	<hr class="soft"/>
	<div class="well">
	<form class="form-horizontal">
		<h3>Your Personal Details</h3>
		<div class="control-group">
		<label class="control-label">Title <sup>*</sup></label>
		<div class="controls">
		<select class="span1" name="days">
			<option value="">-</option>
			<option value="1">Mr.</option>
			<option value="2">Mrs</option>
			<option value="3">Miss</option>
		</select>
		</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="inputFname">First name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputFname" placeholder="First Name">
			</div>
		 </div>
		 <div class="control-group">
			<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
			<div class="controls">
			  <input type="text" id="inputLname" placeholder="Last Name">
			</div>
		 </div>
		<div class="control-group">
		<label class="control-label" for="inputEmail">Email <sup>*</sup></label>
		<div class="controls">
		  <input type="text" placeholder="Email">
		</div>
	  </div>	  
		<div class="control-group">
		<label class="control-label">Password <sup>*</sup></label>
		<div class="controls">
		  <input type="password" placeholder="Password">
		</div>
	  </div>
		<div class="control-group">
		<label class="control-label">Date of Birth <sup>*</sup></label>
		<div class="controls">
		  <select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
			<select class="span1" name="days">
				<option value="">-</option>
					<option value="1">1&nbsp;&nbsp;</option>
					<option value="2">2&nbsp;&nbsp;</option>
					<option value="3">3&nbsp;&nbsp;</option>
					<option value="4">4&nbsp;&nbsp;</option>
					<option value="5">5&nbsp;&nbsp;</option>
					<option value="6">6&nbsp;&nbsp;</option>
					<option value="7">7&nbsp;&nbsp;</option>
			</select>
		</div>
	  </div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn">
		</div>
	</div>
	</form>
</div>

<div class="well">
	<form class="form-horizontal" >
		<h3>Your Billing Details</h3>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		 <div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <textarea></textarea>
			</div>
		</div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Register" class="shopBtn exclusive">
		</div>
	</div>
	</form>
</div>


<div class="well">
	<form class="form-horizontal" >
		<h3>Your Account Details</h3>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div><div class="control-group">
			<label class="control-label">Fiels label <sup>*</sup></label>
			<div class="controls">
			  <input type="text" placeholder=" Field name">
			</div>
		</div>
	<div class="control-group">
		<div class="controls">
		 <input type="submit" name="submitAccount" value="Register" class="exclusive shopBtn">
		</div>
	</div>
	</form>
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