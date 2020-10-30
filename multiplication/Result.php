<?php

################################Start

	$number1 = $_POST['Number'];
	$rep = $_POST['hm'];

	$res = 0;

	function Mul($v1,$v2){
		global $res;
		for($i=0;$i<=$v2;$i++){
			$res = $i*$v1;
			echo "Reslut --> ";
			echo "| $i | * | $v1 | ==> | $res |";
			echo "<hr/>";
		}

	}
	
	Mul($number1,$rep)

/*
	for($i=0;$i<=$rep;$i++){
		$res = $i*$number1;
		echo "Reslut --> ";
		echo "| $i | * | $number1 | ==> | $res |";
		echo "<hr/>";
	}
*/
####################################END


####################################Start
	// print $_POST Arrayes
	/*
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	echo "</hr></hr>";
	*/
#####################################END

	/*
	$counter = 0;
	$n = 10;
	$k = 0;
	$divi = 0;

	while ($counter <= $n) {
		   	$num = $counter;
		   	#echo "| counter ==> $counter |";
		   	if($counter < $n + 1 ){
		   		$divi = $num*$n;
		   		echo " {$n} * {$num} -- "."this is Multi Res : "." | "."$divi";
		   		echo "<hr/>";
		   	}
	    #if ($counter > 10 ){
	     #   echo "<hr/><hr/><hr/>"."End of Number !!!"."<hr/><hr/><hr/>";
	    #return;
	    #}
		   $counter++;
		   }
		   */
?>