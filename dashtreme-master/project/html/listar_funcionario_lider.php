<?php
  include("protect_rh.php");
  include_once("../php/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Listagem de Funcionários</title>
  <!-- loader-->
  <link href="../../assets/css/pace.min.css" rel="stylesheet"/>
  <script src="../../assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="../../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="../../assets/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="../../assets/css/app-style.css" rel="stylesheet"/>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  

  <!-- Custom Styles -->
  <style>
    .search-bar {
  position: relative;
  display: flex;
  align-items: center;
}

.search-bar input[type="text"] {
  width: 100%;
  padding: 10px;
  padding-right: 40px; /* Espaço para o ícone */
  border: 1px solid #ccc;
  border-radius: 5px;
}

.search-bar button {
  position: absolute;
  right: 10px;
  background: none;
  border: none;
  cursor: pointer;
  color: #333;
  font-size: 16px;
}

.search-bar button:focus {
  outline: none;
}

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 15px;
      text-align: left;
    }

    th {
      background-color: transparent;
    }

    .action-buttons {
      display: flex;
      gap: 10px;
    }

    .action-buttons form {
      display: inline-block;
    }

    .action-buttons button {
      background: none;
      border: none;
      cursor: pointer;
    }

    .action-buttons .fa-pen-to-square {
      color: #38a9ff;
    }

    .action-buttons .fa-trash {
      color: #d33131;
    }
  </style>
</head>

