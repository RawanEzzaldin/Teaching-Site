function newstu(){
    n=document.getElementById("n").value;
    pwd=document.getElementById("pwd").value;
    cpwd=document.getElementById("cpwd").value;
    e=document.getElementById("e").value;
    p=document.getElementById("p").value;
    g=document.getElementById("g").value;

    // validation
    nameRE=/^([A-Z][a-z]{2,20}[\s])([A-Z][a-z]{2,20})$/; //username
    pwdRe=/^([\w]|[\W]){8,20}$/; //password
    emRE=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email
    phoneRE=/^[0][1]([0-2]|[5])[0-9]{8}$/; //phone
    if(nameRE.test(n) ){
        document.getElementById("n").style.borderColor="green";
    }
    else{
        document.getElementById("n").style.borderColor="red";
    }
    if(pwdRe.test(pwd)){
        document.getElementById("pwd").style.borderColor="green";
    }
    else{
        document.getElementById("pwd").style.borderColor="red";
    }
    if(pwdRe.test(cpwd)){
        document.getElementById("cpwd").style.borderColor="green";
    }
    else{
        document.getElementById("cpwd").style.borderColor="red";
    }
    if(pwd!=cpwd){
        alert("كلمة المرور غير متطابقة");
    }
    if(phoneRE.test(p)){
        document.getElementById("p").style.borderColor="green";
    }
    else{
        document.getElementById("p").style.borderColor="red";
    }
    if(e!=""){
        if(emRE.test(e))
    {
        document.getElementById("e").style.borderColor="green";
    }
    else{
        document.getElementById("e").style.borderColor="red";
    }
    }
    if(g!=""){
        document.getElementById("g").style.borderColor="green";
    }
    else{
        document.getElementById("g").style.borderColor="red";
    }
    if(nameRE.test(n) && pwdRe.test(pwd) && (pwd==cpwd) && phoneRE.test(p) && g!="" )
    {
        x=new XMLHttpRequest();
        x.onreadystatechange=function()
        {
            if(x.readyState==4 && x.status==200)
            {
                console.log("hi");
            }
            document.getElementById("n").value="";
            document.getElementById("pwd").value="";
            document.getElementById("cpwd").value="";
            document.getElementById("e").value="";
            document.getElementById("p").value="";
            document.getElementById("g").value="";
            }
        x.open("POST","signup.php");
        x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        x.send("name="+n+"&password="+pwd+" &email="+e+" &phone="+p+" &grade="+g+"");
        window.location.href="payment.php";
    }
}

function send()
{
    n=document.getElementById("n").value;
    p=document.getElementById("p").value;
    e=document.getElementById("e").value;
    m=document.getElementById("m").value;

    emRE=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; //email
    phoneRE=/^[0][1]([0-2]|[5])[0-9]{8}$/; //phone

    if(phoneRE.test(p)){
        document.getElementById("p").style.borderColor="green";
    }
    else{
        document.getElementById("p").style.borderColor="red";
    }
    if(emRE.test(e)){
        document.getElementById("e").style.borderColor="green";
    }
    else{
        document.getElementById("e").style.borderColor="red";
    }
    if(m!=""){
        x=new XMLHttpRequest();
        x.onreadystatechange=function()
        {
            if(x.readystate==4 && x.status==200)
            {
                console.log("hi");
            }
            document.getElementById("n").value="";
            document.getElementById("p").value="";
            document.getElementById("e").value="";
            document.getElementById("m").value="";
        }
        x.open("GET","contact.php?name="+n+"& phone="+p+"& email="+e+" &msg="+m+"");
        x.send();
    }
}