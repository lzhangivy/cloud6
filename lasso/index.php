<?php
session_start();
session_name("lijingzhangcould6");
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Photoshop Tutorial</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/lassoTool.css">
    <link href="https://fonts.googleapis.com/css?family=Century+Gothic:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">

</head>

<body>

<header >

    <!--<figure id="logo"> <img src="assets/images/logo_Cloud6%20(1).png"></figure>-->

    <div id="nav">
        <ul>
            <li><a href="../index.php">home</a></li>
            <li><a href="../form/index.php">survey</a></li>
            <li><a href="../blog/index.php">blog</a></li>
            <li><a href="../quiz/index.php">quiz</a></li>
            <li><a href="../about/index.php">about</a></li>
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


<!-- <div id="content">
<h2 class="topic">Using The Lasso Tool</h2>
<p class="information">Selecting specific parts of an image to manipulate with other photoshop techniques. After bordering what you want with the lasso tool, a selection is created. This is the first step to a lot of the things you can do in Photoshop.
    <br />To move a selection, stay on the lasso tool, hover over the selection, click and move.
    <br />To deselect a selection, press [ Crtl + d ].
</p>
    <h2 class="topic">Different Selection Options</h2>
    <p class="information">There are 4 main ways to make a selection with the  lasso tool: </p>
    <ul id="tools">
        <li><img src="../assets/images/toolA.png">New Selection - creates a new selection</li>
        <li><img src="../assets/images/toolB.png">Add to Selection - adds onto existing selection</li>
        <li><img src="../assets/images/toolC.png">Subtract from Selection - delete a part of a selection</li>
        <li><img src="../assets/images/toolD.png">Intersect - create an overlap with an existing selection to select the intersection</li>
    </ul>

<h2 class="topic">Lasso Tool</h2>
    <p class="information">Use to draw freeform segments for a selection
Draw around the part you want to select.
To subtract from a selection, press Alt (Windows) or Option (Mac OS) and draw around the part you don’t want
</p>
    <figure class="inUse"><img style="width: 100%;" title="Lasso Tool" alt = "Lasso Tool" src="../assets/images/lasso.png"></figure>

    <h2 class="topic">Polygon Lasso Tool:</h2>
    <p class="information">Use to draw geometric segments for a selection
Click points around what you want to select with short line segments
Hold shift to lock to 90 and 45 degree angles
</p>
    <figure class="inUse"><img style="width: 100%;" title="polygon lasso tool" alt="polygon lasso tool" src="../assets/images/polygon.png"></figure>

    <h2 class="topic">Magnetic Lasso Tool</h2>
    <p class="information">Automatically snaps to the border edges around the area you wish to mask. Just click where you want to start and move your cursor around where you want your selection. If you want a point in a specific spot, just click again and continue.
The Magnetic Lasso Tool works best with a contrasting background.
.</p>
    <p class="information">Three options for the magnetic lasso tool: </p>
    <ul id="tools">
        <li><img src="../assets/images/width.jpg">Pixel width Photoshop looks for an edge around the pointer</li>
        <li><img src="../assets/images/contrast.jpg">The amount of contrast you need between the background and the shape you are trying to mask. Higher means more contrast needed, lower means less is needed</li>
        <li><img src="../assets/images/frequency.jpg">The rate at which the lasso tool sets points to mask the image</li>
    </ul>
    <figure class="inUse"><img style="width: 100%;" title="Magnetic Lasso Tool" alt="Magnetic Lasso Tool" src="../assets/images/magnetic.png"></figure>

      <form action="#" method="POST" class="form" onsubmit="#">

    <div id="question">
    <fieldset id="selection">
        <legend> How do you deselect a selection? </legend>
            <label for="ctrlD">Crtl D<input type="radio" id="ctrlD" name="question" value="ctrlD"/></label>

              <label for="d">D<input type="radio" id="d"
                name="question" value="d" /></label>

            <label for="shiftD">Shift D<input type="radio" id="shiftD" name="question" value="shiftD" /></label>

            <label for="altD">Alt D<input type="radio" id="altD" name="question" value="altD" /></label>

    </fieldset>
    </div>



    <input id="button" type="submit" value="Send" />
</form>


</div> -->

<div id="content">
    <?php
    require "../../../../dbConnect.inc";
    $page = "lasso";

    $sql = "SELECT content FROM cloud6 where page='$page'";
    $result = $mysqli->query($sql);

    if($result->num_rows > 0){
        //output the data for each row
        while ($row = $result->FETCH_ASSOC()) {
            echo $row['content'];
        }
    }else{
        echo "0 results, did something wrong!";
    }
    ?>

    <form id="quizForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" onsubmit="return validateForm();">

        <?php

        $tutorial = "t3";
        include "../assets/include/quiz_tutrial.php";

        ?>
        <p><input class="button" type="submit" value="Submit" /></p>
    </form>
</div>
</body>
</html>
