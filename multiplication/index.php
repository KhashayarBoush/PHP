<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dvider</title>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
</head>
<body>
  <nav class="navbar sticky-top navbar-dark bg-warning">
  <a class="navbar-brand" href="index.php"><h6 class="text-capitalize text-dark">Wellcome</h6></a>
</nav>

<div class="alert alert-dark" role="alert">
    <strong>Well done!</strong> You can use This App .
</div>

<!--

    <div class="container">
      <form class="border bg-light border-dark mb-4 py-1 px-1 rounded">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">Sign in</button>
    </div>
  </div>
</form>
  </div>
   ------------------------->
	<div class="container">
    <div class="row">
      <div class="col-6">
		
		<form action="Result.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">number</label>
      <input type="text" name="Number" class="form-control mb-2" id="inlineFormInput" placeholder="Number">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">HowMany</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>*</b></div>
        </div>
        <input type="text" name="hm" class="form-control" id="inlineFormInputGroup" placeholder="How Many ? e.x : 10">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </div>
  </div>
</form>
	</div>
  <div class="col-6">
    <form action="result-sum.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">number1</label>
      <input type="text" name="number1sum" class="form-control mb-2" id="inlineFormInput" placeholder="Number 1">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">number2</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>+</b></div>
        </div>
        <input type="text" name="number2sum" class="form-control" id="inlineFormInputGroup" placeholder="Number 2">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>
</div>

<div class="container mt-5">
    <div class="row">
 <div class="col-6">
    <form action="result-inc.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">number1</label>
      <input type="text" name="number1inc" class="form-control mb-2" id="inlineFormInput" placeholder="Number 1">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">number2</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>-</b></div>
        </div>
        <input type="text" name="number2inc" class="form-control" id="inlineFormInputGroup" placeholder="Number 2">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </div>
  </div>
</form>
  </div>
  <div class="col-6">
    <form action="result-div.php" method="post">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">number1</label>
      <input type="text" name="number1div" class="form-control mb-2" id="inlineFormInput" placeholder="Number 1">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">number2</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><b>%</b></div>
        </div>
        <input type="text" name="number2div" class="form-control" id="inlineFormInputGroup" placeholder="Number 2">
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-dark mb-2">Submit</button>
    </div>
  </div>
</form>
  </div>
</div>
</div>
</body>
</html>

