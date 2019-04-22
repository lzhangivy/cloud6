<?php
session_start();
session_name("lijingzhangcould6");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Photoshop Tutorial</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/colorCorrection.css">
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
        <li id="current"><a href="../color/index.php">Color Correction</a></li>
        <li><a href="../lasso/index.php">Lasso Tool</a></li>
    </ul> 
    </div>
    
    
</header>

<body>
    <div id="content">
    <h2 class="topic">How does clicking on grey color correct images automatically？</h2>
    <p class="information">If you tell photoshop this area should be grey and click on that, photoshop will look that area and knowing that is not perfectly grey it has color tint to it so what photoshop will do is it will pull down the color or add the opposite color to neutralize that gray. As a result it will neutralize the whole image.</p>
    <figure class="intro"><img style="width: 100%;" src="../assets/images/Sample%20Image%20Color%20Correction.jpg"><figcaption>Before color correct</figcaption></figure>
    <figure class="intro"><img style="width: 100%;" src="../assets/images/corrected.png">
    <figcaption>After color correct</figcaption></figure>
    <h2 class="topic">Intro to color correction by finding grey area in image</h2>
    <p class="information">In this tutorial, we will teach you how to color correct image by finding the area which closest to the gray from image. When you have an image which does not have an area which should have been gray in real life or if you have a complex image where you cannot find out that particular area, then you need to find out the area which is closest to grey and click on that by using photoshop algorithms maths and tricks.</p>



        
<h2 class="topic">Step 1:Add A New Layer</h2>
        <p class="information">With our photo open inside Photoshop, the first thing we need to do is create a new blank layer, so click the <strong>New Layer</strong> icon at the bottom of the Layers panel to create a new blank layer above the Background layer: 
</p>
        
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/newlayer.jpeg"><figcaption>Click on the New Layer icon.</figcaption></figure>
        
        <h2 class="topic">Step 2: Fill The New Layer With 50% Gray</h2>
        <p class="information">Next, we need to fill our new layer with 50% gray, the same gray we're looking for in our image. To do that, go up to the <strong>Edit</strong> menu at the top of the screen and choose <strong>Fill</strong>:</p>
        
     <figure class="inUse"><img style="width: 40%;" src="assets/images/fill.jpeg"><figcaption>Go to Edit > Fill.</figcaption></figure>
        <p class="information">This opens Photoshop's Fill dialog box. Select <strong>50% Gray</strong> from the drop-down list at the top of the dialog box:</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/50gray.jpeg"><figcaption>Set the Use option to 50% Gray.</figcaption></figure>
        <p class="information">Click OK when you're done to close out of the dialog box. Photoshop fills the new layer with gray, temporarily hiding the photo below it from view in the document window:</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/filledgray.jpeg"><figcaption>The new layer is now filled with 50% gray.</figcaption></figure>
        
        <h2 class="topic">Step 3: Change The New Layer's Blend Mode To 'Difference'
        </h2>
        <p class="information">Go up to <strong>the Blend Mode</strong> option in the top left of the Layers panel and change the blend mode for Layer 1 from Normal to <strong>Difference</strong>:
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/difference.jpeg"><figcaption>Change the blend mode for Layer 1 to Difference.</figcaption></figure>
        <h2 class="topic">Step 4: Add A Theshold Adjustment Layer
        </h2>
        <p class="information">Click on the <strong>New Adjustment Layer</strong>  icon at the bottom of the Layers panel:
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/adjustment.jpeg"><figcaption>Click on the New Adjustment Layer icon.</figcaption></figure>
        </p>
        <p class="information">Choose <strong>Threshold</strong> from down near the bottom of the list of adjustment layers:</p>
        <figure class="inUse"><img style="width: 40%;" src="../assets/images/threshold.jpeg"><figcaption>Choose "Threshold".</figcaption></figure>
        <p class="information"> Drag the white slider all the way to the left and slowly drag the triangle towards the right until you begin to see black areas appearing in your image. The first black areas that appear are the neutral gray areas you're looking for</p>
        <figure class="inUse"><img style="width: 100%;" src="../assets/images/Threshold2.jpeg"><figcaption>Drag the white slider towards the right until a small area of black appears.</figcaption></figure>
        <h2 class="topic">Step 5: Click On The Black Area With The Color Sampler Tool</h2>
        <p class="information">Select Photoshop's <strong>Color Sampler Tool</strong> from the Tools panel. By default, it's nested behind the Eyedropper Tool, so click and hold on the Eyedropper Tool for a second or two until a fly-out menu appears, then select the Color Sampler Tool from the list:</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/colorSample.jpeg"><figcaption>Select the Color Sampler Tool.</figcaption></figure>
        <p class="information">With the Color Sampler Tool selected, click on an area of black in the image to add a marker. Zoom in on the area first if it makes it easier to select your black area, as I've done here:</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/marked.jpeg"><figcaption>A small target symbol will appear at the spot you click on with the Color Sampler Tool.</figcaption></figure>
        <p class="information">Now you can delete the gray layer and the adjustment layer, this two layers are no longer needed.</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/trash.jpeg"><figcaption>Drag the top two layers onto the Trash Bin.</figcaption></figure>
        
        <h2 class="topic">Step 7: Add A Levels Or Curves Adjustment Layer</h2>
        <p class="information">Click once again on the <strong>New Adjustment Layer</strong> icon at the bottom of the Layers panel and this time, select either <strong>Levels</strong> or <strong>Curves</strong></p>
        <figure class="inUse"><img style="width: 40%;" src="../assets/images/level.jpeg"><figcaption>Choose either Levels or Curves from the list of adjustment layers.</figcaption></figure>
        
        <h2 class="topic">Step 8: Select The 'Set Gray Point' Eyedropper</h2>
        <p class="information">Click on the <strong>Set Gray Point</strong> eyedropper to select it (it's the middle of the three eyedropper icons):</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/graypoint.jpeg"><figcaption>The Set Gray Point eyedropper is the middle of the three.</figcaption></figure>

        <h2 class="topic">Step 9: Click With The Eyedropper On The Marker In The Image</h2>
        <p class="information">With the Set Gray Point eyedropper selected, simply click directly on the small marker in the image (the one we added a moment ago with the Color Sampler Tool) and Photoshop will neutralize the colors in that spot, effectively removing any color cast from the midtones.</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/neutralize.jpeg"><figcaption>Click directly on the marker to neutralize the midtones in the image.</figcaption></figure>
        <p class="information">And with that one click, any color cast in the image's midtones has been neutralized:</p>
        <figure class="inUse"><img style="width: 80%;" src="../assets/images/corrected.png"><figcaption>Any midtone color cast has been removed.</figcaption></figure>
        
        <h2 class="topic">Step 10: Remove The Marker</h2>
        <p class="information">To remove the color sampler marker from the image when you're done, with the Color Sampler Tool selected, simply click on the <strong>Clear</strong> button in the Options Bar at the top of the screen</p>
        
        <figure class="inUse"><img style="width: 100%;" src="../assets/images/clear.jpeg"></figure>

        <form id="quizForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET" onsubmit="return validateForm();">

            <?php

            $tutorial = "t2";
            include "../assets/include/quiz_tutrial.php";

            ?>
            <p><input class="button" type="submit" value="Submit" /></p>
        </form>
    </div>
    
</body>    
</html>
