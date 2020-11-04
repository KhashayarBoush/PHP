<?php
	function checker($paramet,$default = null){
		
		if(isset($_GET["$paramet"])){
			$value = $_GET["$paramet"];
		}else{
			$value = $default;
		}
		return $value;
	} 
$rar = checker('rar', 0);
$vid = checker('vid', 0);
$img = checker('img', 0);
?>
<?php if($rar){
	header("Location: rar.php");
		die();
}
elseif($vid){
	header("Location: rar.php");
		die();
} 
elseif($img){
	header("Location: rar.php");
		die();
} 
else{
	echo"Sorry;";
	
}
?>