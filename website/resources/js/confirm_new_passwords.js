var goodColor = "#66cc66";
var badColor = "#ff6666";

var old_password = old;

function validateOldPassword(){
    
    var confirm_password = document.getElementById('old_password');
    
    if(old_password == confirm_password.value){

        confirm_password.style.backgroundColor = goodColor;
    }else{

        confirm_password.style.backgroundColor = badColor;
        
    }
} 


function validateNewPassword(){

    var new_password = document.getElementById('new_password');
    var confirm_password = document.getElementById('confirm_password');
    var message = document.getElementById('confirmMessage');
    
    if(new_password.value == confirm_password.value && new_password.value != old_password){

        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match!"

    }
    else if (new_password.value == old_password){
        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "New password must be different from the last one";
    }
    else{

        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match"
        
    }
return false;
}  

