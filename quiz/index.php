<?php
//    $path = './';
    //$page = 'Pizza Order';
//    require $path.'../../../../dbConnect.inc';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Photoshop Tutorial</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Century+Gothic:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <script  src="../assets/js/RegistrationVerify.js"></script>
    <style type="text/css">
        form div
        {
            margin: 1em;
        }
        form div label
        {
            float: left;
            width: 10%;
        }
        form div.radio {
            float: left;
        }
        .clearfix {
            clear: both;
            text-align: center;
        }
    </style>

</head>
<body>
<header>

    <!--<figure id="logo"> <img src="assets/images/logo_Cloud6%20(1).png"></figure>-->

    <div id="nav">
        <ul>
            <li><a href="../index.php">home</a></li>
            <li><a href="../form/index.php">survey</a></li>
            <li><a href="../blog/index.php">blog</a></li>
            <li><a href="../quiz/index.php">quiz</a></li>
            <li><a href="#">about</a></li>
        </ul>
    </div>

    <div id="contentNav">
        <ul>
            <li id="current"><a  href="../basics/index.php">Photoshop Basics</a></li>
            <li><a href="../color/index.php">Color Correction</a></li>
            <li><a href="../lasso/index.php">Lasso Tool</a></li>
        </ul>
    </div>


</header>
    <div id="content">

            <?php

            $pageSet =empty($_GET['page']);

            if ($pageSet != 1){
                $page = $_GET['page'];

                if($page == "register"){
                    include "../assets/include/register.php";
                }
            }else{

                include "../assets/include/login.php";
            }

            ?>


    </div>
    </body>
</html>



