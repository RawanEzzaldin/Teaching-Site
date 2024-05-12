<?php session_start(); ?>
<?php include("connection.php"); ?>
<html>
    <head>
        <title> view lessons </title>
        <link rel="stylesheet" href="CSS/style.css" />
    </head>
    <body style="background-color:whitesmoke;">
        <?php require_once("header.php"); ?>
        <?php
            if($_SESSION["grade"]=="الصف الرابع الإبتدائي"){
                $r=$con->query("SELECT * FROM gradefour");
                while($x=$r->fetch_array(MYSQLI_ASSOC)){
                    if(!empty($x["lesson_name"] && $x["lesson_video"] )){
                        echo'
                        <div class="viewuser">
                        <x>'.$x["lesson_name"].'</x>
                        <video width="1000" height="500" controls><source src="'.$x["lesson_video"].'" type="video/mp4" ></video>
                        </div>
                        ';
                    }
                }
            }
        ?>
        <?php
            if($_SESSION["grade"]=="الصف الخامس الإبتدائي"){
                $r=$con->query("SELECT * FROM gradefive");
                while($x=$r->fetch_array(MYSQLI_ASSOC)){
                    if(!empty($x["lesson_name"] && $x["lesson_video"] )){
                        echo'
                        <div class="viewuser">
                        <x>'.$x["lesson_name"].'</x>
                        <video width="1000" height="500" controls><source src="'.$x["lesson_video"].'" type="video/mp4" ></video>
                        </div>
                        ';
                    }
                }
            }
        ?>
        <?php
            if($_SESSION["grade"]=="الصف السادس الإبتدائي"){
                $r=$con->query("SELECT * FROM gradesex");
                while($x=$r->fetch_array(MYSQLI_ASSOC)){
                    if(!empty($x["lesson_name"] && $x["lesson_video"] )){
                        echo'
                        <div class="viewuser">
                        <x>'.$x["lesson_name"].'</x>
                        <video width="1000" height="500" controls><source src="'.$x["lesson_video"].'" type="video/mp4" ></video>
                        </div>
                        ';
                    }
                }
            }
        ?>
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
</html>
