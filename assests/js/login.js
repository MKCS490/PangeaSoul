$(document).ready(function(){
    const password = $('#loginPassword');
    $("#eye").click(function(){
        if(password.prop('type') == 'password'){
            $(this).addClass("fa-eye-slash");
            password.attr('type', 'text');
        }
        else {
            $(this).removeClass("fa-eye-slash");
            password.attr('type', 'password');
        }
    });
});