<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<?php require("header.php");   ?>

	
	
	
	<div class="container-fluid">
		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<legend>Contact Us</legend>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="name"></label>
					<div class="col-md-9">
						<input id="name" name="name" type="text" placeholder="Name" class="form-control input-md"
							required="">

					</div>
				</div>

				<!-- Text input-->
				<div class="form-group">
					<label class="col-md-4 control-label" for="email"></label>
					<div class="col-md-9">
						<input id="email" name="email" type="text" placeholder="Email" class="form-control input-md"
							required="">

					</div>
				</div>


				<!-- Textarea -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="message"></label>
					<div class="col-md-9">
						<textarea class="form-control" id="message" name="message">Message...</textarea>
					</div>
				</div>

				<!-- Button -->
				<div class="form-group">
					<label class="col-md-4 control-label" for="send"></label>
					<div class="col-md-4">
						<button id="send" name="send" class="btn btn-dark">Send</button>
					</div>
				</div>

			</fieldset>
		</form>



		<iframe class="map"
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.686940556932!2d-46.64095378535631!3d-23.543759666826872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce58519cff9bc3%3A0x6aa55e7150be1971!2sGaleria%20do%20Rock!5e0!3m2!1spt-PT!2sbr!4v1571280967094!5m2!1spt-PT!2sbr"
			width="50%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>






	</div>






	<?php require("footer.php");  ?>