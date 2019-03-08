<!DOCTYPE html>
<html>
<head>
	<title>App Chatting</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
halo
<div class="container">
	<div class="row">
		<div class="col-md-6 m-auto">
			<?php
				foreach ($chat as $list ) {
					# code...
					echo " <span><b>$list->Id_Konsumen</b></span> - <span>$list->Message</span>";
				}
			?>
			<div id="pesan"></div>
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Your Id">
			</div>
			<div class="form-group">
				<textarea name="message" id="message" class="form-control" placeholder="Your message">
					
				</textarea> 
			</div>
			<div class="form-group">
				<input type="button" value="Send" class="btn btn-primary btn-block">
					
				</textarea> 
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	
</script>
</body>
</html>