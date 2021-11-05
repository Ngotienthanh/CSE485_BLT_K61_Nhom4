<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
						<label class="contact-p1">Full Name:</label>
						<input type="text" class="form-control" name="name" id="name" required >
						<p class="help-block"></p>
                    </div>	
                    <div class="control-group form-group">
						<label class="contact-p1">Phone Number:</label>
						<input type="tel" class="form-control" name="phone" id="phone" required >
						<p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
						<label class="contact-p1">Email Address:</label>
						<input type="email" class="form-control" name="email" id="email" required >
						<p class="help-block"></p>
                    </div>
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Connect With Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+84 97 7626 563</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@SUNRISE.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> 275 Tây Sơn Road, Đống Đa District , Hà Nội</p>												
			<div class="social-bnr-agileits footer-icons-agileinfo">
				<ul class="social-icons3">
					<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
					<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
					<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li> 
					
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
