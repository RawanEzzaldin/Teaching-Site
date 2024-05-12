<?php session_start(); ?>
<?php include("connection.php"); ?>
<html>
    <head>
        <title> view lessons </title>
        <link rel="stylesheet" href="CSS/style.css" />
    </head>
    <body>
        <?php require_once("header.php"); ?>
        <div class="mainuser">
            <?php
                if($_SESSION["grade"]=="الصف الرابع الإبتدائي"){
                    $r=$con->query("SELECT * FROM gradefour");
                    while($x=$r->fetch_array(MYSQLI_ASSOC)){
                        if(!empty($x["examples_file"])){
                            echo'
                                <div class="viewuser2">
                                    <img src="img/pdficon.png" width="50" height="50"/>
                                    <a href="'.$x["examples_file"].'"><x>'.$x["examples_name"].'</x></a>
                                </div>';
                        }
                    }
                }
            ?>
            <?php
                if($_SESSION["grade"]=="الصف الخامس الإبتدائي"){
                    $r=$con->query("SELECT * FROM gradefive");
                    while($x=$r->fetch_array(MYSQLI_ASSOC)){
                        if(!empty($x["examples_file"])){
                            echo'
                                <div class="viewuser2">
                                    <img src="img/pdficon.png" width="50" height="50"/>
                                    <a href="'.$x["examples_file"].'"><x>'.$x["examples_name"].'</x></a>
                                </div>';
                        }
                    }
                }
            ?>
            <?php
                if($_SESSION["grade"]=="الصف السادس الإبتدائي"){
                    $r=$con->query("SELECT * FROM gradesex");
                    while($x=$r->fetch_array(MYSQLI_ASSOC)){
                        if(!empty($x["examples_file"])){
                            echo'
                                <div class="viewuser2">
                                    <img src="img/pdficon.png" width="50" height="50"/>
                                    <a href="'.$x["examples_file"].'"><x>'.$x["examples_name"].'</x></a>
                                </div>';
                        }
                    }
                }
            ?>
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
</html>
