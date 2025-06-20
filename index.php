<?php
	include('header.php');
?>
	<!-- banner -->
	<div class="banner">
		<div id="kb" class="carousel kb_elastic animate_text kb_wrapper" data-ride="carousel" data-interval="6000" data-pause="hover">
			<!-- Wrapper-for-Slides -->
            <div class="carousel-inner" role="listbox">  
				<?php
					$Sql="SELECT * FROM `slider`";
					$result=mysqli_query($con, $Sql);
					$flag = 1;
					while ($row=mysqli_fetch_array($result)) {

				?>
                <div class="item<?php if($flag){?> active<?php $flag=0; } ?>"> <!-- First-Slide -->
                    <img src="images/banners/<?=$row['banner_image'];?>" alt="" class="img-responsive" />
                    <div class="carousel-caption kb_caption kb_caption_right">
                        <h3 data-animation="animated fadeInDown"><?=$row['banner_text1'];?></h3>
                        <h4 data-animation="animated fadeInUp"><?=$row['banner_text2'];?></h4>
                    </div>
                </div> 

				<?php } ?> 
            </div> 
            <!-- Left-Button -->
            <a class="left carousel-control kb_control_left" href="#kb" role="button" data-slide="prev">
				<span class="fa fa-angle-left kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> 
            <!-- Right-Button -->
            <a class="right carousel-control kb_control_right" href="#kb" role="button" data-slide="next">
                <span class="fa fa-angle-right kb_icons" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
		<script src="js/custom.js"></script>
	</div>
	<!-- //banner -->  
	<!-- welcome -->
	<div class="welcome"> 
		<div class="container"> 
			<div class="welcome-info">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class=" nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" >
						<li role="presentation"><a href="#carl" role="tab" id="carl-tab" data-toggle="tab"> 
							<i class="fa fa-female" aria-hidden="true"></i>
							<h5>Fashion</h5>
						</a></li>
						<li role="presentation"><a href="#james" role="tab" id="james-tab" data-toggle="tab"> 
							<i class="fa fa-gift" aria-hidden="true"></i>
							<h5>Photo & Gifts</h5>
						</a></li>
						<li role="presentation"><a href="#decor" role="tab" id="decor-tab" data-toggle="tab"> 
							<i class="fa fa-home" aria-hidden="true"></i>
							<h5>Home Decor</h5>
						</a></li>
						<li role="presentation"><a href="#sports" role="tab" id="sports-tab" data-toggle="tab"> 
							<i class="fa fa-futbol-o" aria-hidden="true"></i>
							<h5>Sports</h5>
						</a></li> 
					</ul>
					<div class="clearfix"> </div>
					<h3 class="w3ls-title">Featured Products</h3>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="tabcontent-grids">  
								<div id="owl-demo" class="owl-carousel"> 
								<?php 
								$Sql="SELECT * FROM `products` WHERE `cat_id`=5";
								$result=mysqli_query($con, $Sql);
								while ($row=mysqli_fetch_array($result)) {
								?>

									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
												
												<h5><i class="fa fa-rupee"></i> <?=$row['product_price']?></h5> 
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
													<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
													<button type="submit" class="w3ls-cart" data-id="<?=$row['product_id'];?>">
														<i class="fa fa-cart-plus" aria-hidden="true">
															</i> Add to cart</button>
												</form>  
											</div>   
										</div>   
									</div>
									<?php }?>
									
								</div> 
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="carl" aria-labelledby="carl-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo1").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo1" class="owl-carousel"> 
								<?php 
				$Sql="SELECT * FROM `products` WHERE `cat_id`=5";
				$result=mysqli_query($con, $Sql);
				while ($row=mysqli_fetch_array($result)) {
				?>
								<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
												
												<h5><?=$row['product_price'];?></h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
													<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
													<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
													<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>        
										</div>    
									</div>
									<?php } ?>
									  
								</div>   
							</div>
						</div> 
						<div role="tabpanel" class="tab-pane fade" id="james" aria-labelledby="james-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo2").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo2" class="owl-carousel">
								<?php 
				$Sql="SELECT * FROM `products` WHERE `cat_id`=6";
				$result=mysqli_query($con, $Sql);
				while ($row=mysqli_fetch_array($result)) {
				?>
									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
												
												<h5><?=$row['product_price']?></h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
													<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
													<input type="hidden" name="amount" value="<?=$row['product_price'];?>" /> 
													<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									<?php }?> 
								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="decor" aria-labelledby="decor-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo3").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										});
										
									}); 
								</script>
								<div id="owl-demo3" class="owl-carousel"> 
                                <?php 
				                $Sql="SELECT * FROM `products` WHERE `cat_id`=7";
				                $result=mysqli_query($con, $Sql);
				                while ($row=mysqli_fetch_array($result))  {
				                  ?>

									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>Sale</h6></div>
											<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
												
												<h5><?=$row['product_price']?></h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
													<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>" /> 
													<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
													<button type="submit" class="w3ls-cart"  data-id="<?=$row['product_id'];?>"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
									
                                  <?php }?>

								</div>    
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="sports" aria-labelledby="sports-tab">
							<div class="tabcontent-grids">
								<script>
									$(document).ready(function() { 
										$("#owl-demo4").owlCarousel({
									 
										  autoPlay: 3000, //Set AutoPlay to 3 seconds
									 
										  items :4,
										  itemsDesktop : [640,5],
										  itemsDesktopSmall : [414,4],
										  navigation : true
									 
										}); 
									}); 
								</script>
								<div id="owl-demo4" class="owl-carousel">

								<?php 
				                $Sql="SELECT * FROM `products` WHERE `cat_id`=8";
				                $result=mysqli_query($con, $Sql);
				                while ($row=mysqli_fetch_array($result))  {
				                  ?>



									<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<div class="new-tag"><h6>New</h6></div>
											<a href="product_details.php?id=<?=$row['product_id'];?>"><img src="<?=$siteUrl;?>admin_area/product_images/<?=$row['product_img1']?>" alt="img"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="product_details.php?id=<?=$row['product_id'];?>"><?=$row['product_title']?></a></h4>
												
												<h5><?=$row['product_price']?></h5>
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" /> 
													<input type="hidden" name="p_id" value="<?=$row['product_id'];?>">
													<input type="hidden" name="w3ls_item" value="<?=$row['product_title']?>"/> 
													<input type="hidden" name="amount" value="<?=$row['product_price']?>" /> 
													<button type="submit" class="w3ls-cart" data-id="<?=$row['product_id'];?>" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
												</form>
											</div>         
										</div>  
									</div>
                                    <?php }?>

									
									
								</div>    
							</div>
						</div> 
					</div>   
				</div>  
			</div>  	
		</div>  	
	</div> 
	<!-- //welcome -->
	<!-- add-products -->
	<div class="add-products"> 
		<div class="container">  
			<div class="add-products-row">
				<div class="w3ls-add-grids">
					<a href="products1.html"> 
						<h4>TOP 10 TRENDS FOR YOU FLAT <span>20%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl">
					<a href="products1.html"> 
						<h4>SUNDAY SPECIAL DISCOUNT FLAT <span>40%</span> OFF</h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="w3ls-add-grids w3ls-add-grids-mdl1">
					<a href="products.html"> 
						<h4>LATEST DESIGNS FOR YOU <span> Hurry !</span></h4>
						<h6>Shop now <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></h6>
					</a>
				</div>
				<div class="clerfix"> </div>
			</div>  	
		</div>  	
	</div>
	<!-- //add-products -->
	<!-- coming soon -->
	<div class="soon">
		<div class="container">
			<h3>Mega Deal Of the Week</h3>
			<h4>Coming Soon Don't Miss Out</h4>  
			<div id="countdown1" class="ClassyCountdownDemo"></div>
		</div> 
	</div>
	<!-- //coming soon -->
	<!-- deals -->
	<div class="deals"> 
		<div class="container"> 
			<h3 class="w3ls-title">DEALS OF THE DAY </h3>
			<div class="deals-row">
				<!-- <div class="col-md-3 focus-grid"> 
					<a href="products.html" class="wthree-btn"> 
						<div class="focus-image"><i class="fa fa-mobile"></i></div>
						<h4 class="clrchg">Mobiles</h4> 
					</a>
				</div> -->
				<!-- <div class="col-md-3 focus-grid"> 
					<a href="products.html" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-laptop"></i></div>
						<h4 class="clrchg"> Electronics & Appliances</h4> 
					</a>
				</div>  -->
				<!-- <div class="col-md-3 focus-grid"> 
					<a href="products4.html" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-wheelchair"></i></div>
						<h4 class="clrchg">Furnitures</h4>
					</a>
				</div>  -->
				<div class="col-md-3 focus-grid"> 
					<a href="products3.html" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-home"></i></div>
						<h4 class="clrchg">Home Decor</h4>
					</a>
				</div> 
				<!-- <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products9.html" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-book"></i></div>
						<h4 class="clrchg">Books & Music</h4> 
					</a>
				</div> -->
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products1.html" class="wthree-btn wthree4"> 
						<div class="focus-image"><i class="fa fa-asterisk"></i></div>
						<h4 class="clrchg">Fashion</h4>
					</a>
				</div>
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products2.html" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Kids</h4>
					</a>
				</div> 
				<div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products5.html" class="wthree-btn wthree"> 
						<div class="focus-image"><i class="fa fa-shopping-basket"></i></div>
						<h4 class="clrchg">Groceries</h4>
					</a>
				</div> 
				<!-- <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products7.html" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-medkit"></i></div>
						<h4 class="clrchg">Health</h4> 
					</a>
				</div>  -->
				<!-- <div class="col-md-2 focus-grid w3focus-grid-mdl"> 
					<a href="products8.html" class="wthree-btn wthree1"> 
						<div class="focus-image"><i class="fa fa-car"></i></div>
						<h4 class="clrchg">Automotive</h4> 
					</a>
				</div>-->
				<div class="col-md-3 focus-grid">  
					<a href="products5.html" class="wthree-btn wthree2"> 
						<div class="focus-image"><i class="fa fa-cutlery"></i></div>
						<h4 class="clrchg">Food</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="products4.html" class="wthree-btn wthree5"> 
						<div class="focus-image"><i class="fa fa-futbol-o"></i></div>
						<h4 class="clrchg">Sports</h4> 
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="products2.html" class="wthree-btn wthree3"> 
						<div class="focus-image"><i class="fa fa-gamepad"></i></div>
						<h4 class="clrchg">Games & Toys</h4> 
					</a>
				</div> 
				<div class="col-md-3 focus-grid"> 
					<a href="products6.html" class="wthree-btn "> 
						<div class="focus-image"><i class="fa fa-gift"></i></div>
						<h4 class="clrchg">Gifts</h4> 
					</a>
				</div>
				<div class="col-md-3 focus-grid"> 
					<a href="products7.html" class="wthree-btn "> 
						<div class="focus-image"><i class="fa fa-male"></i></div>
						<h4 class="clrchg">Cloth</h4> 
					</a>
				</div> 
				
				<div class="clearfix"> </div>
			</div>  	
		</div>  	
	</div> 
	<!-- //deals --> 
	<?php
include('footer.php');
?>