<?php session_start(); ?>
<html>
    <head>
        <title> Home </title>
        <link rel="stylesheet" href="CSS/style.css" /> 
    </head>
    <body>
        <?php require_once("header.php") ?>
        <div class="main">
            <div class="intro">
                <x> لغةٌ إذا وقعت على أسماعِنا </x>
                <x2> كانتْ لنا برداً على الأكبادِ </x2> <br>
                <x> ستظلُ رابطةً تؤلفْ بيننا </x>
                <x2> فهي الرجاء لناطقٍ بالضّادِ </x2><br><br>
                <x3 dir="rtl"> بالعزيمة والمثابرة نحصد ثمار التفوق فهيا معاً إلى طريق التفوق... </x3>
            </div>
            <a href="newstudent.php"> طالب جديد </a>
        </div>
        <div class="grades">
            <x> المراحل المدرسية </x><br>
            <a href="choices.php">الصف الرابع الإبتدائي </a>
            <a href="choices.php" > الصف الخامس الإبتدائي </a>
            <a href="choices.php" > الصف السادس الإبتدائي </a>
            <a href="gchoices.php" > النحو </a>
        </div>
        <div class="services">
            <x> ما نقدمه </x><br>
            <div class="service">
                <img src="Img/examm.png" width="100px" height="65px"  /><br> <br> <br> <br> 
                <x> خدمة الإمتحانات </x><br>
                <x2>يقدم الموقع خدمة الامتحانات على الدروس والوحدات لمادة اللغة العربية     </x2>
            </div>
            <div class="service">
                <img src="Img/videoo.png" width="100px" height="65px" /><br> <br> <br> <br> 
                <x> فيديوهات شرح </x><br>
                <x2> يقدم الموقع شروحات فيديو للدروس والوحدات والمراجعات النهائية </x2>
            </div>
            <div class="service">
                <img src="Img/pdff.png" width="120px" height="75px" /><br> <br> <br> <br> 
                <x> ملفات </x><br>
                <x2> يقدم الموقع خدمة تنزيل ملفات (ملازم الدروس والمراجعات النهائية ) </x2>
            </div>
            <div class="service">
                <img src="Img/grammer.png" width="120px" height="75px" /><br> <br> <br> <br> 
                <x> مذكرات نحو شاملة </x><br>
                <x2> يقدم الموقع مذكرات نحو شاملة للمرحلة الإبتدائية بطريقة سهلة ومبسطة </x2>
            </div>
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