<?php
require "../../../../dbConnect.inc";


class Question{
    private $question;
    private $answer;
    private $id;
    private $imageURL;
    private $position;
    private $options = array();
    public function __construct($question,$answer,$id,$arr=array(),$url,$position){
        $this->question = $question;
        $this->answer = $answer;
        $this->id = $id;
        $this->imageURL = $url;
        $this->position = $position;
        for($i = 0;$i < sizeof($arr);$i++){
            $this->options[$i] = $arr[$i];
        }
        $this->randomize();

    }

    private function randomize(){	// randomize options
        $rand = rand(4,7);
        for($i = 0;$i < $rand;$i++){
            $rand1 = rand(0,$this->getSize() - 1);
            $rand2 = $rand1;
            while($rand2 == $rand1){
                $rand2 = rand(0,$this->getSize() - 1);
            }
            $temp = $this->options[$rand1];
            $this->options[$rand1] = $this->options[$rand2];
            $this->options[$rand2] = $temp;
        }
    }

    private function getSize(){
        return sizeof($this->options);
    }

    private function printImage(){
        if($this->imageURL != "null")
            echo "<img src='".$this->imageURL."' alt='".$this->id."' height='100' width='100' /><br />";
    }

    public function writeQuestion(){
        $count_option=1;

        echo "<span>".$this->position.". ".$this->question."</span><br />"; // print the question
        $this->printImage();
        foreach($this->options as $choose){
            if ($count_option == 1){
                $letter = "A";
            }elseif ($count_option==2){
                $letter = "B";
            }elseif ($count_option==3){
                $letter = "C";
            }else{
                $letter = "D";
            }
            echo "<label><input type='radio' name='".$this->id."' value='".$choose."' />".$letter.$choose."</label> <br />";
            $count_option+=1;
        }
        echo "<br />";
    }

    public function writeValidateQuestion(){
        $count_option=1;

        echo "<span>".$this->position.". ".$this->question."</span><br />"; // print the question
        $this->printImage();

        foreach($this->options as $choose){
            if ($count_option == 1){
                $letter = "A";
            }elseif ($count_option==2){
                $letter = "B";
            }elseif ($count_option==3){
                $letter = "C";
            }else{
                $letter = "D";
            }
            echo "<label><input type='radio' name='".$this->id."' value='".$choose."' />".$letter.$choose."</label>";

            if($choose == $this->answer) echo "<span style='font-size:30px;color:red;'>&#10004;</span>";
            else echo "<span style='font-size:30px;color:red;'>&#10006;</span>";

            echo "<br />";
            $count_option+=1;

        }

        $this->disableButton($this->id);
    }

    private function disableButton($each){
        echo "<script>";
        echo "for(let i = 0;i < document.getElementsByName('$each').length;i++){";
        echo "document.getElementsByName('$each')[i].disabled = true;";
        echo "if(document.getElementsByName('$each')[i].parentNode.textContent === '".$_GET[$each]."'){";
        echo "document.getElementsByName('$each')[i].checked = true;";
        echo "}";//end of if statement
        echo "}";//end of for loop
        echo "</script>";
    }

    public function getAnswer(){return $this->answer;}
    public function getID(){return $this->id;}

}// question class

//write the quiz score to database
function writeSocreToDatabase($point)
{
//    var_dump($_SESSION['name']);

    $stmt = $mysqli->prepare("UPDATE USER_INFO SET $tutorial" . "_score = ? WHERE username ='" . $_SESSION['name'] . "';");
    $stmt->bind_param("d", $point);
    $stmt->execute();
    $stmt->close();

}

//if(session_status() == PHP_SESSION_NONE)
//    session_start();
//    session_name("lijingzhangcould6");

//if()
if(empty($_GET)){	// read database
    if($mysqli){
        if($tutorial != 'final') $query = "SELECT *FROM QUIZ WHERE tutorial = '$tutorial' ORDER BY RAND() LIMIT 2;";
        else $query = "SELECT *FROM QUIZ WHERE tutorial IN('t1','t2','t3') ORDER BY RAND();";
        $result = $mysqli->query($query);
        if($result){
            $idContainer = array();
            $count = 0;
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $temp = array();
                $temp[0] = $row['firstChoose'];
                $temp[1] = $row['secondChoose'];
                if($row['thirdChoose'] != null)
                    $temp[2] = $row['thirdChoose'];
                if($row['fourthChoose'] != null)
                    $temp[3] = $row['fourthChoose'];
                $q = new Question($row['question'],$row['answer'],$row['id'],$temp,$row['image'],$count + 1);//construct new class
                $q->writeQuestion();
                $_SESSION[$count."a"] = serialize($q);
                $idContainer[$count] = $row['id']; // for validation
                $count++;
            }
            $_SESSION['count'] = $count;
            echo "<p id='msg' style='color:red;'></p>";


            $result->free();
        }//end of result
    }//end of sql
}else{
    $QuestionNumber = 0;
    $correct = 0;
    $count = $_SESSION['count']; // to count number of question
    for($i = 0;$i < $count;$i++){
        $q = unserialize($_SESSION[$i."a"]);
        $q->writeValidateQuestion();
        if($_GET[$q->getID()] == $q->getAnswer()){
            $correct++;
        }
        ++$QuestionNumber;
    }

    $score = number_format($correct / $QuestionNumber * 100.00,2);
    echo "<p>Your score: $correct / $QuestionNumber  (".$score."%)</p>";
//    writeSocreToDatabase($score);

}

?>