$().ready(function(){
    $("#Session").validate({
        rules:{
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlegth: 6
            }
        },
        messages: {
            email: {
                required: "<center><td colspan='2'><font color='red'>Por favor, escriba su email.</font></td></center>",
            },
            password: {
                required: "<center><td colspan='2'><font color='red'>Por favor, escriba su contraseña.</font></td></center>",
            }
        }
    });
    $("#email").focus();
});