<?php
include_once ('header.php');
?>
<div class="contact">
		
		<!--
		<div class="container">		
			

			<h3 class="hdng">How to Find Us</h3>
			<div class="map">
					

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12386182.960956775!2d-74.08302114251626!3d40.71866701702417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1436524193425"  style="border:0" allowfullscreen></iframe>

			</div>
		</div>

	-->



		<div class="contact-form">
			<div class="container">		
				<h3 class="hdng">Contact Us</h3>
				<div class="contact-grids-info">
					<div class="col-md-7 contact-right">

					<p id="message"></p>				
						<form>
							<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" name="phone" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="">
							<textarea name="text" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit" name="contact">
						</form>
					</div>
					<div class="col-md-5 contact-left">
						<p>"Reach out to us at Hope Also Need Help through any of the following means. "</p>
						<ul>
							<li><span class="glyphicon3 glyphicon-map-marker" aria-hidden="true"></span>
								N0. 11 irepodun street Adabeji community area, Moorplantation, Apata Ibadan, Oyo State, Nigeria
							</li>					
							<li><span class="glyphicon3 glyphicon-earphone" aria-hidden="true"></span>
								+123 2222 222
							</li>
							<li><span class="glyphicon3 glyphicon-envelope" aria-hidden="true"></span>
								<a href="mailto:info@hopealsoneedhelp.com">info@hopealsoneedhelp.com</a>
							</li>
						</ul>
					</div>						
					<div class="clearfix"> </div>
				</div>

				<div class="links">
				 <h3>Links</h3>
				 <ul>
					 <li><a href="#"><span class="glyphicon2 glyphicon-menu-right" aria-hidden="true"></span>Our Visioneer</a></li>
					 <li><a href="#"><span class="glyphicon2 glyphicon-menu-right" aria-hidden="true"></span>Blog</a></li>
					 <li><a href="#"><span class="glyphicon2 glyphicon-menu-right" aria-hidden="true"></span>Events</a></li>
					 <li><a href="#"><span class="glyphicon2 glyphicon-menu-right" aria-hidden="true"></span>News</a></li>
					 <li><a href="#"><span class="glyphicon2 glyphicon-menu-right" aria-hidden="true"></span>Our Team</a></li>
				 </ul>
			 </div>
			</div>

			
		</div>


		 			
</div>


 <script type="text/javascript">
    	$(document).ready(function(){
    		$('#contact').click(function(event){
    			event.preventDefault();
    		$.ajax({
    			url:"process_contact.php",
    			method: "post",
    			data:$('form').serialize(),
    			dataType:"text",
    			success:function(strMessage){
    				$('#message').text(strMessage)
    			}
    		})
    		})
    	})
    </script>
<!---->
<?php
include_once ('footer.php');
?>