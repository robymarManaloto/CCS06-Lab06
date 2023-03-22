<!DOCTYPE html>
<html>
   <head>
      <title>Enter Data</title>
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
		 <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		   // collect value of input field
		  $name = $_POST['complete_name'];
		  $birth = $_POST['birthdate'];
		  $email = $_POST['email'];
		  $program = $_POST['program'];
		  $color = $_POST['favorite_color'];
		  $level = $_POST['superpower_level'];
		?>
			<div class="cotainer">
				<div class="row justify-content-center">
					<div class="col-md-8">
							<div class="card">
								<div class="card-header">Profile</div>
								<div class="card-body">						
									
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Complete Name</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $name;?></p>
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Birth</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $birth;?></p>
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Email</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $email;?></p>
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Program</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0"><?php echo $program;?></p>
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0"> Favorite Color</p>
									  </div>
									  <div class="col-sm-9">
										<p class="text-muted mb-0" color="<?php echo $color;?>"><?php echo $color;?></p>
									  </div>
									</div>
									<hr>
									<div class="row">
									  <div class="col-sm-3">
										<p class="mb-0">Superpower Level</p>
									  </div>
									  <div class="col-sm-9">
										<input class="form-control" type="range"  min="1" max="1000000" step="5000" value="<?php echo $level;?>" required disabled>
									  </div>
									</div>
								 </div>
							</div>
								
					</div>
				</div>
			 </div>
			<br>
		<?php  
		}
		?>
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Enter Data</div>
                        <div class="card-body">
                            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                                <div class="form-group row">
                                    <label class=" col-md-4 col-form-label text-md-right">Complete Name <span class="required">*</span></label>
                                    <div class="col-md-6">
										<input type="text" id="complete_name" class="form-control" name="complete_name" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-4 col-form-label text-md-right">Birthdate<span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="date" id="birthdate" class="form-control" name="birthdate" required>
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
                                    <select id="program" name="program" class="form-control" required>
                                        <option disabled selected value="">Please Select a Program</option>
										<option value="BSCS">B.S. Computer Science</option>
										<option value="BSIT">B.S. Information Technology</option>
										<option value="BSIS">B.S. Information Systems</option>
                                    </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Favorite Color<span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input type="color" id="favorite_color" class="form-control" name="favorite_color" required>
                                    </div>
                                </div>
								
								<div class="form-group row">
                                    <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Superpower Level<span class="required">*</span></label>
                                    <div class="col-md-6">
                                        <input class="form-control" type="range" name="superpower_level" id="superpower_level" min="1" max="1000000" step="5000" required>
                                    </div>
                                </div>
                   
                                    <div class="col-md-6 offset-md-5">
                                        <button type="submit" class="btn btn-primary">
                                        Submit
                                        </button>
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