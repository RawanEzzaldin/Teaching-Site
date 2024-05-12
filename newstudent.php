<html>
    <head> 
        <title> New Student Form </title>
        <link rel="stylesheet" href="CSS/style.css"/> 
        <script src="JavaScript/js.js"></script>
    </head>
    <body style="background-color: whitesmoke;">
        <form id="newst" action="signup.php" method="post" >
            <label> اسم المستخدم </label> <br>
            <input type="text" class="txt" id="n" name="name" required/> <br>
            <label> كلمة المرور </label> <br>
            <input type="password" class="txt"  id="pwd" name="password" required/> <br>
            <label> تأكيد كلمة المرور </label> <br>
            <input type="password" class="txt"  id="cpwd" required/> <br>
            <label> البريد الإلكتروني (اختياري) </label><br>
            <input type="text" class="txt"  id="e" name="email" />
            <label> رقم الموبايل </label> <br>
            <input type="tel" class="txt"  id="p" name="phone"  required/> <br>
            <select class="stxt" id="g" name="grade" required>
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
            <input type="button" value="إنشاء حساب" class="signbtn" onclick="newstu()" />
            <a class="cancelbtn" href="index.php"> إغلاق </a>
        </form>
        <?php
            // header("location:payment.php");
        ?>
    <body>
</html>