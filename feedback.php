<!DOCTYPE html>
<html>
   <head>
      <title>Feedback Form</title>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	  <style>
		@import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);

		.required {
		  color: red;
		}

		body{
			margin: 0;
			font-size: .9rem;
			font-weight: 400;
			line-height: 1.6;
			color: #212529;
			text-align: left;
			background-color: #f5f8fa;
		}

		.navbar-laravel
		{
			box-shadow: 0 2px 4px rgba(0,0,0,.04);
		}

		.navbar-brand , .nav-link, .my-form, .login-form
		{
			font-family: Raleway, sans-serif;
		}

		.my-form
		{
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.my-form .row
		{
			margin-left: 0;
			margin-right: 0;
		}

		.login-form
		{
			padding-top: 1.5rem;
			padding-bottom: 1.5rem;
		}

		.login-form .row
		{
			margin-left: 0;
			margin-right: 0;
		}

		.form-group.required .control-label: after {
		  content: "*";
		  color: red;
		}

	  </style>
   </head>
   <body>

	 <main class="my-form">
	    <div class="cotainer">
	        <div class="row justify-content-center">
	            <div class="col-md-8">
	                    <div class="card">
	                        <div class="card-header">Feedback Form</div>
	                        <div class="card-body">
	                            <form method="POST" action="thankyou.php">
	                                <div class="form-group row">
	                                    <label class="col-md-4 col-form-label text-md-right">Complete Name <span class="required">*</span></label>
	                                    <div class="col-md-6">
											<input type="text" id="complete_name" class="form-control" name="complete_name" required>
	                                    </div>
	                                </div>
	                                <div class="form-group row">
	                                    <label class="col-md-4 col-form-label text-md-right">Email Address<span class="required">*</span></label>
	                                    <div class="col-md-6">
	                                        <input type="text" id="email" class="form-control" name="email" required>
	                                    </div>
	                                </div>
									
	                                <div class="form-group row">
	                                    <label class="col-md-4 col-form-label text-md-right">Program<span class="required">*</span></label>
	                                    <div class="col-md-6">
	                                    <select id="type" name="type" class="form-control" required>
	                                        <option disabled selected value="">Please select type of message</option>
											<option value="inquiry">Inquiry</option>
											<option value="feedback">Feedback</option>
											<option value="other">Other</option>
	                                    </select>
	                                    </div>
	                                </div>
									<div class="form-group row">
	                                    <label class="col-md-4 col-form-label text-md-right">Level of Satisfaction<span class="required">*</span></label>
	                                    <div class="col-md-6">
	                                        <input class="form-control" type="range" name="satisfaction_level" id="satisfaction_level" min="0" max="10" required>
	                                    </div>
	                                </div>
	                                
	                                <div class="form-group row">
	                                    <label  class="col-md-4 col-form-label text-md-right">Feedback Message<span class="required">*</span></label>
	                                    <div class="col-md-6">
	                                        <textarea id="message" class="form-control" name="message" disabled></textarea>
	                                    </div>
	                                </div>
									
	                                    <div class="col-md-6 offset-md-5">
	                                        <button type="submit" name="feedback_form" class="btn btn-primary">Submit</button>
	                                    </div>
								</form>
	                         </div>
						</div>
							
	            </div>
	        </div>
	     </div>
	</main>     
   </body>
</html>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>