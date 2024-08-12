<?php
  include("../html/protect_funcionario.php");
  include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Conteúdos</title>
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
  <style>
    h3 {
      margin-top: 10px;
      margin-bottom: 40px;
    }

    .card-conteudos {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
    }

    .card {
      border-radius: 5%;
      margin-right: 40px;
      margin-left: 40px;
    }

    .card img {
      border-radius: ;
      width: 100%;
      height: 200px;
    }


    .card-conteudos {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      width: 19rem;
      height: 22.8rem;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    /* Adiciona um efeito de elevação ao passar o mouse */
    .card:hover {
      transform: translateY(-5px);
    }

    .card-img-top {
      width: 100%;
      /* Faz com que a imagem ocupe toda a largura do card */
      height: 12rem;
      /* Altura fixa para a imagem (ajuste conforme necessário) */
      object-fit: cover;
      /* Garante que a imagem se ajuste ao tamanho do contêiner */
    }

    .card-body {
      padding: 15px;
      
      /* Adiciona um pouco de padding ao conteúdo do card */
    }

    .card-body h4{
      font-size: 14px;
      
      /* Adiciona um pouco de padding ao conteúdo do card */
    }

    .card a:hover{
      text-decoration: none;
    }

    .card-link {
      color: #fff;
      /* Cor do link */
      text-decoration: none;
      /* Remove o sublinhado do link */
    }

    .card-link:hover {
      text-decoration: underline;
      /* Adiciona sublinhado ao passar o mouse */
    }

    /* Assegura que a largura do contêiner e o espaçamento estejam corretos */
    .card-conteudos::after {
      content: "";
      flex: auto;
      /* Permite que o espaço restante seja ajustado */
    }

    @media (max-width: 1199px) {
      .card-conteudos {
        justify-content: space-around;
        /* Ajusta o alinhamento para telas menores */
      }
    }
  </style>
</head>

<body class="bg-theme bg-theme1">

  <!-- start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- end loader -->

  <!-- Start wrapper-->
  <div id="wrapper">

    <!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
        <a href="home_adm.html">
          <img src="../../imagens/GE.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Gestrator</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">

        <li>
          <a href="../html/home_funcionario copy.php">
            <i class="fa-solid fa-chart-line" style="color: #9e9e9e;"></i> <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a
            href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&emr=1&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&ifkv=AdF4I77H6Q8kDjrou1wIGuHz3S3_9WHl1Z6w3HQ5MAbJVDPoIZHRKIQUAYS0YHfymJmHEtgj8rOdfQ&osid=1&passive=1209600&service=cl&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S268491357%3A1720720457775498&ddm=0">
            <i class="zmdi zmdi-calendar-check"></i> <span>Calendário</span>
          </a>
        </li>

        <li>
          <a href="verConteudo.php">
            <i class="fa-solid fa-book" style="color: #9e9e9e;"></i> <span>Conteúdo</span>
          </a>
        </li>



        <li>
          <a href="../html/profile_funcionario.php">
            <i class="zmdi zmdi-face"></i> <span>Perfil</span>
          </a>
        </li>

        <li>
          <a href="../html/index.html">
            <i class="fa-solid fa-right-from-bracket" style="color: #9e9e9e;"></i> <span>Sair</span>
          </a>
        </li>

      </ul>

    </div>
    <!--End sidebar-wrapper-->


    <!--Start topbar header-->
    <header class="topbar-nav">
      <nav class="navbar navbar-expand fixed-top">
        <ul class="navbar-nav mr-auto align-items-center">
          <li class="nav-item">
            <a class="nav-link toggle-menu" href="javascript:void();">
              <i class="icon-menu menu-icon"></i>
            </a>
          </li>

        </ul>
        
        <ul class="navbar-nav align-items-center right-nav-link">
         
        
   
  <?php


$usuario = $_SESSION['usuario']; 

$query_funcionario = mysqli_query($conexao, "SELECT f.id_funcionario, f.email, f.foto_funcionario, s.nome_setor 
FROM funcionario f 
JOIN setor s ON f.id_setor = s.id_setor 
WHERE f.nome_funcionario = '$usuario'");

if ($query_funcionario->num_rows > 0) {
  $row = $query_funcionario->fetch_assoc(); // Pega o resultado da consulta
  $id_funcionario = $row['id_funcionario'];
  $nome_setor = $row['nome_setor'];
} else {
  // Caso não haja resultados, defina valores padrão ou trate o erro
  $row = [
    'email' => 'Email não encontrado',
    'foto_funcionario' => 'path_to_default_image.jpg', // Imagem padrão se não encontrar a foto
    'nome_setor' => 'Setor não encontrado'
  ];
}
?>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
    <span class="user-profile">
      <img src="<?php echo $row['foto_funcionario']; ?>" class="img-circle" alt="user avatar">
    </span>
  </a>
  <ul class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-item user-details">
      <a href="javaScript:void();">
        <div class="media">
          <div class="avatar">
            <img class="align-self-start mr-3" src="<?php echo $row['foto_funcionario']; ?>" alt="user avatar">
          </div>
          <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $_SESSION['usuario']; ?></h6>
            <p class="user-subtitle"><?php echo $row['email']; ?></p>
            <p class="user-subtitle"><?php echo $row['nome_setor']; ?></p>

            <li class="dropdown-divider"></li>
            <a href="profile_adm.html"><li class="dropdown-item"><i class="icon-wallet mr-2"></i> Perfil</li></a>
            <li class="dropdown-divider"></li>
            <a href="../php/logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Sair</li></a>
          </div>
        </div>
      </a>
    </li>
  </ul>
</li>

        </ul>
      </nav>
    </header>
    <!--End topbar header-->
    <div class="clearfix"></div>
  </div>



  <div class="content-wrapper">

    <div class="card-conteudos">

      <!-- Conteúdo principal dos produtos -->
      <?php
      include_once ('conexao.php');
      $sql = "SELECT * FROM conteudo";
      $resultado = mysqli_query($conexao, $sql);

      if (mysqli_num_rows($resultado) > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
          echo "<div class='card'>";
          echo "    <img class='card-img-top' src='" . $row['capa'] . "' alt='Card image cap'>";
          echo "    <div class='card-body'>";
          echo "    <h5>" . $row['nome_conteudo'] . "</h5>";
          echo "    <hr>";
          echo "    <h4>" . $row['descricao'] . "</h4>";
          echo "    <hr>";
          echo "       <a href='" . $row['pdf'] . "' class='card-link' target='_blank'>Abrir PDF</a>";
          echo "    </div>";
          echo "</div>";
        }
      } else {
        echo "<center><p>Nenhum produto encontrado.</p></center>";
      }
      ?>


      </form>
    </div>
  </div>

  <!-- Start footer-->
  <!-- <footer class="footer">
    <div class="container">
      <div class="text-center">
        © 2022 Gestrator. Criado com amor por Grupo GE. Todos os direitos reservados.
      </div>
    </div>
  </footer> -->
  <!--End footer -->

  </div>
  <!--End wrapper-->

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>

  <!-- simplebar js -->
  <script src="../../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="../../assets/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="../../assets/js/app-script.js"></script>

  <!-- Chart js -->
  <script src="../../assets/plugins/Chart.js/Chart.min.js"></script>

  <!-- Vector map JavaScript -->
  <script src="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
  <script src="../../assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
  <!-- Chart js -->
  <script src="../../assets/plugins/Chart.js/Chart.min.js"></script>

  <!-- Index js -->
  <script src="../../assets/js/index.js"></script>

  <!-- Apex Chart -->
  <script src="../../assets/plugins/apexcharts/apexcharts.min.js"></script>
  <script src="../../assets/plugins/apexcharts/apexchart-custom.js"></script>

  <!-- Easy Pie Chart -->
  <script src="../../assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>

</body>

</html>