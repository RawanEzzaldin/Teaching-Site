<?php session_start(); ?>
<?php
    if($_SESSION["status"]!="valid"){
        header("location:index.php");
    }
?>
<html>
    <head>
        <title> Choices </title>
        <link rel="stylesheet" href="CSS/style.css" />
    </head>
    <body >
        <?php require_once("header.php"); ?>
        <div class="choices">
             <div class="choice"><a href="viewgrammer.php">
                <x> فيديوهات شرح النحو </x>
                <img src="img/explaingrammer.png" width="200px" height="120px" />
            <a></div>
            <div class="choice"><a href="viewlessons.php">
                <x> فيديوهات شرح الدروس </x>
                <img src="img/explain.png" width="200px" height="120px" />
            </a></div> 
            <br>
            <div class="choice1"><a href="viewexamsanswer.php" >
                <x> نماذج حل الامتحانات </x>
                <img src="img/examanswer.png" width="200px" height="120px" />
            </a></div>
            <div class="choice1"><a href="viewexams.php">
                <x> امتحانات </x><br>
                <img src="img/exam.png" width="200px" height="120px" />
            </a></div>
            <div class="choice1"><a href="viewexamples.php">
                <x> تدريبات </x><br>
                <img src="img/examples.png" width="200px" height="120px" />
            </a></div>
        </div>
        <div class="footer">
            <div class="icons">
                <img src="img/phone.png" width="50px" height="40px" />
                <img src="img/facebook.png" width="50px" height="40px" />
                <img src="img/whatsapp.png" width="50px" height="40px" />
                <img src="img/insta.jpg" width="50px" height="40px" />
                <img src="img/gmail.png" width="50px" height="40px" />
            </div>
            <x> Copyright @2023 Ms: Amal Elsayed All rights Reserved by R.M.S </x>
        </div>
    </body>
    </body>
</html>