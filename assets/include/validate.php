<?php
        // dynamically create javascript for validation
        echo "<script>";
	    $func = 0;
		foreach($idContainer as $name){//create function for each question
		   $func++;
		   echo "function a$func(){";
		   echo "for(let i = 0;i < document.getElementsByName('$name').length;i++){";
		   echo "if(document.getElementsByName('$name')[i].checked){";
		   echo "return true;}";
           echo "}";//end of for loop
		   echo "return false;";
		   echo "}";//end of function
		}// end of foreach
						
		$returnVal = "";
		for($n = 1;$n <= sizeof($idContainer);$n++){
            if(!($n == sizeof($idContainer)))
				$returnVal .= "a$n() && ";
			else
				$returnVal .= "a$n()";			
        }		
		
		echo "function validateForm(){";
		echo "if($returnVal){return true;}";
		echo "else{document.getElementById('msg').innerHTML = 'Please complete all the questions.';return false;}";
		echo "}";//end of validateForm function
		echo "</script>";
?>