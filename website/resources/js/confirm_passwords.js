

        var password = document.getElementById("new_password");
        var confirm_password = document.getElementById("confirm_password");

        function validatePassword() {
           
           if (password.value != confirm_password.value){
               confirm_password.setCustomValidity("Passwords don't match");
           }
           else{
               confirm_password.setCustomValidity(' ');
           }
        }

        password.onchange = validatePassword; 
        confirm_password.keyup = validatePassword; 
