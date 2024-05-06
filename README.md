# web-essentials
This is the project of making a website in the domain of education.

moulesh - https://wireframe.cc/7Su6BJ
moulesh - https://wireframe.cc/rxO078
Syed_Amash_s -- https://wireframe.cc/Tkcaqt
Syed_Amash_s -- https://wireframe.cc/GLDO0X
Prasanna - https://wireframe.cc/oUh6ap
Prasanna - https://wireframe.cc/Ua6cC7
prasanna - https://wireframe.cc/Naav3E


<script>
        function validateForm(){
            let x=document.forms["myform"]["usrname"].value;
            if(x==""){
                alert("UserName cannot be left blank!!");
                return false;
            }
            if(x.length<8){
                alert("Username should contain 7 letters!!");
                return false;
            }
            let y=document.forms["myform"]["Password"].value;
            if(y==""){
                alert("Password Cannot be left blank !!");
                return false;
            }
            if(y.length<6){
                alert("Password should contain 6 letters!!");
                return false;
            }
        }
    </script>
