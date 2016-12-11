var goodColor = "#66cc66";
var badColor = "#ff6666";

function verifyPasswordSize(){
    
    var password = document.getElementById('password');
    var message = document.getElementById('confirmMessage');

    if(password.value.length >= 6 && password.value.length <= 20){

        password.style.backgroundColor = goodColor;
        message.innerHTML = "";
        return true;
    }else{

        password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Password size must be between 6 and 20";
        return false;
    }
} 

