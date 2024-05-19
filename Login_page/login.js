function validatelogin(){
    
    let x = document.getElementById("usr").value;
    let y = document.getElementById("pass").value;


 
   if(x===""){
    alert("Please Enter the Email-id !!");
     return false;
   }
   if(y===""){
    alert("Please Enter the Password !!");
    return false;}
}