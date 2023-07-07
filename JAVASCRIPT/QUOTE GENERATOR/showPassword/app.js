var checkBtn = document.getElementById('check');
var passwordInput = document.getElementById('password');

checkBtn.addEventListener('click', function(){
    
    if(passwordInput.type == "password"){
        passwordInput.type == "text";
    }else{
        passwordInput.type == "password";
    }

});

