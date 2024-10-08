<?php
  include("protect_gerente.php");
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
  <title>Registrar Serviço</title>
  <!-- loader-->
  <link href="../../assets/css/pace.min.css" rel="stylesheet"/>
  <script src="../../assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="../../assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
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
  

  <style>
     
  /* #input-2 option {
    background-color: white; 
    color: #212529; 
  } */
  </style>

</head>


<body class="bg-theme bg-theme1">
 
    <!-- Start wrapper-->
    <div id="wrapper">
 
      <!--Start sidebar-wrapper-->
      <!--Start sidebar-wrapper-->
  <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
      <div class="brand-logo">
       <a href="home_adm.html">
        <img src="../../imagens/GE.png" class="logo-icon" alt="logo icon" >
        <h5 class="logo-text">Gestrator</h5>
      </a>
    </div>
   <ul class="sidebar-menu do-nicescrol">

      <li>
        <a href="home_adm.php">
          <i class="fa-solid fa-chart-line" style="color: #9e9e9e;"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&emr=1&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&ifkv=AdF4I77H6Q8kDjrou1wIGuHz3S3_9WHl1Z6w3HQ5MAbJVDPoIZHRKIQUAYS0YHfymJmHEtgj8rOdfQ&osid=1&passive=1209600&service=cl&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S268491357%3A1720720457775498&ddm=0">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendário</span>
        </a>
      </li>


      <li>
        <a href="conteudo_adm.php">
         <i class="fa-solid fa-book" style="color: #9e9e9e;"></i> <span>Conteúdo</span>
        </a>
      </li>

      <li>
        <a href="cadastrar_funcionario_adm.php">
          <i class="fa-solid fa-user" style="color: #9e9e9e;"></i> <span>Funcionário</span>
        </a>
      </li>
      <li>
      <a href="listar_funcionario.php">
        <i class="zmdi zmdi-accounts-add"></i><span>Listar Funcionários</span></a> 
      </a>
    </li>
      <li>
        <a href="registrar_servico_adm.php">
          <i class="fa-solid fa-list-check" style="color: #9e9e9e;"></i> <span>Serviço</span>
        </a>
      </li>      
      <li>
        <a href="relatorio_adm.php">
          <i class="zmdi zmdi-assignment" style="color: #9e9e9e;"></i> <span>Relatório</span>
        </a>
      </li>

      <li>
        <a href="profile_adm.php">
          <i class="zmdi zmdi-face"></i> <span>Perfil</span>
        </a>
      </li>

      <li>
        <a href="../php/logout.php">
          <i class="fa-solid fa-right-from-bracket" style="color: #9e9e9e;"></i> <span>Sair</span>
        </a>
      </li>

    </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
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
	
   <div class="content-wrapper">
     <div class="container-fluid">
 
     <div class="row mt-3 centralizar">
       <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
            <div class="card-title">Registrar Serviço</div>
            <hr>
             <form method="post" action="../php/registrar_servico_adm.php">

            <div class="form-group">
             <label for="input-1">Nome do Serviço</label>
             <input type="text" class="form-control" id="input-1" placeholder="Nome do Serviço" name="nome">
            </div>
            <div class="form-group">
              <label for="input-2">Setor</label>
              <div class="custom-dropdown">
                <select id="input-2" class="form-control" name="setor">
                  <option value="" disabled selected hidden>Selecione um Setor</option>
                  <option value="1">Administrativo</option>    <!-- Acrescentei novas class e um css la no app-style, para que o options fique da forma correta -->
                  <option value="2">Comercial</option>
                  <option value="3">Marketing</option>
                  <option value="4">Financeiro</option>
                  <option value="5">Compras</option>
                  <option value="6">Recursos Humanos</option>
                  <option value="7">Operações</option>
                </select>
                 <div class="arrow-down"></div>
                </div>
              </div>

              <div class="form-group">
                <label for="input-2">Situação</label>
                <div class="custom-dropdown">
                  <select id="input-2" class="form-control" name="situacao">
                    <option value="" disabled selected hidden>Selecione a situação</option>
                    <option value="Concluido">Concluido</option>    <!-- Acrescentei novas class e um css la no app-style, para que o options fique da forma correta -->
                    <option value="Em andamento">Em andamento</option>
                    <option value="Pendente">Pendente</option>
                    <option value="Não iniciado">Não iniciado</option>
                  </select>
                   <div class="arrow-down"></div>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input-2">Prioridade</label>
                  <div class="custom-dropdown">
                    <select id="input-2" class="form-control" name="prioridade">
                      <option value="" disabled selected hidden>Selecione uma prioridade</option>
                      <option value="Alta">Alta</option>
                      <option value="Média">Média</option>
                      <option value="Baixa">Baixa</option>
                    </select>
                     <div class="arrow-down"></div>
                    </div>
                  </div>
            
            <div class="form-group">
              <label for="input-3">Data de ínicio</label>
              <input type="date" class="form-control date-input" id="input-3" placeholder="Selecione a data" name="data_inicio"> 
            </div>    
            <div class="form-group">
             <label for="input-3">Prazo de entrega</label>
             <input type="date" class="form-control date-input" id="input-3" placeholder="Selecione a data" name="data_final"> 
            </div>

            <div class="form-group">
              <label for="input-content-description">Descrição do serviço</label>
              <textarea class="form-control" id="input-content-description"
                  name="descricao" rows="3"
                  placeholder="Digite a descrição do serviço" required></textarea>
          </div>
            
            <div class="form-group">
            <center> <button type="submit" class="btn btn-light px-5">Registrar Serviço</button></center>
           </div>
           </form>
          </div>
          </div>
       </div>

       <!--start color switcher-->
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
  <!--end color switcher-->


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


  
</body>
</html>
