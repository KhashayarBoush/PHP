<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
	<nav class="navbar sticky-top navbar-dark bg-warning">
  <a class="navbar-brand" href="index.php"><button type="button" class="btn btn-outline-dark">Back</button>
</a>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Result</li>
  </ol>
</nav>
<?php
	$number1 = $_POST['Number'];
	$rep = $_POST['hm'];
	$res = 0;
	if (!$number1 || !$rep){
		echo "<div class='alert alert-danger' role='alert'>
    			<br/><hr/><strong>Empty Value is Set</strong>.
			<hr/></div>";
	}
	else{?>
  <div class="table-responsive">
  <table class="table table-bordered table-hover table-sm table-striped table-dark text-center" >
  	<thead>
      <tr>
        <th scope="col">Number</th>
        <th scope="col">Number</th>
        <th scope="col">Result</th>
      </tr>
    </thead>
    <tbody>

	<?php
	 function Mul($v1,$v2){
		global $res;
		for($i=0;$i<=$v2;$i++){
			$res = $i*$v1; ?>
		    <tr>
			<td ><?php echo "$i"; ?></td>
			<td><?php echo "* $v1"; ?></td>
			<td class="bg-warning"><?php echo "$res"; ?></td>
			 </tr>
		<?php } ?>

	<?php } ?>
	<?php Mul($number1,$rep); }?>

    </tbody>
  </table>
  </div>
</body>
</html>