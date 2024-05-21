function validate(){


    let x=document.getElementById("username").value;
    let y=document.getElementById("password").value;
    let z=document.getElementById("passwordd").value;

    if(x===""){

        alert("Username cannot be left blank");
        return false;
    }
    
    if(x.length <6 || x.length >16){

        alert("Username should contain 6 to 15 letters !!");
        return false;
    }

    if(y===""){

        alert("Password cannot be left blank");
        return false;
    }

    if(y.length <5 || y.length >11){

        alert("Passwords should contain 5 to 10 letters !!");
        return false;
    }
    
    if(z===""){

        alert("ReEnter password cannot be left blank");
        return false;
    }



}