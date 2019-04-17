 <?php
		    require "../../../dbConnect.inc";
            $tutorial ="t1";

		    function test_input($data) {
	            $data = trim($data);
	            $data = stripslashes($data);
	            $data = htmlspecialchars($data);
	            return $data;
	        }

			function writeImage($answer,$choose,$name){
				if(isset($_GET[$name])){
				    if($answer == $choose) echo "<span style='font-size:30px;'>&#10004;</span>";			
				    else echo "<span style='font-size:30px;'>&#10006;</span>";	                    				
				}
				echo "<br />";
			}

            function disableButton($allID){
				echo "<script>";
                foreach($allID as $each){
                    echo "for(let i = 0;i < document.getElementsByName('$each').length;i++){";
					echo "document.getElementsByName('$each')[i].disabled = true;";
					echo "if(document.getElementsByName('$each')[i].parentNode.textContent === '".test_input($_GET[$each])."'){";
					echo "document.getElementsByName('$each')[i].checked = true;";
					echo "}";//end of if statement
					echo "}";//end of for loop
				}
				echo "</script>";
            }

			//write the quiz score to database
            function writeSocreToDatabase($point){
                $stmt=$mysqli->prepare("UPDATE USER_INFO SET $tutorial"."_score = ? WHERE username ='".$_SESSION['username']."';");
		        $stmt->bind_param("s",$point);		  
		        $point = test_input($_GET['name']);		  
		        $stmt->execute();
		        $stmt->close();
            }			
			
			if($mysqli){
				$query = "SELECT *FROM QUIZ WHERE tutorial = '$tutorial';";
				$result = $mysqli->query($query);
				if($result){
					$index = 0;
					$pair = array();
					$idContainer = array();
					$count = 0;
					while($row = $result->fetch_assoc()){
						echo "<span>".$row['question']."</span><br />"; // print the question
						
						if($row['image'] != "null")
							echo "<img src='".$row['image']."' alt='".$row['id']."' height='100' width='100' /><br />";
						
						echo "<label><input type='radio' id='".$row['firstChoose']."' name='".$row['id']."' value='".$row['firstChoose']."' />".$row['firstChoose']."</label>";
						writeImage($row['answer'],$row['firstChoose'],$row['id']);
						
						echo "<label><input type='radio' id='".$row['secondChoose']."' name='".$row['id']."' value='".$row['secondChoose']."' />".$row['secondChoose']."</label>";
						writeImage($row['answer'],$row['secondChoose'],$row['id']);
						
						if($row['thirdChoose'] != NULL){
						    echo "<label><input type='radio' id='".$row['thirdChoose']."'name='".$row['id']."' value='".$row['thirdChoose']."' />".$row['thirdChoose']."</label>";
						    writeImage($row['answer'],$row['thirdChoose'],$row['id']);
						}
						
						if($row['fourthChoose'] != NULL){
						    echo "<label><input type='radio' id='".$row['fourthChoose']."'name='".$row['id']."' value='".$row['fourthChoose']."' />".$row['fourthChoose']."</label>";
						    writeImage($row['answer'],$row['fourthChoose'],$row['id']);
						}
						echo "<br />";
						$pair[$row['id']] = $row['answer'];
                        $idContainer[$index] = $row['id'];
                        $index++;						
                        $count++;						
					}
					echo "<p id='msg' style='color:red;'></p>";
                    
					$check = true;
					foreach($idContainer as $test){
						if(!isset($_GET[$test])){
							$check = false;
							break;
						}							
					}
						
					//calculate score
                    if($check){
						disableButton($idContainer); // disable all radio buttons
						$correct = 0;
						foreach($idContainer as $val)
							if(test_input($_GET[$val]) == $pair[$val]) $correct++;	
							
						$score = $correct / $count * 100.00;
						echo "<p>Your score: $correct / $count  (".number_format($score,2)."%)</p>";
						
						/*writeSocreToDatabase(number_format($score,2));*/
					}	
				}								
			}
?>
