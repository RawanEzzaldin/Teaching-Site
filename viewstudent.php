<html>
    <head>
        <title> Admin </title>
        <link rel="stylesheet" href="CSS/style.css" />
        <script src="JavaScript/admin.js" ></script>
    </head>
    <body>
        <?php include("connection.php"); ?>
        <?php require_once("adminheader.php"); ?>
        <div class="adminmain">
           <div class="adminoptions">
                <a href="admin.php">إضافة طالب</a>
                <input type="button" value=" عرض الطلاب " class="gradebtn" />

                <a href="addgradefour.php"> الصف الرابع الإبتدائي </a>
                <a href="viewgradefouradmin.php">عرض محتوى الصف الرابع</a>


                <a href="addgradefive.php"> الصف الخامس الإبتدائي </a>
                <a href="viewgradefiveadmin.php">عرض محتوى الصف الخامس</a>

                <a href="addgradesex.php"> الصف السادس الإبتدائي </a>
                <a href="viewgradesexadmin.php">عرض محتوى الصف السادس</a>

                <a href="addgrammer.php">النحو</a>
                <a href="viewgrammer.php">عرض النحو</a>
            </div>

            <form id="viewstudent" action="admin.php">
                    <?php
                        $r=$con->query("SELECT * FROM student");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                        echo'
                            <div class="viewstudent">
                                <x>:الاسم</x> <x2>'.$x["username"].'</x2>
                                <br><br>
                                <x>:المرحلة الدراسية</x><x2>'.$x["grade"].'</x2>
                            </div>
                            ';
                        }
                    ?>
                </form>
            
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