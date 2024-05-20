
let form = document.getElementById("myform"); 
let username = form.elements.namedItem("username").value;
console.log(username);
let password = form.elements["password"].value;
let submitbtn = form.elements["submit"];

submitbtn.addEventListener("click",validate(),false);

function validate(){
    
    if(username==""){
        alert("UserName cannot be left blank!!");
        return false;
    }
    if(username.length<8){
        alert("Username should contain 7 letters!!");
        return false;
    }
let password=document.forms["myform"]["password"].value;
    if(password==""){
        alert("Password Cannot be left blank !!");
        return false;
    }
    if(password.length<6){
        alert("Password should contain 6 letters!!");
        return false;
    }
}

