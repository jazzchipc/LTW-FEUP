        //old password
        var old_password = old;
        var confirm_old_password = document.getElementById("confirm_old_password");

        function validateOldPassword() {
           console.log(confirm_old_password.value);
           console.log(old_password);
           if (old_password != confirm_old_password.value){
               confirm_old_password.setCustomValidity("Old Passwords don't match");
           }
           else{
               confirm_old_password.setCustomValidity(' ');
           }
        }

        old_password.onchange = validateOldPassword;
        confirm_old_password.onchange = validateOldPassword;
        confirm_old_password.keyup = validateOldPassword; 
        