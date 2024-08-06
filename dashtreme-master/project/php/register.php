<?php
include_once('conexao.php');

if (isset($_POST['email']) && isset($_POST['senha']) && isset($_POST['usuario'])) {
    $usuario = $conexao->real_escape_string($_POST['usuario']);
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $_POST['senha'];

    // Hash a senha antes de armazenar no banco de dados
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $sql_code = "INSERT INTO login (usuario, email, senha, tipo) VALUES ('$usuario', '$email', '$senha_hash', 'gerente')";
    $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

    if ($sql_query) {
      header("Location: login.php");
    } else {
        echo "Erro ao registrar usuário.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Cadastro - GESTRATOR</title>
  <!-- loader-->
  <link href="../../assets/css/pace.min.css" rel="stylesheet"/>
  <script src="../../assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="../../assets/css/app-style.css" rel="stylesheet"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>

<body class="bg-theme bg-theme1">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="../../assets/images/logo-icon.png" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3"></div>


		    <form action="" method="post">

        <div class="form-group">

			  <label for="exampleInputEmailId" class="sr-only">Usuario </label>

			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputEmailId" name="usuario" class="form-control input-shadow" placeholder="Gmail">

				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>

			   </div>

			  </div>
			  
			  <div class="form-group">

			  <label for="exampleInputEmailId" class="sr-only">Email </label>

			   <div class="position-relative has-icon-right">
				  <input type="text" id="exampleInputEmailId" name="email" class="form-control input-shadow" placeholder="Confirme seu Gmail">

				  <div class="form-control-position">
					  <i class="icon-envelope-open"></i>
				  </div>

			   </div>

			  </div>

			  <div class="form-group">
			   <label for="exampleInputPassword" class="sr-only">Password</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="exampleInputPassword" name="senha" class="form-control input-shadow" placeholder="Sua senha">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>

        <input type="submit" value="Cadastrar" class="btn btn-light btn-block waves-effect waves-light">

			
			 </form>


		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">Já tem uma conta? <a href="login.php"> Clique aqui</a></p>
		  </div>
	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
  <!--end color switcher-->
	
	</div><!--wrapper-->
	
  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</body>
</html>
