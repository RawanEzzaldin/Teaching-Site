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
                <input type="button" value=" إضافة طالب " class="gradebtn"/><br>
                <a href="viewstudent.php"> عرض الطلاب </a>
                
                <a href="addgradefour.php"> الصف الرابع الإبتدائي </a>
                <a href="viewgradefouradmin.php">عرض محتوى الصف الرابع</a>

                <a href="addgradefive.php"> الصف الخامس الإبتدائي </a>
                <a href="viewgradefiveadmin.php">عرض محتوى الصف الخامس</a>


                <a href="addgradesex.php"> الصف السادس الإبتدائي </a>
                <a href="viewgradesexadmin.php">عرض محتوى الصف السادس</a>

                <a href="addgrammer.php"> النحو </a>
                <a href="viewgrammeradmin.php">عرض النحو</a>

            </div>

                <form id="addstudent" action="admin.php" method="post">
                    <center><x> إضافة طالب </x></center>
                    <br>
                    <label> اسم المستخدم </label> 
                    <input type="text" class="txt3" id="n" name="uname" "required/> <br><br>
                    <label> كلمة المرور </label> 
                    <input type="password" class="txt3" id="pwd" name="password"  required/> <br><br>
                    <label> رقم الموبايل </label>
                    <input type="tel" class="txt3" id="p" name="phone"  required/> <br><br>
                    <select class="stxt2" name="grade" id="g" required>
                        <option value=""selected="true" disabled="disabled"  > --اختر-- </option>
                        <option value="الصف الرابع الإبتدائي" >
                             الصف الرابع الإبتدائي </option>
                        <option value="الصف الخامس الإبتدائي">
                             الصف الخامس الإبتدائي </option>
                        <option value="الصف السادس الإبتدائي"> 
                            الصف السادس الإبتدائي </option>
                    </select>
                    <label> المرحلةالدراسية </label>
                    <br>
                    <input type="button" value=" إضافة " class="addbtn" onclick="addstu()" />
                </form>

                <?php
                    if(isset($_POST["uname"])==true && $_POST["uname"]!="" && $_POST["password"]!=""
                    && $_POST["phone"]!="" && $_POST["grade"]!="")
                    {
                        $username=$_POST["uname"]; $password=$_POST["password"];
                        $phone=$_POST["phone"]; $grade=$_POST["grade"];
                        $status="valid"; $email="";
                        $r=$con->query("INSERT INTO student VALUES(null, '$username' , '$password' ,
                        '$email' , '$phone' , '$grade' , '$status');");
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