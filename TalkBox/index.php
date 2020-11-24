<?php 
$url = $_SERVER['PHP_SELF'];
$time = date("[ Y/M/d H:i ]");
session_start();
setcookie(session_name(),session_id(),time() + 60);

if(isset($_POST['user']) && !empty($_POST['user'])){
    $user_name = $_POST['user'];
    $_SESSION['user_name'] = $user_name;
    header("Refresh: 1; url=$url");
}

if(isset($_SESSION['user_name'])){
    $user_name = $_SESSION['user_name'];
    $title="Wellcome $user_name";
    //$email = $_COOKIE['email'];
    $back = true;
} 
else{
    $user_name = '';
    //$email = '';
    $back = false;
    $title = "Wellcome Guest";
  }

  if (isset($_POST['Logout'])) {
    session_unset();
    header("Refresh: 1; url=$url");
  }

$dir = __DIR__;

$filename = $dir."/"."Links.data";
//echo "$filename";
//chmod("Links.data", 0777);

?>

<!doctype html>

<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    
    <style>
        body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0;
            padding: 0;
        }
        
        form{
            padding: 0.2%;
        }
        
        form input{
            padding: 0.4%;
            margin : 0.6%;
        }
        
        form label{
            background-color: lightyellow;
            color: black;
            border-bottom:1px solid black ;
            border-radius: 5px;
            padding: 0.5%;
            margin : 0.5%;
        }
        .main-form{
            margin: 0 auto;
            padding: 1%;
            border-radius: 5px;
            border: 1px solid lightyellow;
        }
        
        ul{
            list-style: none;
            margin: 1%;
        }
        
        ul li{
            font-family: sans-serif;
            list-style: none;
            padding: 1%;
            margin: 1% ;
            
        }
        
        a{
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-decoration: none;
            color: black;
        }
        h3{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: lightyellow;
        }
        h4{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: lightyellow;
        }
        p{
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            color: lightyellow;
        }
        
        .main-form-input{
            border: 1px solid lightyellow;
            border-radius: 5px;
            padding: 1%;
            background-color: whitesmoke;
            color: black;
            width: 90%;
            overflow: hidden;
            margin : 2%;
        }

        .main-form-input-submit{
            background-color: burlywood;
            border-radius: 5px;
            padding: 2%;
            color: black;
            border: 1px solid black;
            margin-left: 25%;
            width: 50%;
            
        }

        .h3-form {
          text-align: center;
          border: 1px solid lightyellow;  
          border-radius: 5px;
          padding: 0.8%;
        }

        .main-h4{
            color: #d82;
            margin: 0 auto;
            text-align: center;
        }

        .main-p{
            border-top: 5px solid #d82;
            padding: 0.5%;
            text-align: center;
        }

        .top-header{
            border: 5px outset black;
            padding: 0.5%;
            background-color: #223c53;
            width: 95%;
            height: 50px;
            margin: 0 auto;
            margin-top: 0.2%;
            border-radius: 10px;

        }
        
        .top-navbar{
            width: 100%;
            background-color: #223c53;
            border-radius: 10px;

        }

        .ul-navbar{
            float: right;
            background-color: #223c53;
            margin: 0 auto;
            width: 330px;
            border-radius: 10px;

        }

        .li-navbar{
            display: inline-block;
            background-color: #223c53;
            border: 1px double lightyellow;
            border-radius: 5px;
            padding: 3%;
            text-align: center;
            border-radius: 10px;
            

        }
        .a-navbar{
            display: block;
            background-color: #223c53;
            color: lightyellow;
            padding: 4%;
            text-align: center;
            border-radius: 10px;

        }
        .main-data{
            width: 40%;
            height: auto;
            margin-top: 5.5%;
            margin-left: 50%;
            border: 5px  inset black;
            padding: 5px;
            position:  absolute;
            border-radius: 10px;

        }
        .main-section{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0 auto;
            /*background-color: black;*/
            border: 5px outset black;
            padding: 5px;
            color: whitesmoke;
            background-color: #223c53;
            opacity: 0.9;
            border-radius: 10px;

        }
        .link-divbox{
            width: 40.5%;
            height: 75.5%;
            margin-top: 1%;
            margin-left: 3%;
            border: 5px  inset black;
            padding: 15px;
            position:  absolute;
            overflow-x: hidden;
            border-radius: 10px;
            scroll-behavior: smooth;
            border-radius: 10px;

        }
        .get-link-section{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            margin: 0 auto;
            /*background-color: black;*/
            border: 5px outset black;
            padding: 5px;
            color: whitesmoke;
            background-color: #223c53;
            opacity: 0.9;
            width: 95%;
            border-radius: 10px;
            height: auto;
            text-justify: auto;
            text-align: justify;
            margin-bottom: 1%;
            

        }

        footer{
            width: 95%;
            height: 80px;
            position: absolute;
            background-color: black;
            color: whitesmoke;
            margin: 34% 10% 1% 2%;
            border: 5px inset #d82;
        }
        .main-footer{
            text-align: center;
            text-justify: auto;
            color: #d82;
            opacity: 0.9;
            border-radius: 10px;
        }
        .main-footer-span{
            margin-top: 10px;
        }
        .sucsess{
            font-family: Arial, Helvetica, sans-serif;
            padding:2px;
            background-color: #2F0;
            color: black;
            border: 1px inset #d82;
            font-size: 10px;

        }
        .Warning{
            font-family: Arial, Helvetica, sans-serif;
            padding:2px;
            background-color: #F00;
            color: black;
            border: 1px inset #FFF;
            font-size: 10px;
        }
        .massage{
            text-align: justify;
            text-justify: auto;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        .logout-btn{
            padding: 0.4%;
            width: 8%;
            height: 40px;
            text-align: center;
            position: absolute;
            float: left;
            background-color: transparent;
            border-style: none;
        }
        .logout-btn-input{
            display: block;
            width: auto;
            height: auto;
            background-color: #d82;
            padding: 20%;
            color: whitesmoke;
            border-radius: 10px;
        }
    </style>

    <title> <?php echo"$title" ?> </title>
</head>

<body>
    <div>
        <header class="top-header">
            <nav class = "top-navbar">
                <ul class="ul-navbar">
                    <li class="li-navbar"><a class="a-navbar" href="#">Home</a></li>
                    <li class="li-navbar"><a class="a-navbar" href="#">Links</a></li>
                    <li class="li-navbar"><a class="a-navbar" href="#">Files</a></li>
                    <li class="li-navbar"><a class="a-navbar" href="#">Login</a></li>
                </ul>
                <form class="logout-btn" method="post" action= "<?php $url ?>">
                        <li style=" border-style:none;" class="li-navbar"><input class="logout-btn-input" type="submit" name="Logout" value="Logout"></li>
                    </form>
            </nav>
        </header>
        <main class="main-data">
            <section class="main-section">
                <h3 class="h3-form"> Talk Box </h3>
                <form class="main-form" action="<?php $url ?>" method="post">
                
                <input class="main-form-input" type="text" name="link" placeholder="Massage">
                <br>
                <input class="main-form-input"  type="text" name="user" placeholder="Username" value=
                "<?php 
                if(isset($_SESSION['user_name'])){
                        $user_name = $_SESSION['user_name'];
                        echo "$user_name";
                }
                else {
                    echo "User Gust";
                } 
                ?>"require>
                
                <input class="main-form-input-submit" type="submit" name="submit-link-form" value="Send">
                </form>
                <br>
                <h4 class="main-h4">Note</h4>
                <p class="main-p">  First Set UserName For Knowing You </br>
                <?php 

                                   
                    if(file_exists($filename)){
                        if(isset($_POST['link']) && !empty($_POST['link']) && isset($_POST['user']) && !empty($_POST['user'])){
                            $flag = 1;
                            $username = $_POST['user'];
                            $link ="$username"." : ".$_POST['link']." $time"."\n"."<hr/>";
                            echo "<span class='sucsess'> Status : Send</span>";
                            $fp = fopen("$filename",'w');
                            fwrite($fp, "$link");
                            fclose($fp);
                        }
                        else{
                            $flag = 0;
                            $err = "Status : Username || Massage || Empty";
                            echo "<span class='Warning'> $err </span>";
                        }
                    }else{
                        echo "LINK File Not Exist";
                    }
                    
                ?> 
                </p>
            </section>
        </main>

        <div class="link-divbox">
            <section class="get-link-section">
            <h3 class="h3-form"> Link Box </h3>
            
                     <?php 
                        if(!file_exists($filename)){
                            echo "LINK File Not Exist";
                        }else{
                            $data = file_get_contents($filename);
                            echo "<p class='massage'> $data </p>"; 
                        }
                    ?>
                 
            </section>
        </div>
<!--
        <footer class="main-footer">
                       <p class="main-p main-footer-p"> <span class="main-footer-span">Tank You For Use Us Service.</span> </p>
        </footer>
                    -->
    </div>
</body>

</html>