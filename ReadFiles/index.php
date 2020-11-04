<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!-- Start Bootstarp TAGS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
  <!-- END Bootstarp TAGS -->

</head>
<body>

	<div class="container">
			<form action="result.php" method="get">
		<div class="row mt-4 border border-secondary px-2 py-2">
			<div class="col">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" name="rar" id="rar" value='1'>
  <label class="form-check-label" for="rar">
  		Rar Files
  </label>
	  </div>
    		</div>

    <div class="col">
      <div class="form-check">
  <input class="form-check-input" type="checkbox" name="vid" id="vid" value='2'>
  <label class="form-check-label" for="vid">
		Video Fiels
  </label>
		</div>
    </div>

    <div class="col">
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="img" id="img" value='3'>
  <label class="form-check-label" for="img">
    	Image Files
  </label>
</div>
	</div>
	<button type="submit" class="btn btn-success">Success</button>
</form>
	</div>

</body>
</html>
