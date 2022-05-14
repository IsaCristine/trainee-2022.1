<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/view_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;500&display=swap" rel="stylesheet">
  

    <title>Login</title>
  </head>
  <body>


    <div class="container">
          
          <div class="row justify-content-center align-items-center vh-100 y">
            
            <div class="col-auto">
              <form class="tela">
                <div>
                  <div class="row justify-content-end">
                    <div class="col-4 divFoto"> 
                      <img class= "img" src="../../../public/img/MacacodeIcon.png">
                    </div>
                    <div class="col-4 divIconeClose"> 
                      <img class= "imgclose" src="../../../public/img/close.png">
                    </div>
                  </div>   
                </div>
                
                <div>
                  <h1>Login</h1>
                </div>
                <div>
                  <hr class="linhas">
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label txt">E-mail</label>
                  <input type="email" class="form-control txt" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text comnt txtdescricao">Não compartilhe email ou senha com outras pessoas</div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label txt">Senha</label>
                  <input type="password" class="form-control txt" id="exampleInputPassword1">
                </div>
                <div class="botaodiv">
                  <button type="submit" class="btn btn-primary w-100 botao txt">Entrar</button>
                </div>
                
              </form>
            </div>
          </div>
        
          
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>