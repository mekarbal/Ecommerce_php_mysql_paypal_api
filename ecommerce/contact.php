
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
                            
                    <section id="contact">
           <h3 class="text-center text-uppercase">contact us</h3>
          <div class="row">
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-phone fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">call us</h4>
                    <p>+2126 97 80 55 55</p>
                  </div>
                </div>
             </div>
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-map-marker fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">office loaction</h4>
                   <address>Suite 02, Level 12, Country Center </address>
                  </div>
                </div>
             </div>
             
             <div class="col-sm-12 col-md-6 col-lg-4 my-5">
               <div class="card border-0">
                  <div class="card-body text-center">
                    <i class="fa fa-globe fa-5x mb-3" aria-hidden="true"></i>
                    <h4 class="text-uppercase mb-5">email</h4>
                    <p>YouCodeGaming@gmail.com</p>
                  </div>
                </div>
             </div>
           
       </div>
    </section>
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