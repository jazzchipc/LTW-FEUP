var goodColor = "#66cc66";
var badColor = "#ff6666";
var white ="#ffffff";


var confirm_old_password = document.getElementById('old_password');
var new_password = document.getElementById('new_password');
var confirm_password = document.getElementById('confirm_password');
var message = document.getElementById('confirmMessage');

function validateOldPassword(){

    var old = $("#old_password").val();

    return $.ajax({
        type: "POST",
        url: "/actions/password_verification.php",
        data:   {
                    action : 'verifyPasswordWithHash', 
                    user_id : user_id, 
                    password : old
                },
        success: function(response){
            if(response == "true")
            {
                confirm_old_password.style.backgroundColor = goodColor;
                return true;
            }
            else if(confirm_old_password.value.length == 0)
            {
                confirm_old_password.style.backgroundColor = white;
                return false;
            }
            else
            {
                confirm_old_password.style.backgroundColor = badColor;
                return false;
            }
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });

} 

function validateNewPassword(){

    if  (confirm_password.value.length == 0){
        confirm_password.style.backgroundColor = white;
        return true;
    }
    else if(!(validatePasswordSize(new_password))){
        console.log(new_password.value.length);
        message.style.color = badColor;
        message.innerHTML = "Password Size Must Be Between 6 and 20";
        return false;
    }
    else if(new_password.value == old_password){
        message.style.color = badColor;
        message.innerHTML = "New password must be different from the last one";
        return false;
    }
    else if(new_password.value == confirm_password.value){

        confirm_password.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords Match";
        return true;

    }
    else{

        confirm_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords Do Not Match";
        return false;
        
    }
}  

function validateAll(){
    
    if (emptyField(confirm_old_password) && !emptyField(new_password)){
        confirm_old_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Actual Password field is empty";
        return false;
    }
    else if (!emptyField(confirm_old_password) && emptyField(new_password)){
        confirm_old_password.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "New Password field is empty";
        return false;
    }
    else if(!validateNewPassword()){
        console.log("sai");
        return false;
    }
    else if(!validateOldPassword()){
        console.log("sai2");
        return false;
    }
    else return true;
}

function validatePasswordSize(pass){
    console.log(pass.value.length);
    if (pass.value.length >= 6 && pass.value.length <= 20)
        return true;
    else return false;
}

function emptyField(pass){
    if (pass.value == null || pass.value.length == 0)
        return true;
    else return false;
}