<html>
  
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Cadastro Feito</title>
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
  
<?php

include_once("conexao.php");

$id_funcionario = mysqli_real_escape_string($conexao, $_POST['id']);

$exclui = mysqli_query($conexao, "DELETE FROM funcionario WHERE id_funcionario = '$id_funcionario'");



if ($exclui) {
  
echo '<div id="pageloader-overlay" class="visible incoming">
        <div class="loader-wrapper-outer">
            <div class="loader-wrapper-inner">
                <div class="loader"></div>
            </div>
        </div>
    </div>
    <!-- end loader -->

    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="loader-wrapper">
            <div class="lds-ring">
                <div></div>
                <div></div>
                <div></div>
                <div></div> 
            </div>
        </div>
        <div class="card card-authentication1 mx-auto my-5 return">
            <div class="card-body centralizar">
                <div class="card-content p-2">
                    <h3>Serviço realizado com sucesso  <i class="fa-regular fa-circle-check" style="color: #ffffff;"></i></h3><br>
                 <center><button type="submit" class="btn btn-light px-5"><a href="../html/home_adm.php">Voltar a pagina inicial</a></button></center>
                </div>
            </div>
        </div>
    </div>';


} else {
  echo "<div class='retornos'>";
  echo "<h2> Ocorreu um erro ao inserir os dados. Por favor, tente novamente. </h2>";
  echo "</div>";
}

mysqli_close($conexao);
?>



<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

    <!--start color switcher--> 
    <!--end color switcher-->

  

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