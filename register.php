<?Php
session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>StudioVader</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Registro</span><strong class="text-primary">Express</strong></div>
            <p>Faça seu cadastro para acessar sua plataforma Vader.</p>
              <div class="ui-state-error ui-corner-all">
                  <?php
                  if(isset($_SESSION['msg'])){
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                  }
                  ?>
              </div>

            <form method="POST" action="validaregistro.php" class="text-left form-validate">
              <div class="form-group-material">
                <input id="register-name" type="text" name="nome" required data-msg="Por favor digite seu nome" class="input-material">
                <label for="register-name" class="label-material">Nome</label>
              </div>
              <div class="form-group-material">
                <input id="register-username" type="text" name="usuario" required data-msg="Por favor digite o nome do Usuário" class="input-material">
                <label for="register-username" class="label-material">Usuário</label>
              </div>
              <div class="form-group-material">
                <input id="register-password" type="password" name="senha" required data-msg="Por favor digite sua senha" class="input-material">
                <label for="register-password" class="label-material">Senha</label>
              </div>
              <div class="form-group-material">
                <input id="register-password2" type="password" name="confirme" required data-msg="Por favor confirme sua senha" class="input-material">
                <label for="register-password2" class="label-material">Confirme</label>
              </div>
              <div class="form-group terms-conditions">
                <label  class="col-lg-6 form-control-label text-secondary">Tipo de Acesso</label>
                <div class="col-sm-10 mb-3">
                  <select name="acesso" class="form-control">
                    <option>Produtor</option>
                    <option>Musico</option>
                  </select>
                </div>
              </div>

              <div class="form-group terms-conditions text-center">
                <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-control-custom">
                <label for="register-agree">Eu concordo com os termos e politicas</label>
              </div>
              <div class="form-group text-center">
                <input id="register" name= "registrar" type="submit" value="Registrar" class="btn btn-primary">
              </div>
            </form><small>Já possui uma conta? </small><a href="login.php" class="signup">Login</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>