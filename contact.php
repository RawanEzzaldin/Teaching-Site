<html>
    <head>
        <title> Contact Us </title>
        <link rel="stylesheet" href="CSS/style.css"/>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="JavaScript/js.js" ></script>
    </head>
    <body >
        <?php require_once("header.php"); ?>
        <form id="contact" action="contact.php" method="get">
            <x> نقدر نساعدك؟ </x><br>
            <x2> إرسل لنا استفسارك وسيتم الرد عليك في أقرب وقت </x2><br>
            <label>الاسم</label><br>
            <img src="img/useer.png" width="50px" height="50px" />
            <input type="text" class="txt2" id="n" name="name" required/><br>
            <label>رقم الهاتف</label><br>
            <img src="img/phone.png" width="50px"  height="50px" />
            <input type="tel" class="txt2" id="p" name="phone" /><br>
            <label>البريد الإلكتروني</label><br>
            <img src="img/email.png" width="50px" height="50px" />
            <input type="text" class="txt2" id="e" name="email" required /><br>
            <label>رسالتك</label><br>
            <img src="img/msg.png" width="50px" height="50px" />
            <textarea id="m" name="msg" required></textarea>
            <input type="button" value="إرسال"class="sendbtn" onclick="send()" />
        </form>

        <?php
            include("connection.php");
            if(isset($_POST["name"])==true){
                $name=$_POST["name"];
                $phone=$_POST["phone"];
                $email=$_POST["email"];
                $msg=$_POST["msg"];

                $r=$con->query("INSERT INTO contactus VALUES (null , '$name' , '$phone'  , '$email' , '$msg');");
                echo'<script>alert("شكرا لك... سيتم الرد عليك في أقرب وقت");</script>';
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