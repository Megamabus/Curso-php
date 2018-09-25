
<div class="continer">
  <div class="card card card-container">
    <h2 class="titleLogin">Iniciar sesi&oacute;n</h2>
    <form action="#" class="form-signin" id="Session" name="Session" method="POST">
      <input placeholder="Email address" type="email" name="email" id="email" class="form-control">
      <input placeholder="Password" type="password" name="password" id="password" class="form-control">
      <button type="submit" onclick="userLogin()" class="btn btn-signin">Iniciar sesi&oacute;n</button>     
    </form>
  </div>

  <script>
    function userLogin(){
      var email = $('form[name=Session] input[name=email]')[0].value;
      var password = $('form[name=Session] input[name=password]')[0].value;
      if(email == "" || password == ""){

      }else{
        $.ajax({
          type:"POST",
          url:"<?php echo URL;?>User/userLogin",
          data:{email: email,password: password}

        }).done(function(response){
          if(response == 1){
            document.location = "<?php echo URL; ?>Principal/principal";
          }else{
            alert("Email o Contraseña Incorrectos");
          }
        });
      }
    }
  </script>
</div>
