<?php session_start();
    require_once("connection.php");
    if (!empty($_POST["uname"]) && !empty($_POST["pwd"])) {
    $username = $_POST["uname"];
    $password = $_POST["pwd"];
    $row = $con->query("SELECT * FROM admin WHERE username = '{$username}' AND password = '{$password}'");
    if ($con->affected_rows > 0) {
    if (isset($_SESSION["user"])) {
            unset($_SESSION["user"]);}
            $_SESSION["admin"] = "admin";
            header("location:admin.php");
    }
    else{
        $row = $con->query("SELECT * FROM student WHERE username = '{$username}' AND password = '{$password}'");
        if ($con->affected_rows > 0){
            if(isset($_SESSION["admin"])){
                unset($_SESSION["admin"]);}
            $x = $row->fetch_array(MYSQLI_ASSOC);
            $_SESSION["id"]=$x["id"];
            $_SESSION["grade"]=$x["grade"];
            $_SESSION["status"]=$x["status"];
            header("location:index.php");
        }
        else{
            echo"Email doesn't exsist";
        }
        
    }
    }
    else{
        echo "Please enter all fields"; 
    }
?>

<html>
    <head>
        <title> Login form </title>
        <link rel="stylesheet" href="CSS/style.css"  />
    </head>
    <body style="background-color: whitesmoke;">
        <form id="login" action="login.php" method="post">
            <div class="image">
                <img src="img/user.png" alt="user" >
            </div>

            <div class="logform">
                <label> اسم المستخدم </label>
                <input type="text" placeholder="أدخل اسم المستخدم " name="uname" required>

                <label> كلمة المرور </label>
                <input type="password" placeholder="أدخل كلمة المرور" name="pwd" required>
                    
                <button type="submit"> تسجيل الدخول </button>
                <label>
                <input type="checkbox" checked="checked" name="remember">تذكرني
                </label>
            </div>

            <div class="cancel">
                <a href="index.php" class="cancelbt">إغلاق</a>
            </div>
        </form>
    </body>
</html>