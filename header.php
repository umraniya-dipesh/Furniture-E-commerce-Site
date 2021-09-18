   <div class="header">
			<nav class="navbar container">
			  <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
					<a href="index.php" class="navbar-brand">
					<img src="img/l2.png"  height="40px" width="50px"><b><font face="lemon" color="Black" size="4px">Delux Furniture</font></b>
				</a>
			  </div>
  
                 
                 <div class="navbar-collapse collapse navbar-right" >
					<ul class="nav navbar-nav">
                      <li class="active"><a href="index.php"><font color="black">Home</font></a></li>
                       
                      <li><a href="category.php"><font color="black">Category page</font></a></li>
                      <li><a href="about_us.php" class="ajax_right"><font color="black">About Us</font></a></li>
                      <li><a href="contact_us.php" class="ajax_right"><font color="black">Contact Us</font></a></li>
                      <?php 
                      	if(isset($_SESSION['login_username'])){  ?>
                      		<li>Welcome <font color="orange">
                      	<?=$_SESSION['login_username']?></font></li>
                      		<li><a href="#"id="logout_user" class="ajax_right"><font color="black">Log Out</font></a></li>                      		
						<?php } 
						else { ?>                    
							 <li><a href="account.php" class="ajax_right"><font color="black">Account</font></a></li>
						<?php }?>
                    </ul>

                    <ul class="nav navbar-right cart">
                      <li class="">
					<a href="cart.php" class="" ><span></span></a>
					
					<div class="cart-info dropdown-menu">
						<table class="table">
							<!-- <thead>
							</thead>
							<tbody>
								<tr>
									<td class="image"><img alt="IMAGE" class="img-responsive" src="products/dress33.jpg"></td>
									<td class="name"><a href="project.html">Black Dress</a></td>
									<td class="quantity">x&nbsp;3</td>
									<td class="total">Rs 130.00</td>
									<td class="remove"><img src="image/remove-small.png" alt="Remove" title="Remove"></td>											
								</tr>
								
							</tbody>				 -->					
						</table>
						<div class="cart-total">
						  <!-- <table>
							 <tbody>
								<tr>
								  <td><b>Sub-Total:</b></td>
								  <td>Rs 400.00</td>
								</tr>
								<tr>
								  <td><b>Total:</b></td>
								  <td>Rs 400.00</td>
								</tr>
							</tbody>
						  </table> -->
						 <!--  <div class="checkout"><a href="cart.php" class="ajax_right">View Cart</a> | <a href="checkout.php" class="ajax_right">Checkout</a></div>
						</div> -->
					</div> 
			      </li>
			     </ul>
					 
                    <form  class="navbar-form navbar-search navbar-right" role="search" method="GET" action="search_text.php">
		      <div class="input-group"> 
                        <input type="text" name="search_text" id="search_text" placeholder="Search" class="search-query col-md-2"><button type="submit" name="sbnt" class="btn btn-default icon-search"></button> 
                      </div>
                    </form>
					 
                  </div>
			</nav>		
		</div>
	