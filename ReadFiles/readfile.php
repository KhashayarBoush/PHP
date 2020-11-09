<?php 
	
	
	//echo "<pre>";
	//	print_r($_GET);
	//echo "</pre>";
	#echo "$url";
	
	if(!function_exists("checker")){
		function checker($paramet,$default = null){
			if(isset($_GET["$paramet"])){
				$value = $paramet;
				if ($_GET["$value"] === "1") {
					# code...
					echo "jd";
					echo "<br>";
				}
				else{
					if ($_GET["$value"] === "2") {
					# code...
					header("Location: timer.php");
					}
				}

			}
			else{
				$value = $default;
			}

			return $value;
		}
	}else{
		echo "Function is Exist.";
	}
	$timer = checker('val', 0);
	$jd = checker('val' , 0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="readfile.php" method="get">
		<input type="radio" value="1" name="val" id="jd">
		<label for="jd">jd</label>
		<br>
		<input type="radio" value="2" name="val" id="timer">
		<label for="timer">timer</label>
		<br>
		<button type="submit" value="submit">Submit</button>
	</form>
<!--
	<?php if ($rar): ?>
		<h1>Rar</h1>
	<?php endif ?>
	<?php if ($jd): ?>
		<h1>jd</h1>
	<?php endif ?>
	<?php if (!$rar && !$jd): ?>
		<h1>Bad Input</h1>
	<?php endif ?>
-->
</body>
</html>

