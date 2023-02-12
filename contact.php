<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<?php require_once "templates/head.php" ?>
</head>

<body>
	<?php require_once "templates/navbar.php" ?>
	
	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<form id="contactForm">
						<div class="row">
							<form action="mail.php" method="post" role="form" class="php-email-form">
								<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Your Email" id="email" class="form-control" name="name" required data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile no" data-rule="minlen:4"
												data-msg="Please enter mobile no" />
											<div class="validate"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group"> 
											<textarea class="form-control" id="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
											<div class="help-block with-errors"></div>
										</div>
										<div class="submit-button text-center">
											<button class="btn btn-common" id="submit" type="submit">Send Message</button>
											<div id="msgSubmit" class="h3 text-center hidden"></div> 
											<div class="clearfix"></div> 
										</div>
									</div> 

							
								
							</form>
						</div>            
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
	<?php require_once "templates/footer.php" ?>
	<?php require_once "templates/wp.php" ?>

	<script>
		$('.map-full').mapify({
			points: [
				{
					lat: 40.7143528,
					lng: -74.0059731,
					marker: true,
					title: 'Marker title',
					infoWindow: 'Live Dinner Restaurant'
				}
			]
		});	
	</script>
</body>
</html>