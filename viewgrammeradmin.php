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
                <a href="viewstudent.php">عرض الطلاب</a>

                <a href="addgradefour.php"> الصف الرابع الإبتدائي </a>
                <a href="viewgradefouradmin.php">عرض محتوى الصف الرابع</a>

                <a href="addgradefive.php"> الصف الخامس الإبتدائي </a>
                <a href="viewgradefiveadmin.php">عرض محتوى الصف الخامس</a>

                <a href="addgradesex.php"> الصف السادس الإبتدائي </a>
                <a href="viewgradesexadmin.php">عرض محتوى الصف السادس</a>

                <a href="addgrammer.php">النحو</a>
                <input type="button" value=" عرض النحو " class="gradebtn"/>
            </div>

            <form id="viewgrammer" action="viewgrammer.php">
                <input value=" التدريبات " type="button" class="vvbtn" onclick="viewexs()" />
                <input value=" القواعد" type="button" class="vvbtn" onclick="viewgrammerr()" />
            </form>
                <form id="viewgrammerss">
                    <center><t> القواعد </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM grammer");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                            if(!empty($x["grammer_name"] && $x["grammer_video"])){
                                echo'
                                    <div class="view">
                                        <x>'.$x["grammer_name"].'</x>
                                        <video width="300" height="200" controls><source src="'.$x["grammer_video"].'" type="video/mp4" ></video>
                                    </div>';
                            }
                        }
                    ?>
                </form>
                <form id="viewexampless">
                <center><t> التدريبات </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM grammer");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                            if(!empty($x["grammer_file"])){
                                echo'
                                    <div class="view2">
                                        <img src="img/pdficon.png" width="50" height="50"/>
                                        <a href="'.$x["grammer_file"].'"><x>'.$x["grammer_name"].'</x></a>
                                    </div>';
                            }
                        }
                    ?>
                </form>
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