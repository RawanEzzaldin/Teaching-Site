

<?php
    if(isset($_POST["nlessonsex"])==true || (($_POST["nlessonsex"]!="" && $_FILES["vlessonsex"]!="") 
    || ($_POST["ngrammersex"]!="" && $_FILES["vgrammersex"]!="")
    ||  ($_POST["nexamplesex"]!="" && $_FILES["examplessex"]!="")
    || ($_POST["nexamsex"]!="" && $_FILES["examssex"]!="")
    || ($_POST["nexamanswersex"]!="" && $_FILES["examsanswersex"]!="") ))
        {
            $lessonname=$_POST["nlessonsex"]; 
            $lessonvideo=$_FILES["vlessonsex"];
            $filename="video/".$lessonvideo["name"];

            $grammername=$_POST["ngrammersex"]; 
            $grammervideo=$_FILES["vgrammersex"];
            $filename2="video/".$grammervideo["name"];

            $examplesname=$_POST["nexamplesex"];
            $examples=$_FILES["examplessex"];
            $filename3="file/".$examples["name"];

            $examname=$_POST["nexamsex"];
            $exams=$_FILES["examssex"];
            $filename4="file/".$exams["name"];

            $answername=$_POST["nexamanswersex"];
            $examsanswer=$_FILES["examsanswersex"];
            $filename5="file/".$examsanswer["name"];


            if((move_uploaded_file($_FILES['vlessonsex']['tmp_name'],"$filename")==true)
            ||(move_uploaded_file($_FILES['vgrammersex']['tmp_name'],"$filename2")==true)
            ||(move_uploaded_file($_FILES['examplessex']['tmp_name'],"$filename3")==true)
            ||(move_uploaded_file($_FILES['examssex']['tmp_name'],"$filename4")==true)
            ||(move_uploaded_file($_FILES['examsanswersex']['tmp_name'],"$filename5")==true)){
                $r=$con->query("INSERT INTO gradesex VALUES (null, '$lessonname' , '$filename' , 
                '$grammername' , '$filename2' , '$examplesname' , '$filename3' , '$examname' , '$filename4',
                '$answername' , '$filename5' );");
                header("location:admin.php");
            }
    }
?>