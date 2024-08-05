<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Cadastrar conteúdo</title>
    <!-- loader-->
    <link href="../../assets/css/pace.min.css" rel="stylesheet" />
    <script src="../../assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="../../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="../../assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="../../assets/css/app-style.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-theme bg-theme1">

<div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>

  <?php
  include_once ('conexao.php');
  //    variavel          nome no form
  $nome_conteudo = $_POST['nome_conteudo'];
  $descricao = $_POST['descricao'];
  $id_setor = $_POST['id_setor'];

  $pdf = $_FILES['pdf']['tmp_name'];
  $pdf_destino = '../imagensBd/' . $_FILES['pdf']['name'];

  move_uploaded_file($pdf, $pdf_destino);

  $capa = $_FILES['capa']['tmp_name'];
  $capa_destino = '../imagensBd/' . $_FILES['capa']['name'];

  move_uploaded_file($capa, $capa_destino);

  $insere_conteudo = mysqli_query($conexao, "INSERT INTO conteudo (nome_conteudo, descricao, pdf, capa, id_setor) 
        VALUES ('$nome_conteudo', '$descricao', '$pdf_destino', '$capa_destino', '$id_setor')");

  if ($insere_conteudo) {
    echo '        <div class="loader-wrapper">';
    echo '            <div class="lds-ring">';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '            </div>';
    echo '        </div>';
    echo '        <div class="card card-authentication1 mx-auto my-5 return">';
    echo '            <div class="card-body centralizar">';
    echo '                <div class="card-content p-2">';
    echo '                    <h3>Conteudo cadastrado com sucesso <i class="fa-regular fa-circle-check" style="color: #ffffff;"></i></h3><br>';
    echo '                    <center><button  type="submit" class="btn btn-light px-5"><a href="../html/home_adm.php">Voltar a página inicial</a></button></center>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
  } else {
    echo '    </div>';
    echo '        <div class="loader-wrapper">';
    echo '            <div class="lds-ring">';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '                <div></div>';
    echo '            </div>';
    echo '        </div>';
    echo '        <div class="card card-authentication1 mx-auto my-5 return">';
    echo '            <div class="card-body centralizar">';
    echo '                <div class="card-content p-2">';
    echo '                    <h3>Algo deu errado,tente novamente<i class="fa-regular fa-circle-check" style="color: #ffffff;"></i></h3><br>';
    echo '                    <center><button  type="submit" class="btn btn-light px-5"><a href="">Voltar a página inicial</a></button></center>';
    echo '                </div>';
    echo '            </div>';
    echo '        </div>';
    echo '    </div>';
  }
  ?>

  <!--Start Back To Top Button-->
  <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
  <!--End Back To Top Button-->

  <!--start color switcher-->
  <!--end color switcher-->

  </div><!--wrapper-->

  <!-- Bootstrap core JavaScript-->
  <!-- Bootstrap core JavaScript-->
  <script src="../../../assets/js/jquery.min.js"></script>
  <script src="../../../assets/js/popper.min.js"></script>
  <script src="../../../assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="../../../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="../../../assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="../../../assets/js/app-script.js"></script>
</body>

</html>