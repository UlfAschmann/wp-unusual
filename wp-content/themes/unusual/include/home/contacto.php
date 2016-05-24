<?php ?>


	<div id="img-contacto" class="background">
		<div class="altura">

		</div>
	</div>

	<section id="contact">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2>¿CÓMO PODEMOS AYUDARLE?</h2>
					<p>Ahora que sabe un poco más sobre nosotros, nos encantaría saber más acerca de su organización, sus retos y lo que es más importante para usted y su negocio.</p>
				</div>
			</div>
			<div id="contact_form" class="row">
				<div class="col-md-6 form_half">
					<div class="datos">
						<ul>
							<li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@unusual-projects.com.mx</li>
							<li><i class="fa fa-phone" aria-hidden="true"></i> 000 000 000 000</li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> Pafnuncio Paddilla 53, Satélite,
								<br> 53100 Naucalpan de Juárez</li>
						</ul>
					</div>
					<form id="feedbackForm" data-toggle="validator" data-disable="false">
						<div class="form-group">
							<label class="control-label" for="name">Name *</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required/>
							<span class="help-block " style="display: none;">Please enter your name.</span>
						</div>
						<div class="form-group">
							<label class="control-label" for="email">Reason for Contact *</label>

							<select name="reason" class="form-control" required>
								<option value="">Eligue una opción</option>
								<option value="General Inquiry">General Inquiry</option>
								<option value="Place Order">Place Order</option>
								<option value="Report Issue">Report Issue</option>
							</select>

							<span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
						</div>
						<div class="form-group">
							<label class="control-label" for="email">Email Address *</label>

							<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required/>

							<span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
						</div>
						<div class="form-group">
							<label class="control-label" for="message">Message *</label>
							<textarea rows="2" cols="30" class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
							<span class="help-block" style="display: none;">Please enter a message.</span>
						</div>
						<div class="form-group">
							<div class="g-recaptcha" data-sitekey="your_site_key"></div>
							<span class="help-block" style="display: none;">Please check that you are not a robot.</span>
						</div>
						<span class="help-block" style="display: none;">Please enter a the security code.</span>
						<button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg pull-right" data-loading-text="Sending..." style="display: inline-block; margin-top: 10px;">Send Feedback</button>
					</form>
				</div>
				<div class="clearfix visible-xs visible-sm"></div>
				<div class="col-md-6 form-half-2">
					<!-- 16:9 aspect ratio -->
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d790.5850673159733!2d-99.23185963338723!3d19.512503996338914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202d70af0e261%3A0x1bc524259bfdb65a!2sPafnuncio+Padilla+53%2C+Cd.+Sat%C3%A9lite%2C+53100+Naucalpan+de+Ju%C3%A1rez%2C+M%C3%A9x.!5e0!3m2!1ses!2smx!4v1463078450117" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 social">
						<a class="sbtn-container" href="#" target="_blank">
							<div class="sbtn sbtn-fb" data-content="Like Us">
								<span></span>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 social">
						<a class="sbtn-container" href="#" target="_blank">
							<div class="sbtn sbtn-tw" data-content="Follow Us">
								<span></span>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 social">
						<a class="sbtn-container" href="#" target="_blank">
							<div class="sbtn sbtn-insta" data-content="Follow Us">
								<span></span>
							</div>
						</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 social">
						<a class="sbtn-container" href="#" target="_blank">
							<div class="sbtn sbtn-in" data-content="Like Us">
								<span></span>
							</div>
						</a>
					</div>
				</div>
				<!--/span-->
			</div>
		</div>
	</section>
