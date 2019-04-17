<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8" />
	 <title>Comment</title>
	 <link rel="stylesheet" type="text/css" href="../assets/css/comments.css" />
	 <script src="../assets/js/comments.js"></script>

</head>
<body>
    <header>
	      <div id="text">  
	         <p>Please Leave a Comment</p>
		  </div>
	</header><!-- end of header -->
<div id="form">	
  <form id="commentForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" onsubmit="return validateForm();">
    <p>Name:<input id="name" type="text" name="name" placeholder="Full name" /><p>
	<p class="msg" id="nameMsg"></p>
    <p>Comment:<br /><textarea form="commentForm" id="comment" name="comment" rows="7" cols="40" placeholder="Write your comment"></textarea></p>
	<p class="msg" id="commentMsg"></p>
    <p><input type="submit" value="Submit Comment" /></p>	
	
  </form>
</div><!-- end of form -->

<div id="commentContainer">
 <?php
   
	require "../../../dbConnect.inc";
	
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	
	if ($mysqli) {
	  if (isset($_GET['name']) && isset($_GET['comment'])) {
	    if( $_GET['name']!='' && $_GET['comment']!='' ){
		  
		  $stmt=$mysqli->prepare("INSERT INTO COMMENTS (name,comment) VALUES (?,?)");
		  $stmt->bind_param("ss",$name,$comment);
		  
		  $name = test_input($_GET['name']);
		  $comment = test_input($_GET['comment']);
		  
		  $stmt->execute();
		  $stmt->close();
		  
		  	  //get contents of table and send back...
          $sql = 'SELECT name, comment from COMMENTS';
	      $res=$mysqli->query($sql);
		  echo "<div><h2>Comment Section</h2></div>";
	      echo "<table id='t1' style='text-align: left;width: 60%;'>";
	      echo "<tr><th>Name</th><th>Comment</th></tr>";
	      if($res){
		    while($row = $res->fetch_assoc())//read data 
			    echo "<tr><td>".$row['name']."</td><td>".$row['comment']."</td></tr>";		
	      }
	      echo "</table>";
		  
		  //write css for table 
		  
		  echo "<style> table#t1 tr:nth-child(even){background-color:#eee;}</style>";
		  echo "<style> table#t1 tr:nth-child(odd){background-color:white;}</style>";
		  echo "<style> table,th,td{border: 1px solid black;border-collapse: collapse;}</style>";
	    }//end of if to make sure data is sent using $_GET
      }//end of isset	  
	}
	
?>
</div><!-- end of comment -->
</body>
</html>
