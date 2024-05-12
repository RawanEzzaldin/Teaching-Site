<html>
    <head>
        <title> Payment </title>
        <link rel="stylesheet" href="CSS/style.css"  />
    </head>
    <body>
        <?php  require_once("header.php"); ?>
        <form id="payment" action="signup.php" method="post" >
            <x> الدفع </x> <br><br>
            <label> البطاقات المقبولة </label> <br>
            <img src="img/bmisr.png" width="40px" height="30px" />
            <img src="img/bnbe.png" width="65px" height="30px" />
            <img src="img/bcairo.png" width="40px" height="30px" />
            <img src="img/fawry.png" width="40px" height="30px" />
            <br>
            <label>الاسم على البطاقة</label> <br>
            <input type="text" class="txt11" placeholder="Mohammed Ahmed" name="cardname" required /> <br>
            <label> رقم البطاقة </label><br>
            <input type="text" class="txt11" placeholder="1111-2222-3333-4444" name="cardnumber" required /><br>
            <label> شهر الإنتهاء </label><br>
            <select dir="rtl" class="txt22" name="expmonth" required>
                <option value=""selected="true" disabled="disabled"  > --اختر-- </option>
                <option value="1" >يناير</option>
                <option value="2" >فبراير</option>
                <option value="3" >مارس</option>
                <option value="4" >أبريل</option>
                <option value="5" >مايو</option>
                <option value="6" >يونيو</option>
                <option value="7" >يوليو</option>
                <option value="8" >أغسطس</option>
                <option value="9" >سبتمبر</option>
                <option value="10" >أكتوبر</option>
                <option value="11" >نوفمبر</option>
                <option value="12" >ديسمبر</option>
            </select><br>
            <label> سنة الإنتهاء </label><br>
            <input type="text" class="txt22" placeholder="2000" name="expyear" required /><br>
            <label> CVV </label> <br>
            <input type="text" class="txt22" placeholder="123" name="cvv" required /><br><br>
            <a class="cancelbtn" href="index.php"> إغلاق </a>
            <input type="submit" value="تأكيد" class="confirmbtn" />
        </form>
        <div class="footer">
            <x> Copyright @2023 Ms: Amal Elsayed All rights Reserved by R.M.S </x>
        </div>
    </body>
</html>