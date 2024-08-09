<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Listar Relatório</title>

  <!-- Loader -->
  <link href="../../assets/css/pace.min.css" rel="stylesheet" />
  <script src="../../assets/js/pace.min.js"></script>

  <!-- Favicon -->
  <link rel="icon" href="../../assets/images/favicon.ico" type="image/x-icon">

  <!-- Stylesheets -->
  <link href="../../assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/animate.css" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="../../assets/css/sidebar-menu.css" rel="stylesheet" />
  <link href="../../assets/css/app-style.css" rel="stylesheet" />
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
      
      gap: 30px;
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

    #button_voltar_relatorio{
        align-itens: center !important; 
        margin-left: 95px;
    }

    .fa-regular{
        color: #38a9ff;
    }

    .card-body{
        width: 1000px;
        align-itens: center;
    }

    .card {
        width: 1000px;
        align-itens: center;
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
        <a href="home_adm.html">
          <img src="../../imagens/GE.png" class="logo-icon" alt="logo icon">
          <h5 class="logo-text">Gestrator</h5>
        </a>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li>
          <a href="home_rh.php">
            <i class="fa-solid fa-chart-line" style="color: #9e9e9e;"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&emr=1&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&ifkv=AdF4I77H6Q8kDjrou1wIGuHz3S3_9WHl1Z6w3HQ5MAbJVDPoIZHRKIQUAYS0YHfymJmHEtgj8rOdfQ&osid=1&passive=1209600&service=cl&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S268491357%3A1720720457775498&ddm=0">
            <i class="zmdi zmdi-calendar-check"></i> <span>Calendário</span>
          </a>
        </li>
        <li>
          <a href="relatorio_lider.html">
            <i class="zmdi zmdi-assignment" style="color: #9e9e9e;"></i> <span>Relatório</span>
          </a>
        </li>
        <li>
          <a href="registrar_servico_lider.html">
            <i class="fa-solid fa-list-check" style="color: #9e9e9e;"></i> <span>Serviço</span>
          </a>
        </li>
        <li>
          <a href="cadastrar_funcionario_lider.html">
            <i class="fa-solid fa-user" style="color: #9e9e9e;"></i> <span>Funcionário</span>
          </a>
        </li>
        <li>
          <a href="listar_funcionario.php">
            <i class="zmdi zmdi-accounts-add"></i><span>Listar Funcionários</span>
          </a>
        </li>
        <li>
          <a href="profile_lider.html">
            <i class="zmdi zmdi-face"></i> <span>Perfil</span>
          </a>
        </li>
        <li>
          <a href="../index.html">
            <i class="fa-solid fa-right-from-bracket" style="color: #9e9e9e;"></i> <span>Sair</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- End sidebar-wrapper -->

    <!-- Start topbar header -->
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
    

    <?php

    include_once('conexao.php');

    // Captura os dados do formulário
    $situacao = isset($_POST['situacao']) ? $_POST['situacao'] : '';
    $prioridade = isset($_POST['prioridade']) ? $_POST['prioridade'] : '';
    $setor = isset($_POST['setor']) ? $_POST['setor'] : '';
    $data_inicio = isset($_POST['data_inicio']) ? $_POST['data_inicio'] : '';
    $data_final = isset($_POST['data_final']) ? $_POST['data_final'] : '';

    // Construindo a consulta SQL com base nos filtros
    $sql = "SELECT servico.*, setor.nome_setor FROM servico
            INNER JOIN setor ON setor.id_setor = servico.id_setor
            WHERE 1=1";


    $params = [];
    $types = "";

    // Adiciona condições à consulta conforme os filtros preenchidos
    if ($situacao !== '') {
        $sql .= " AND servico.situacao = ?";
        $params[] = $situacao;
        $types .= "s";
    }

    if ($prioridade !== '') {
        $sql .= " AND servico.prioridade = ?";
        $params[] = $prioridade;
        $types .= "s";
    }

    if ($setor !== '') {
        $sql .= " AND servico.id_setor = ?";
        $params[] = $setor;
        $types .= "s";
    }

    if ($data_inicio !== '') {
        $sql .= " AND servico.data_criada >= ?";
        $params[] = $data_inicio;
        $types .= "s";
    }

    if ($data_final !== '') {
        $sql .= " AND servico.data_final <= ?";
        $params[] = $data_final;
        $types .= "s";
    }

    // Prepara a consulta
    $stmt = $conexao->prepare($sql);

    if ($stmt === false) {
        die("Erro na preparação da consulta: " . $conexao->error);
    }

    // Vincula parâmetros, se houver
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }

    // Executa a consulta
    $stmt->execute();

    // Obtém o resultado
    $result = $stmt->get_result();

    ?>

<div class="content-wrapper">
      <div class="container-fluid">
        <div class="row mt-3 centralizar">
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body">
                <h1 class='card-title'>Lista de Serviço</h1>
                <div class="container">

    <div id="results">

        <?php
    // Verifica se há resultados e os exibe
    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr>
                <th>ID</th>
                <th>Serviço</th>
                <th>Situação</th>
                <th>Prioridade</th>
                <th>Setor</th>
                <th>Data de Início</th>
                <th>Data Final</th>
                <th>Abrir PDF</th>
            </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id_servico']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nome_servico']) . "</td>";
            echo "<td>" . htmlspecialchars($row['situacao']) . "</td>";
            echo "<td>" . htmlspecialchars($row['prioridade']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nome_setor']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_criada']) . "</td>";
            echo "<td>" . htmlspecialchars($row['data_final']) . "</td>";
            echo "<center><td class='action-buttons'></center>";
            // Formulário para atualizar funcionário
            echo "<form action='gerar_pdf_relatorio/gerar_pdf.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row['id_servico'] . "'>";
            echo "<button type='submit' class='fa-regular fa-file-pdf'></button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhuma tarefa encontrada.";
    }

    echo "<div class='form-group row'>";
    echo "<label class='col-lg-3 col-form-label form-control-label'></label>";
    echo "<a class='btn btn-light px-5' id='button_voltar_relatorio' href='../html/relatorio_adm.php' target='_self'>Voltar</a>";
    echo "</div>";

    // Fecha a conexão com o banco de dados
    $conexao->close();

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


    </div>


  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/plugins/simplebar/js/simplebar.js"></script>
  <script src="../../assets/js/sidebar-menu.js"></script>
  <script src="../../assets/js/app-script.js"></script>


</body>
</html>