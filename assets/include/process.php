<?php
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	//var_dump($_POST);
    if(!empty($_POST['rating'])){
        $rating   = test_input($_POST['rating']);
    }
    else{
        $rating = "Empty";
    }
	$name  = test_input($_POST['name']);
	$groupNum = test_input($_POST['groupNum']);
	$tday    = test_input($_POST['tday']);
	$attractions    = test_input($_POST['attractions']);
	
 
//    $destination_email = "ztt7494@g.rit.edu";  // your email address
    $destination_email = "ivy66666@qq.com";

	//$destination_email = "RITISTprofessor@gmail.com, ccm6629@rit.edu";
	$email_subject = "Norway - Moore, Coleman ISTE240.01";
        $email_body = "Visitor name  $name\n";
        $email_body .= "Group Size $groupNum\n";
        $email_body .= "Date Visited=$tday\n";
        $email_body .= "Favorite Place $attractions\n";
        $email_body .= "Rating -> $rating\n";
mail($destination_email, $email_subject, $email_body);	
echo "Data Sent";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photoshop Survey</title>
    <link rel="stylesheet" type="text/css" href="../css/process.css">
    <link href="https://fonts.googleapis.com/css?family=Century+Gothic:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

</head>
    
<header >
    
    <!--<figure id="logo"> <img src="assets/images/logo_Cloud6%20(1).png"></figure>-->
    
    <div id="nav">
    <ul>
        <li><a href="../../index.php">home</a></li>
        <li><a href="../../form/index.php">survey</a></li>
        <li><a href="../../blog/index.php">blog</a></li>
        <li><a href="../../quiz/index.php">quiz</a></li>
        <li><a href="#">about</a></li>
    </ul> 
    </div>
    
    <div id="contentNav">
    <ul>
        <li><a  href="../../basics/index.php">Photoshop Basics</a></li>
        <li><a href="../../color/index.php">Color Correction</a></li>
        <li id="current"><a href="../../lasso/index.php">Lasso Tool</a></li>
    </ul> 
    </div>
    
    
</header>    
    
<body>
<h3>Thank you for taking the time out
    of your day to complete our survey it will help our site improve for future guests.</h3>
    
    <figure>
    <img src="../images/thankYou.png" title="cloud6" alt="cloud6" style="width: 100%;">
    </figure>

</body>
</html>