<body class="bg-theme bg-theme1">
  <!-- Start loader -->
  <div id="pageloader-overlay" class="visible incoming">
    <div class="loader-wrapper-outer">
      <div class="loader-wrapper-inner">
        <div class="loader"></div>
      </div>
    </div>
  </div>
  <!-- End loader -->

  <!-- Start wrapper -->
  <div id="wrapper">

    <!-- Start sidebar-wrapper -->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    <div class="brand-logo">
     <a href="home_rh copy.php">
     <img src="../imagens/GE.png" class="logo-icon" alt="logo icon" >
      <h5 class="logo-text">Gestrator</h5>
    </a>
  </div>
  <ul class="sidebar-menu do-nicescrol">
  
     <li>
       <a href="home_rh copy.php">
         <i class="fa-solid fa-chart-line" style="color: #9e9e9e;"></i> <span>Dashboard</span>
       </a>
     </li>
  
     <li>
       <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&emr=1&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&ifkv=AdF4I77H6Q8kDjrou1wIGuHz3S3_9WHl1Z6w3HQ5MAbJVDPoIZHRKIQUAYS0YHfymJmHEtgj8rOdfQ&osid=1&passive=1209600&service=cl&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S268491357%3A1720720457775498&ddm=0">
         <i class="zmdi zmdi-calendar-check"></i> <span>Calendário</span>
       </a>
     </li>
     <li>
     <li>
       <a href="relatorio_lider.php">
         <i class="zmdi zmdi-assignment" style="color: #9e9e9e;"></i> <span>Relatório</span>
       </a>
     </li>
     <li>
      <a href="registrar_servico_lider.php">
        <i class="fa-solid fa-list-check" style="color: #9e9e9e;"></i> <span>Serviço</span>
      </a>
    </li>
    <li>
      <a href="cadastrar_funcionario_lider.php">
        <i class="fa-solid fa-user" style="color: #9e9e9e;"></i> <span>Funcionário</span>
      </a>
    </li>
    <li>
      <a href="listar_funcionario_lider.php">
        <i class="zmdi zmdi-accounts-add"></i><span>Listar Funcionários</span></a> 
      </a>
    </li>
  
     <li>
       <a href="profile_lider.php">
         <i class="zmdi zmdi-face"></i> <span>Perfil</span>
       </a>
     </li>
  
     <li>
       <a href="index.html">
         <i class="fa-solid fa-right-from-bracket" style="color: #9e9e9e;"></i> <span>Sair</span>
       </a>
     </li>
  
   </ul>
  
  </div>
    <!-- End sidebar-wrapper -->

    <!-- Top bar -->
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
                      <a href="profile_lider.php"><li class="dropdown-item"><i class="icon-wallet mr-2"></i> Perfil</li></a>
                      <li class="dropdown-divider"></li>
                      <a href="php/logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Sair</li></a>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </li>
        </li>
      </ul>
    </nav>
  </header>
     <!--End topbar header-->
    <!-- Content Wrapper -->
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row mt-3 centralizar">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h1 class='card-title'>Lista de Funcionários</h1>
                <div class="container">
                  <?php
                  include_once ("../php/conexao.php");

                  // Verifica se há um termo de pesquisa
                  if (isset($_GET['pesquisa']) && !empty($_GET['pesquisa'])) {
                      $pesquisa_term = $_GET['pesquisa'];
                      // Consulta com junção entre as tabelas `funcionario` e `setor`
                      $sql = "SELECT funcionario.nome_funcionario, funcionario.cargo, setor.nome_setor, funcionario.id_funcionario 
                              FROM funcionario
                              INNER JOIN setor ON setor.id_setor = funcionario.id_setor
                              WHERE funcionario.nome_funcionario LIKE '%$pesquisa_term%'";
                  } else {
                      // Consulta sem filtro de pesquisa
                      $sql = "SELECT funcionario.nome_funcionario, funcionario.cargo, setor.nome_setor, funcionario.id_funcionario 
                              FROM funcionario
                              INNER JOIN setor ON setor.id_setor = funcionario.id_setor";
                  }

                  $resultado = mysqli_query($conexao, $sql);

                  if ($resultado) {
                  ?>
                  <form method='GET' action=''>
                  <div class="search-bar">
                      <input type='text' id='search' name='pesquisa' placeholder='Pesquisar...'
                        value='<?php echo isset($_GET["pesquisa"]) ? $_GET["pesquisa"] : ""; ?>'>
                      <button type='submit'><i class="fa fa-search"></i></button>
                    </div>
                  </form>
                  <br>
                  <div id="results">
                    <?php
                    if (mysqli_num_rows($resultado) > 0) {
                      echo "<table>";
                      echo "<tr>
                              <th>Nome Completo</th>
                              <th>Setor</th>
                              <th>Cargo</th>
                              <th>Ações</th>
                            </tr>";
                      while ($row = mysqli_fetch_assoc($resultado)) {
                          echo "<tr>";
                          echo "<td>" . $row['nome_funcionario'] . "</td>";
                          echo "<td>" . $row['nome_setor'] . "</td>";
                          echo "<td>" . $row['cargo'] . "</td>";
                          echo "<td class='action-buttons'>";
                          // Formulário para atualizar funcionário
                          echo "<form action='php/atualizar_funcionario.php' method='post'>";
                          echo "<input type='hidden' name='id' value='" . $row['id_funcionario'] . "'>";
                          echo "<button type='submit' class='fa-regular fa-pen-to-square'></button>";
                          echo "</form>";
                          // Formulário para excluir funcionário
                          echo "<form action='php/excluir_funcionario.php' method='post' method='post'>";
                          echo "<input type='hidden' name='id' value='" . $row['id_funcionario'] . "'>";
                          echo "<button type='submit' class='fa-solid fa-trash'></button>";
                          echo "</form>";
                          echo "</td>";
                          echo "</tr>";
                      }
                      echo "</table>";
                    } else {
                        echo "Não há registros na tabela.";
                    }
                    ?>
                  </div>
                  <?php
                  } else {
                      echo "Erro na consulta: " . mysqli_error($conexao);
                  }



    // Fecha a conexão
    mysqli_close($conexao);

    ?>

            
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Start overlay -->
      <div class="overlay toggle-menu"></div>
      <!-- End overlay -->
    </div>
    <!-- End content-wrapper -->

    <!-- Start Back To Top Button -->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <!-- End Back To Top Button -->

    <!-- Start footer -->
    <!-- End footer -->

    <!-- Start color switcher -->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-brush"></i>
      </div>
      <div class="right-sidebar-content">
        <p class="mb-0">Gaussion Texture</p>
        <hr>
        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>
        <p class="mb-0">Gradient Background</p>
        <hr>
        <ul class="switcher">
          <li id="theme7"></li>
          <li id="theme8"></li>
          <li id="theme9"></li>
          <li id="theme10"></li>
          <li id="theme11"></li>
          <li id="theme12"></li>
          <li id="theme13"></li>
          <li id="theme14"></li>
          <li id="theme15"></li>
        </ul>
      </div>
    </div>
    <!-- End color switcher -->
  </div>
  <!-- End wrapper -->

  <!-- Scripts -->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="../../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="../../assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="../../assets/js/app-script.js"></script>

  <!-- Script for password validation -->
  <script>
    function confereSenha() {
      const senha = document.querySelector('input[name= senha]');
      const confirma = document.querySelector('input[name=confirma]');

      if (confirma.value === senha.value) {
        confirma.setCustomValidity('');
      } else {
        confirma.setCustomValidity('As senhas não conferem');
      }
    }
  </script>

  <!-- Script for showing/hiding password -->
  <script>
    function mostrarSenha(id) {
      var campo = document.getElementsByName(id)[0];
      var tipo = campo.getAttribute('type');

      if (tipo === 'password') {
        campo.setAttribute('type', 'text');
        document.getElementById('olho' + id.charAt(0).toUpperCase() + id.slice(1)).classList.remove('fa-eye');
        document.getElementById('olho' + id.charAt(0).toUpperCase() + id.slice(1)).classList.add('fa-eye-slash');
      } else {
        campo.setAttribute('type', 'password');
        document.getElementById('olho' + id.charAt(0).toUpperCase() + id.slice(1)).classList.remove('fa-eye-slash');
        document.getElementById('olho' + id.charAt(0).toUpperCase() + id.slice(1)).classList.add('fa-eye');
      }
    }
  </script>
</body>

</html>
