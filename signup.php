<?php session_start()?>
<?php if (isset($_SESSION["admin"])) {
        unset($_SESSION["admin"]);}
?>
<?php
    include("connection.php");
?>
<?php

    if(isset($_POST["name"])==true && $_POST["name"]!="" && $_POST["password"]!="" && $_POST["phone"]!="" && $_POST["grade"]!=""){
        $name=$_POST["name"];
        $password=$_POST["password"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $grade=$_POST["grade"];
        $status="invalid";
        $r=$con->query("INSERT INTO student VALUES (null, '$name' , '$password' , '$email' , '$phone' , '$grade' , '$status'); ");
        $r2=$con->query("SELECT * FROM student ORDER BY id DESC");
        $x=$r2->fetch_array(MYSQLI_ASSOC);
        $_SESSION["id"]=$x["id"];
        $_SESSION["grade"]=$x["grade"];
    }
?>

<?php
    if(isset($_POST["cardname"])==true && $_POST["cardname"]!="" && $_POST["cardnumber"]!="" && $_POST["expmonth"]!="" && $_POST["expyear"]!="" && $_POST["cvv"]!="" ){
        $cardname=$_POST["cardname"];
        $cardnumber=$_POST["cardnumber"];
        $expmonth=$_POST["expmonth"];
        $expyear=$_POST["expyear"];
        $cvv=$_POST["cvv"];

        $r=$con->query("INSERT INTO payment VALUES (null , '$cardname' , '$cardnumber' , '$expmonth' , '$expyear',
        '$cvv'); ");
        $id=$_SESSION["id"];
        $r2=$con->query("UPDATE student SET status ='valid' WHERE id=$id ");
        $r3=$con->query("SELECT * FROM student ORDER BY id DESC");
        $x=$r3->fetch_array(MYSQLI_ASSOC);
        $_SESSION["status"]=$x["status"];
        header("location:index.php");
    }
?>

