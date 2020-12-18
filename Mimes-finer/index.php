<?php
error_reporting(E_ALL & ~E_NOTICE);
$url = $_SERVER['PHP_SELF'];

$dir = __DIR__.DIRECTORY_SEPARATOR."Data".DIRECTORY_SEPARATOR;

function Checkk_file($file){
    $i = 0;
if(file_exists($file)){
    if(is_file($file)){
        $size = filesize($file);
        $filetype = 'File';
        echo "<ul>";
        echo "<li style='list-style:circle;'>\t$filetype : file is <span style='color:#1D9;'>Exsit</span> ==> <br>$file <span style='color:#D4D;'>($size'byte's)</span></li><hr/>";
        echo "</ul>";
    }
    else{
        $filetype = 'Directory';
        echo "$filetype : file is Exsit ==> $file";
    }
}
else{
    echo "File Not Found <br>";
}
}
$item = $dir."text.txt";
$item2 = $dir."p11.png";
Checkk_file($item);
Checkk_file($item2);

?>
<html>
<header>
</header>

    <body>
<hr/>
        <form action="id.php" method="GET"> 
            <input type="text" placeholder="ID" name="id">
            <input type="submit"  value="submit">
        </form>
    </body>
</html>