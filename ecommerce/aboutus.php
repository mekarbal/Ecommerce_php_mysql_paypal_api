
<?php include 'includes/header.php'; ?>

<script src="includes/scripts.php"></script>





<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="https://store.hp.com/app/assets/images/uploads/prod/hp-elitebook-review-hero1532450450254.jpg?impolicy=prdimg&imdensity=1&imwidth=1000" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/bnr.jpg " alt="Second slide">
		                  </div>
		                  <div class="item">
							<img src="https://store.hp.com/app/assets/images/uploads/prod/hp-elitebook-review-hero1532450450254.jpg?impolicy=prdimg&imdensity=1&imwidth=1000" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
                            
                        
                        <h3 class="text-center text-uppercase mt-5">About us</h3>
                        <div class="row">
							<div class="col-md-6 " style="justify-content:center">
							<img src="https://i.ytimg.com/vi/-e8n49OoCFE/maxresdefault.jpg" height='220px' style="border-radius:8px;"  alt="">
							</div>
							<div class="col-md-6 mt-5">
								<h4>We are here to give you the best solutions at a reasonable price and an unbeatable quality of service.</h4>
								<ul>
									<li>High quality products</li>
									<li> Unparalleled customer service</li>
									<li>Money back guaranteed for 30 days</li>
								</ul>
							</div>
                        </div>
            <div class = "top"></div>
			
			
					
				</div>
				
				
				
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
				</div>
				
			</div>
			
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>