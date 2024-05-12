<html>
    <head>
        <title>View Grammer</title>
        <link rel="stylesheet" href="CSS/style.css" />
        <script src="JavaScript/js.js" ></script>
    </head>
    <body>
        <?php
            require_once("connection.php");
            include("header.php");
        ?>
        <div class="mainuser">
            <?php
                $r=$con->query("SELECT * FROM grammer");
                while($x=$r->fetch_array(MYSQLI_ASSOC)){
                    if(!empty($x["grammer_file"])){
                        echo'
                            <div class="viewuser2">
                                <img src="img/pdficon.png" width="50" height="50"/>
                                <a href="'.$x["grammer_file"].'"><x>'.$x["grammer_name"].'</x></a>
                            </div>';
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