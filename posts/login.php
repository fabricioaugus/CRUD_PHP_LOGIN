<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <title>Site!</title>
  </head>
  <body>

    <div class='container'>
      <div class="row">
          <div class="col-md-12">
          <div style = 'width:300px; margin:0 auto; margin-top:100px;'>
            <h3>Efetuar login</h3>
            <form id='form-login' method = 'post' action = 'verifica_login.php'>
                <div class="form-group">
                    <label for="usuario">Usuário: </label>
                    <input type='text' class='form-control' name='usuario' id='usuario' placeholder = 'Informe seu usuário'>			
                </div>
                <div class="form-group">
                    <label for='senha'>Senha: </label>
                    <input type='password' class='form-control' name='senha' id='senha' placeholder = 'informe sua senha'>
                </div>
            <input type='submit' value = 'Efetuar login' class='btn btn-primary'>
            </form>
            </div>
          </div>
       </div>
    </div>     


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  </body>
</html>