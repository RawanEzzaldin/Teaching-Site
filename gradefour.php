<?php
    include("connection.php");
                if(isset($_POST["nlesson"])==true || (($_POST["nlesson"]!="" && $_FILES["vlesson"]!="") 
                || ($_POST["ngrammer"]!="" && $_FILES["vgrammer"]!="")
                || ($_POST["nexample"]!="" && $_FILES["examples"]!="")
                || ($_POST["nexam"]!="" && $_FILES["exams"]!="")
                || ($_POST["nexamanswer"]!="" && $_FILES["examsanswer"]!="") ))
                    {
                        $lessonname=$_POST["nlesson"]; 
                        $lessonvideo=$_FILES["vlesson"];
                        $filename="video/".$lessonvideo["name"];

                        $grammername=$_POST["ngrammer"]; 
                        $grammervideo=$_FILES["vgrammer"];
                        $filename2="video/".$grammervideo["name"];

                        $examplesname=$_POST["nexample"];
                        $examples=$_FILES["examples"];
                        $filename3="file/".$examples["name"];

                        $examname=$_POST["nexam"];
                        $exams=$_FILES["exams"];
                        $filename4="file/".$exams["name"];

                        $answername=$_POST["nexamanswer"];
                        $examsanswer=$_FILES["examsanswer"];
                        $filename5="file/".$examsanswer["name"];

                        if((move_uploaded_file($_FILES['vlesson']['tmp_name'],"$filename")==true)){
                            $file1=$filename;
                        }
                        if((move_uploaded_file($_FILES['vgrammer']['tmp_name'],"$filename2")==true)){
                            $file2=$filename2;
                        }
                        if((move_uploaded_file($_FILES['examples']['tmp_name'],"$filename3")==true)){
                            $file3=$filename3;
                        }
                        if((move_uploaded_file($_FILES['exams']['tmp_name'],"$filename4")==true)){
                            $file4=$filename4;
                        }
                        if((move_uploaded_file($_FILES['examsanswer']['tmp_name'],"$filename5")==true)){
                            $file5=$filename5;
                        }
                        $r=$con->query("INSERT INTO gradefour VALUES (null, '$lessonname' , '$file1' , 
                        '$grammername' , '$file2' , '$examplesname' , '$file3' , '$examname' , '$file4',
                        '$answername' , '$file5' );");
                        header("location:addgradefour.php");
                    }
                ?>