<html>
    <head>
        <title> Admin </title>
        <link rel="stylesheet" href="CSS/style.css" />
    </head>
    <body>
        <?php include("connection.php"); ?>
        <?php require_once("adminheader.php"); ?>
        <div class="adminmain">
           <div class="adminoptions">
                <a href="admin.php">إضافة طالب</a>
                <a href="viewstudent.php"> عرض الطلاب </a>

                <input type="button" value=" الصف الرابع الإبتدائي " class="gradebtn"  />
                <a href="viewgradefouradmin.php"> عرض محتوى الصف الرابع </a>

                <a href="addgradefive.php"> الصف الخامس الإبتدائي </a>
                <a href="viewgradefiveadmin.php"> عرض محتوى الصف الخامس </a>

                <a href="addgradesex.php"> الصف السادس الإبتدائي </a>
                <a href="viewgradesexadmin.php"> عرض محتوى الصف السادس </a>

                <a href="addgrammer.php"> النحو </a>
                <a href="viewgrammeradmin.php">عرض النحو</a>
            </div>

              <form id="gradefour" method="post" action="gradefour.php" enctype="multipart/form-data" >
                    <center><x>الصف الرابع الإبتدائي</x><br><br></center>
                    <label>اسم الدرس</label>
                    <input type="text" class="txxt" name="nlesson" /><br><br>

                    <img src="img/videooo.png" width="40px" height="30px" />
                    <label>فيديو شرح درس</label>
                    <input type="file"  class="ftxt" name="vlesson" /><br><br>

                    <label> قاعدة نحو </label>
                    <input type="text" class="txxt" name="ngrammer"  /><br><br>

                    <img src="img/videooo.png" width="40px" height="30px" />
                    <label>فيديو شرح  نحو</label>
                    <input type="file"  class="ftxt" name="vgrammer"  /><br><br>

                    <label>عنوان التدريب</label>
                    <input type="text" class="txxt" name="nexample" /><br><br>

                    <img src="img/pdfff.png" width="40px" height="30px" />
                    <label>تدريبات</label> 
                    <input type="file" class="ftxt" name="examples"  /> <br><br>

                    <label>عنوان الامتحان</label>
                    <input type="text" class="txxt" name="nexam" /><br><br>

                    <img src="img/pdfff.png" width="40px" height="30px" />
                    <label>امتحانات</label>
                    <input type="file" class="ftxt" name="exams"  /><br><br>

                    <label>عنوان نموذج حل الامتحان</label>
                    <input type="text" class="txxt" name="nexamanswer" /><br><br>

                    <img src="img/pdfff.png" width="40px" height="30px" />
                    <label>نماذج حل الامتحانات</label>
                    <input type="file" class="ftxt" name="examsanswer"  /><br><br>

                    <input type="submit" value="Add" class="addbtn" />
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