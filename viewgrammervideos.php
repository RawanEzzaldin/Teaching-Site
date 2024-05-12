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
        <?php
            $r=$con->query("SELECT * FROM grammer");
            while($x=$r->fetch_array(MYSQLI_ASSOC)){
                if(!empty($x["grammer_name"] && $x["grammer_video"])){
                    echo'
                    <div class="viewuser">
                        <x>'.$x["grammer_name"].'</x>
                        <video width="1000" height="500" controls><source src="'.$x["grammer_video"].'" type="video/mp4" ></video>
                    </div>';
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