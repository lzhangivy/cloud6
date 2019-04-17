<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photoshop Tutorial</title>
    <script  src="../assets/js/jsValidator.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/form.css">
    <link href="https://fonts.googleapis.com/css?family=Century+Gothic:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    

</head>

<header >
    
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
        <li><a  href="../basics/index.php">Photoshop Basics</a></li>
        <li><a href="../color/index.php">Color Correction</a></li>
        <li id="current"><a href="../lasso/index.php">Lasso Tool</a></li>
    </ul> 
    </div>
    
</header>

<body>
    <div id="content">
    <form action="process.php" method="POST" class="wrapper"
         onsubmit="return validateForm();">
	
	
	
	<h1>          </h1>
	<h3>Please fill all text fields if possible to improve visits for those in the future. &nbsp;<span class="rule">*</span>&nbsp; Means required field.</h3>

	  <div id="inputName">
        <p>Your Name :<br/>
        <input id="name" type="text" name="name" placeholder="Required" /><span class="astrix"> * </span>
		</p>
	  </div><!-- end of inputName -->

        

	<div class="inputState">
	<p>How Many tutorial did you complete<br />
	<select style="width:5em;" name="groupNum" size="1" id="group">
		<option value="Select">Select</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		
		
	</select><span class="astrix"> * </span></p>
	</div>

	  <p>&nbsp;</p>
	  <div id="inputVisit">
		<p>When did you last use our site?  &nbsp;&nbsp;Remember no time travelers allowed so check those dates</p>
  		<input type="date" value="2019-01-01" name="tday" id="tday" /><span class="astrix"> * </span>
	    <p id="dateFeedback"></p>
	  </div>

    	<p>What was your favorite Tutorial</p> <!-- radio buttons for what was their favoite place -->
    	<div class="indent">
        <fieldset>
          <legend> Places  </legend>
	    	<label for="place"> Types of Files: <input type="radio" id="place" name="attractions" value="Types of Files"/></label>
			<label for="place"> How to create a file: <input type="radio" id="place" name="attractions" value="How to create a file"/></label>
			<label for="place"> Photoshop basics: <input type="radio" id="place" name="attractions" value="Photoshop basics"/></label>
			<label for="place"> The quiz at the end: <input type="radio" id="place" name="attractions" value="The quiz at the end"/></label>			
			<label for="place"> None of Your Dam Business: <input type="radio" id="place" name="attractions" value="private" /></label>
        </fieldset>
  		</div> <!-- favorite activity end -->

        
		
        <div class="inputState">
        <p>How would you rate your visit to our site and the tutorials you used out of 10</p>
        <select style="width:5em;" name="rating" size="1" id="rate">
            <option value="Select">Select</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

        </select><span class="astrix"> * </span>
        </div>
    
		<input type="submit" class="button" value="Send" /> &nbsp;
        <input type="reset"  class="button" value="Reset" />
		
</form>
    </div>
</body>    
</html>
