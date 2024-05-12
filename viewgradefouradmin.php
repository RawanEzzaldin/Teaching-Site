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
                <input type="button" value=" عرض محتوى الصف الرابع " class="gradebtn"  onclick="grammer()"/>

                <a href="addgradefive.php"> الصف الخامس الإبتدائي </a>
                <a href="viewgradefiveadmin.php">عرض محتوى الصف الخامس</a>

                <a href="addgradesex.php"> الصف السادس الإبتدائي </a>
                <a href="viewgradesexadmin.php">عرض محتوى الصف السادس</a>

                <a href="addgrammer.php">النحو</a>
                <a href="viewgrammeradmin.php">عرض النحو </a>
            </div>

            <form id="viewgradefouradmin" action="viewgradefouradmin.php">
                
                <input value=" نموذج حل الاختبارات " type="button" class="vbtn" onclick="viewanswer()"/>
                <input value=" الاختبارات" type="button" class="vbtn" onclick="viewexams()" />
                <input value=" التدريبات " type="button" class="vbtn" onclick="viewex()" />
                <input value=" القواعد" type="button" class="vbtn" onclick="viewgrammer()" />
                <input value=" الدروس" type="button" class="vbtn" onclick="viewlesson()" />
    
            </form>

                <form id="viewlessons" >
                    <center><t> الدروس </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM gradefour");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                            if(!empty($x["lesson_name"] && $x["lesson_video"])){
                                echo'
                                    <div class="view">
                                        <x>'.$x["lesson_name"].'</x>
                                        <video width="300" height="200" controls><source src="'.$x["lesson_video"].'" type="video/mp4" ></video>
                                    </div>';
                            }
                        }
                    ?>
                </form>
                <form id="viewgrammers">
                    <center><t> القواعد </t></center>
                        <?php
                            $r=$con->query("SELECT * FROM gradefour");
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
                <form id="viewexamples">
                    <center><t> التدريبات </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM gradefour");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                            if(!empty($x["examples_file"])){
                                echo'
                                    <div class="view2">
                                        <img src="img/pdficon.png" width="50" height="50"/>
                                        <a href="'.$x["examples_file"].'"><x>'.$x["examples_name"].'</x></a>
                                    </div>';
                            }
                        }
                    ?>
                </form>
                <form id="viewexams">
                    <center><t> الاختبارات </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM gradefour");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                                if(!empty($x["exams_file"])){
                                echo'
                                    <div class="view2">
                                        <img src="img/pdficon.png" width="50" height="50"/>
                                        <a href="'.$x["exams_file"].'"><x>'.$x["exams_name"].'</x></a>
                                    </div>';
                                
                                }
                        }
                    ?>
                </form>
                <form id="viewanswers" >
                    <center><t> حلول الاختبارات </t></center>
                    <?php
                        $r=$con->query("SELECT * FROM gradefour");
                        while($x=$r->fetch_array(MYSQLI_ASSOC)){
                            if(!empty($x["answer_file"])){
                                echo'
                                    <div class="view2">
                                        <img src="img/pdficon.png" width="50" height="50"/>
                                        <a href="'.$x["answer_file"].'"><x>'.$x["answer_name"].'</x></a>
                                    </div>';
                            }
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