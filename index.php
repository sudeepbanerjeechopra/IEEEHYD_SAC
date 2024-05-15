<?php 
    $title = "Home";
    require('header.php')
?>

    <style type="text/css">
  		section {
  			padding: 0 0;
  			position: relative;
  		}
  		body{
  			background-image: url("images/main background.jpeg");
  			background-repeat: no-repeat;
  			background-size: 100% 120vh;
            font-family: 'Montserrat';
  		}
  		body:after {
			  content: "";
			  position: fixed;
			  top: 0; bottom: 0; left: 0; right: 0; 
			  background: rgba(255,255,255,0.9);
			  pointer-events: none;
			  z-index: -1;
			}
		@media (max-width: 610px) {
  			body{
  					background-size: 100% 100vh;
  					background-attachment: fixed
  				}
		}
		::-webkit-scrollbar {
			display: none;
		}
    </style>

    <script type="text/javascript">
        var element = document.getElementById("home");
        element.classList.add("active");
    </script>

    <section id="portfolio" class="portfolio">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-4">
    				<div class="row">
    					<div class="col-lg-12 col-md-6 portfolio-item filter-web" data-aos="fade-right" data-aos-duration="1500" style="height: 150px;">
          		  			<img src="images/ieee.jpg"class="img-fluid"  alt="">
          		  			<div class="portfolio-info">
          		    			<h4 style="top: 10px;"><a href="membership-benefits" class="stretched-link" style="color: white;">Membership & Benifits</a></h4>
          		    			<p>Membership Details, Benefits and more... </p>
            				</div>
            			</div>
            			<div class="col-lg-12 col-md-6 portfolio-item filter-app" data-aos="fade-up" data-aos-duration="1500" style="height: 310px;">
          		  			<img src="images/events.jpg" class="img-fluid" alt="" >
          		  			<div class="portfolio-info">
          		    			<h4><a href="events" class="stretched-link" style="color: white;">Events</a></h4>
          		    			<p>Previous Events, Upcoming Events Details and Information</p>
            				</div>
          				</div>
    				</div>
    			</div>

    			<div class="col-sm-4" style="width: 100%;">
    				<div class="row" style="width: 100%;"data-aos="fade-down" data-aos-duration="1500" >

            			<div class="row" style="width: 100%;">
                            <div class="col-lg-12 col-md-6 portfolio-item filter-web" data-aos="fade-up" data-aos-duration="1500" style="height: 150px;">
                                <div class="" style=" height: 100%; width: 100%; background-color: #2f55d4;  align-content: center; text-align: center; padding-top: 55px;">
                                    <h3 style="color: white; font-size: 20px; text-align: center;">Guidelines and Rules</h3>                        
                                </div>
                                <div class="">
                                    <h4><a href="guidelines and rules.pdf" target="_blank" class="stretched-link" style="color: white;"></a></h4>
                                </div>
                            </div>
                        </div>

            			<div class="row">
            				<div class="col-lg-12 col-md-6 portfolio-item filter-app" data-aos="fade-up" data-aos-duration="1500" style="height: 150px;">
          		  				<img src="images/sb1.jpeg" class="img-fluid" alt="" style="width: 100%;" >
          		  				<div class="portfolio-info">
          		    				<h4><a href="student-branch-details" class="stretched-link" style="color: white;">Student Branches</a></h4>
          		    				<p>Student Branch Details</p>
            					</div>
          					</div>
            			</div>

                        <div class="col-lg-12 col-md-6 portfolio-item filter-web"  style="height: 150px;">
                            <div class="" style=" height: 100%;background-color: #2f55d4;  align-content: center; text-align: center; padding-top: 50px;">
                                <i class="icofont-headphone-alt-2" style="color: white; font-size: 30px; text-align: center;  "></i>                            
                            </div>
                            <div class="portfolio-info">
                                <h4><a href="contact-us" class="stretched-link" style="color: white;">Help & Contact Information</a></h4>
                            </div>
                        </div>

            			

    				</div>
    			</div>

    			<div class="col-sm-4">
    				<div class="row">
            			<div class="col-lg-12 col-md-6 portfolio-item filter-web" data-aos="fade-right" data-aos-duration="1500" style="height: 150px;">
          				  	<img src="images/volunteers-2.jpeg" class="img-fluid" alt="">
          				  	<div class="portfolio-info">
          				    	<h4><a href="sac-core-team" class="stretched-link" style="color: white;">SAC Volunteers</a></h4>
          				    	<p>SAC Members</p>
            				</div>
            			</div>
            		</div>
            		<div class="row">
            			<div class="col-lg-12 col-md-6 portfolio-item filter-web" data-aos="fade-up" data-aos-duration="1500" style="height: 150px;">
          				  	<img src="images/awards.jpg" class="img-fluid" alt="">
          				  	<div class="portfolio-info">
          				    	<h4><a href="https://students.ieee.org/funding/" class="stretched-link" style="color: white;">Awards & Funds</a></h4>
            				</div>
            			</div>
            		</div>
            		<div class="row" style="width: 100%; margin: none">
            			<div class="col-lg-12 col-md-6 portfolio-item filter-web" data-aos="fade-up" data-aos-duration="1500" style="height: 150px; margin:0px;">
          				  	<div class="" style=" height: 100%; width: 100%; background-color: #2ECC71;  align-content: center; text-align: center; padding-top: 55px;">
                                <h4 class="blink"><a href="about-sac" class="stretched-link" style="color: white; font-size: 22px; text-align: center;">Lets get Started</a></h4>
          				  		<!-- <h3  >
                                    about_sac.html
          				  			</h3>  -->						
    						</div>
            			</div>
            		</div>
    			</div>
    		</div>
    	</div>
    </section>
    <br><br>

<?php 
    require('footer.php')
?>


