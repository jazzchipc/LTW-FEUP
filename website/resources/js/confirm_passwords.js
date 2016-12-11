var goodColor = "#66cc66";
var badColor = "#ff6666";
var white ="#ffffff";

var old_password = old;

function validateOldPassword(){
    
    var confirm_password = document.getElementById('old_password');
    
    if(old_password == confirm_password.value){

        confirm_password.style.backgroundColor = goodColor;
        return true;
    }
    else if(confirm_password.value.length == 0){
        confirm_password.style.backgroundColor = white;
    }
    else{

        confirm_password.style.backgroundColor = badColor;
        return false;
        
    }
} 

function validateNewPassword(){

    var new_password = document.getElementById('new_password');
    var confirm_password = document.getElementById('confirm_password');
    var message = document.getElementById('confirmMessage');
    
    if(new_password.value == confirm_password.value && new_password.value != old_password && new_password.value.length >= 6 && new_password.value.length <= 20){

        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match";
        return true;

    }
    else if (new_password.value == old_password){
        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "New password must be different from the last one";
        return false;
    }
    else if(confirm_password.value.length == 0){
        confirm_password.style.backgroundColor = white;
    }
    else{

        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match";
        return false;
        
    }
}  

function validateAll(){
    return (validateNewPassword() && validateOldPassword());
}

