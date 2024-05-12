function viewlesson(){
    document.getElementById("viewlessons").style.display="block";
    document.getElementById("viewgrammers").style.display="none";
    document.getElementById("viewexamples").style.display="none";
    document.getElementById("viewexams").style.display="none";
    document.getElementById("viewanswers").style.display="none";
}
function viewgrammer(){
    document.getElementById("viewgrammers").style.display="block";
    document.getElementById("viewlessons").style.display="none";
    document.getElementById("viewexamples").style.display="none";
    document.getElementById("viewexams").style.display="none";
    document.getElementById("viewanswers").style.display="none";

}
function viewex(){
    document.getElementById("viewexamples").style.display="block";
    document.getElementById("viewexams").style.display="none";
    document.getElementById("viewanswers").style.display="none";
    document.getElementById("viewlessons").style.display="none";
    document.getElementById("viewgrammers").style.display="none";
}
function viewexams(){
    document.getElementById("viewexams").style.display="block";
    document.getElementById("viewanswers").style.display="none";
    document.getElementById("viewlessons").style.display="none";
    document.getElementById("viewgrammers").style.display="none";
    document.getElementById("viewexamples").style.display="none";

}
function viewanswer(){
    document.getElementById("viewanswers").style.display="block";
    document.getElementById("viewlessons").style.display="none";
    document.getElementById("viewgrammers").style.display="none";
    document.getElementById("viewexamples").style.display="none";
    document.getElementById("viewexams").style.display="none";

}
function viewexs(){
    document.getElementById("viewexampless").style.display="block";
    document.getElementById("viewgrammerss").style.display="none";
}
function viewgrammerr(){
    document.getElementById("viewgrammerss").style.display="block";
    document.getElementById("viewexampless").style.display="none";
}

function addstu(){
    n=document.getElementById("n").value;
    pwd=document.getElementById("pwd").value;
    p=document.getElementById("p").value;
    g=document.getElementById("g").value;

    // validation
    nameRE=/^([A-Z][a-z]{2,20}[\s])([A-Z][a-z]{2,20})$/; //username
    pwdRe=/^([\w]|[\W]){8,20}$/; //password
    phoneRE=/^[0][1]([0-2]|[5])[0-9]{8}$/; //phone
    if(!nameRE.test(n) ){
        document.getElementById("n").style.borderColor="red";
    }
    if(!pwdRe.test(pwd)){
        document.getElementById("pwd").style.borderColor="red";
    }
    if(!phoneRE.test(p)){
        document.getElementById("p").style.borderColor="red";
    }
    if(g==""){
        document.getElementById("g").style.borderColor="red";
    }
    if(nameRE.test(n) && pwdRe.test(p) && phoneRE.test(p) &&g!=""){
        x=new XMLHttpRequest();
        x.onreadystatechange=function()
        {
            if(x.readystate==4 && x.status==200)
            {
                console.log("hi");
            }
            document.getElementById("n").value="";
            document.getElementById("pwd").value="";
            document.getElementById("p").value="";
            document.getElementById("g").value="";
        }
        x.open("POST","admin.php");
        x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        x.send("uname="+n+"&password="+pwd+"&phone="+p+" &grade="+g+"");
    }
}
