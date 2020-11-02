<?php


############ Start Create Session ###############
  session_start();
  setcookie(session_name(),session_id(),time() + 60);

  /*
  if (!isset($_GET['checkcookie'])){

    header('Location: index.php?checkcookie');

  }
  */
  ############ END Create Session ###############

 ############ Start AUTH Statmnet ###############
  if(isset($_POST['username']) && !empty($_POST['username'])){
    $username = $_POST['username'];
    //$email = $_POST['email'];
    //('username',$username,time() + 20);
    //setcookie('email',$email,time() + 60);
    $_SESSION['username'] = $username;
    //$_COOKIE['email'] = $email;
    header('Refresh: 1; url=index.php');
    echo "<div class='alert alert-success' role='alert'>
    <strong>Well done!</strong> You Are Login NOW .
    <div class='spinner-border' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
    </div>";
  }
 ############ END AUTH Statmnet ###############

 ############ Start Session Statmnet For AUTH ###############

  if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    //$email = $_COOKIE['email'];
    $back = true;
    $title="Wellcome $username";
  } else{
    $username = '';
    //$email = '';
    $back = false;
    $title = "Wellcome Guest";
  }
   ############ END Session Statmnet For AUTH ###############

 ############ Start LOGOUT AUTH With END OF SESSION ###############

  if (isset($_POST['Logout'])) {
    session_unset();
    header('Refresh: 1; url=index.php');
    echo "<div class='alert alert-danger' role='alert'>
    <strong>Well done!</strong> You Are LogOUT NOW .
    <div class='spinner-border' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
    </div>";
  }
   ############ END LOGOUT AUTH With END OF SESSION ###############

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Start META TAGS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- END META TAGS -->

  <!-- Start Title TAGS -->
	<title>
    <?php echo "$title" ?> 
  </title>
  <!-- END Title TAGS -->

  <!-- Start Bootstarp TAGS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
  <!-- END Bootstarp TAGS -->
</head>

<body>
<!-- START Crate Form if User login -->
  <?php if($back): ?>
  <nav class="navbar sticky-top navbar-dark bg-warning">
  <a class="navbar-brand" href="index.php"><h6 class="text-capitalize text-dark">Wellcome <?php echo "<h6 class='text-dark'><strong>Hola Hola { $username } !! </strong></h6>"; ?> </h6></a>
  <form action="index.php" method="post">
    <input type="submit" name="Logout" value="Logout">
  </form>
</nav>
<div class="alert alert-success" role="alert">
    <strong>Well done!</strong> You Are Logedin .
</div>
<!-- END Crate Form if User login -->

<!-- START Crate Form if User NOT LOGIN -->
<?php else: ?>
<nav class="navbar sticky-top navbar-dark bg-warning">
  <a class="navbar-brand" href="index.php"><h6 class="text-capitalize text-dark">Wellcome</h6></a>
</nav>
<div class="alert alert-danger" role="alert">
    <strong>Well done!</strong> You can Log in .
</div>
<div class="container">
      <form method="post" class="border bg-light border-dark mb-4 py-1 px-1 rounded">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-6">
      <input type="text" name=username class="form-control" id="inputPassword3">
    </div>
  </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-warning">LogIn</button>
    </div>
  </div>
</form>
  </div>
<?php endif; ?>
<!-- END Crate Form if User NOT LOGIN -->

<!-- START Crate Form For Multiplation * -->
<div class="container">
    <div class="row">
      <div class=" border-left border-right border-dark  py-2 col-6">
		
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
<!-- END Crate Form For Multiplation * -->

<!-- START Crate Form For Sum Numbers + -->
	</div>
  <div class="col-6 border-right border-dark  py-2 ">
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
<!-- END Crate Form For Sum Numbers + -->

<!-- START Crate Form For Incremnt Numbers - -->
<div class="container mt-5">
    <div class="row">
 <div class="col-6 border-left border-right border-dark  py-2 ">
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
  <!-- END Crate Form For Incremnt Numbers - -->

  <!-- START Crate Form For Module Numbers % -->
  <div class="col-6 border-right border-dark  py-2 ">
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
    <!-- END Crate Form For Module Numbers % -->
</div> <!-- END OF ROW Div-->
</div> <!-- END OF Container Div-->
</body>
</html>

