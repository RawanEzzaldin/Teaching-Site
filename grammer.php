<?php
    include("connection.php");
?>
<?php
    if(isset($_POST["ngrammer"])==true && ($_FILES["vgrammer"]!="" || $_FILES["fgrammer"]!="") ){
        $grammername=$_POST["ngrammer"];

        $grammervideo=$_FILES["vgrammer"];
        $filename="video/".$grammervideo["name"];

        $grammerfile=$_FILES["fgrammer"];
        $filename2="file/".$grammerfile["name"];

        if((move_uploaded_file($_FILES['vgrammer']['tmp_name'],"$filename")==true)){
            $file1=$filename;
        }
        if((move_uploaded_file($_FILES['fgrammer']['tmp_name'],"$filename2")==true)){
            $file2=$filename2;
        }
            $r=$con->query("INSERT INTO grammer VALUES  (null, '$grammername' , '$file1' , '$file2');");
            header("location:addgrammer.php");
    }
?>