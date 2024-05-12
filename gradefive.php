<?php
        include("connection.php");
    ?>


<?php
    if(isset($_POST["nlessonfive"])==true || (($_POST["nlessonfive"]!="" && $_FILES["vlessonfive"]!="") 
    || ($_POST["ngrammerfive"]!="" && $_FILES["vgrammerfive"]!="")
    ||  ($_POST["nexamplefive"]!="" && $_FILES["examplesfive"]!="")
    || ($_POST["nexamfive"]!="" && $_FILES["examsfive"]!="")
    || ($_POST["nexamanswerfive"]!="" && $_FILES["examsanswerfive"]!="") ))
        {
            $lessonname=$_POST["nlessonfive"]; 
            $lessonvideo=$_FILES["vlessonfive"];
            $filename="video/".$lessonvideo["name"];

            $grammername=$_POST["ngrammerfive"]; 
            $grammervideo=$_FILES["vgrammerfive"];
            $filename2="video/".$grammervideo["name"];

            $examplesname=$_POST["nexamplefive"];
            $examples=$_FILES["examplesfive"];
            $filename3="file/".$examples["name"];

            $examname=$_POST["nexamfive"];
            $exams=$_FILES["examsfive"];
            $filename4="file/".$exams["name"];

            $answername=$_POST["nexamanswerfive"];
            $examsanswer=$_FILES["examsanswerfive"];
            $filename5="file/".$examsanswer["name"];


            if((move_uploaded_file($_FILES['vlessonfive']['tmp_name'],"$filename")==true)){
                $file1=$filename;
            }
            if((move_uploaded_file($_FILES['vgrammerfive']['tmp_name'],"$filename2")==true)){
                $file2=$filename2;
            }
            if((move_uploaded_file($_FILES['examplesfive']['tmp_name'],"$filename3")==true)){
                $file3=$filename3;
            }
            if((move_uploaded_file($_FILES['examsfive']['tmp_name'],"$filename4")==true)){
                $file4=$filename4;
            }
            if((move_uploaded_file($_FILES['examsanswer']['tmp_name'],"$filename5")==true)){
                $file5=$filename5;
            }
                $r=$con->query("INSERT INTO gradefive VALUES (null, '$lessonname' , '$file1' , 
                '$grammername' , '$file2' , '$examplesname' , '$file3' , '$examname' , '$file4',
                '$answername' , '$file5' );");
                header("location:addgradefive.php");
        }

?>