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
  <title>Gestrator Gerente</title>
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
  .modal-content {
    background-color: #004085 !important;
    color: white;
  }

  .btn-custom-close {
    background-color: #6c757d; /* Cor personalizada para o botão "Close" */
    border-color: #6c757d;
  }

  .btn-custom-save {
    background-color: #3c8dbc; /* Cor personalizada para o botão "Save changes" */
    border-color: #3c8dbc;
  }

  .btn-custom-close:hover,
  .btn-custom-save:hover {
    opacity: 0.8; /* Efeito de opacidade ao passar o mouse */
    background-color: #004085;
    border: none;
  }

  .btn-close-custom {
    background: none;
    border: none;
    color: white;
    font-size: 1.5rem;
  }

  .btn-close-custom:hover {
    color: #ccc;
  }

  .teste{
    background-color: #F2B705;
  }
  .teste1{
    background-color: #04BF68;
  }
  .teste2{
    background-color: #D93D59;
  }
  .teste3{
    background-color: gray;
  }

  .alta {
    background-color: #5D55DB;

  }
  .media3 {
      background-color: #450F91;

  }
  .baixa {
      background-color: #5E9FF2;
  }

  .w-120{
    width: 400px !important;
  }
  .w-100{
    width: 200px !important;
  }
  .w-50{
    width: 100px !important;
  }
  .w-75{
    width: 150px !important;
  }

  .w-200{
    width: 250px !important;
  }

  table th{
    padding: 10px 0px !important;
    font-size: 14px !important;
    border: 1px solid rgba(196, 196, 196, 0.473) !important;
    text-align: center;
  }

  table td{
    padding: 3px !important;
    text-align: center;
    border: 1px solid rgba(196, 196, 196, 0.473) !important;
  }

  table td:first-child, table th:first-child {
    border-left: none !important;
  }

  table td:last-child, table th:last-child {
    border-right: none !important;
  }

  table td i:hover{
    transform: translateY(-3px);
    transition: 0.5s;
    cursor: pointer;
  }
  .sem-espaco{
    text-align: left !important;
  }

  .este-mes{
    color: #80e935;

  }

  .proximo-mes{
    color: #85d2ff;

  }

  .btn{
    color: white !important;


  }
    

  .dropdown-menu {
            background-color: gray; /* Cor de fundo branca */
            border: 1px solid #ddd;  /* Borda cinza clara */
        }
        .dropdown-item {
            color: #333; /* Cor do texto */
        }
        .dropdown-item:hover {
            background-color: black; /* Cor de fundo ao passar o mouse */
            color: #007bff; /* Cor do texto ao passar o mouse */
        }





/* styles.css popup */
.popup {
    display: none; /* Esconde o popup por padrão */
    position: absolute; /* Permite posicionar o popup em relação ao ícone */
    z-index: 1000; /* Fica acima do conteúdo da página */
}

.popup-content {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    text-align: center;
    width: 400px;
    position: relative; /* Para que o botão de fechar possa ser posicionado */
    max-width: 90%;
}

.popup-arrow {
    position: absolute;
    top: -10px; /* Ajuste a posição vertical da seta */
    left: 50%; /* Centraliza a seta horizontalmente em relação ao popup */
    margin-left: -10px; /* Move a seta para a esquerda para centralizar */
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #fff; /* Cor da seta, igual ao fundo do popup */
}

#search-bar {
    width: 80%;
    padding: 8px;
    margin-top: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    max-width: 600px;
}

.close-btn {
    background: none;
    border: none;
    font-size: 30px;
    cursor: pointer;
    position: absolute;
    top: 10px;
    right: 10px;
    color: #333;
}
 
/* Sobreposição de tela */
.overlay {
    position: fixed;
    top: 0;
    right: 0;
    width: 400px; /* Largura da sobreposição */
    height: 100%;
    background: #fff; /* Fundo branco */
    display: none;
    align-items: center;
    justify-content: center;
    z-index: 1000;
    transition: transform 0.3s ease;
    transform: translateX(100%); /* Inicialmente fora da tela */
}

.overlay.show {
    display: flex;
    transform: translateX(0); /* Quando visível, posiciona a sobreposição na tela */
}

.overlay-content {
    background: #fff;
    padding: 25px;
    border-radius: 8px;
    width: 100%;
    box-sizing: border-box;
    height: 100%;
    display: flex;
    flex-direction: column;
    color: #000; /* Cor do texto preto */
}

h2, p {
    color: #000; /* Garante que todos os textos sejam pretos */
}

.chat-body {
    flex: 1;
    overflow-y: auto; /* Rolagem vertical se necessário */
    padding-bottom: 60px; /* Espaço para a área de entrada de texto ou botões de enviar */
}

.card-header img {
    margin-right: 10px;
}

.chat-message img {
    width: 30px;
    height: 30px;
    border-radius: 50%;
}

.chat-message {
    background-color: #e1e1e1;
    border-radius: 10px;
    padding: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
    flex-direction: column;
    margin-bottom: 50px;
}

.message-input {
    display: flex;
    gap: 10px;
    border-top: 1px solid #ddd;
    padding-top: 10px;
}

.message-input input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.message-input button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.message-input button:hover {
    background-color: #0056b3;
}

.close-btn {
    position: absolute;
    top: 20px;
    left: -50px; /* Ajuste para posicionar o botão fora da sobreposição */
    background: #fff;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    font-size: 18px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
}

.close-btn i {
    color: #333; /* Cor do ícone do botão de fechar */
}

i.fa-comment {
    cursor: pointer;
    font-size: 24px;
}

.text-principal {
    margin-top: 20px;
    text-align: left;
}

/* GRAFICO */
.chart-container-2 {
    position: relative;
    height: 450px !important; /* Ajuste a altura conforme necessário */
    width: 820px ; /* Faz o gráfico ocupar 100% da largura disponível */
    margin-left: 20%;

}

.tamanho{
  height: 530px;
}

  </style>


</head>

<body class="bg-theme bg-theme1">
 
<!-- Start wrapper-->
 <div id="wrapper">
 
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
        <a href="home_adm.html">
          <i class="fa-solid fa-chart-line" style="color: #9e9e9e;"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="https://accounts.google.com/v3/signin/identifier?continue=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&emr=1&followup=https%3A%2F%2Fcalendar.google.com%2Fcalendar%2Fu%2F0%2Fr&ifkv=AdF4I77H6Q8kDjrou1wIGuHz3S3_9WHl1Z6w3HQ5MAbJVDPoIZHRKIQUAYS0YHfymJmHEtgj8rOdfQ&osid=1&passive=1209600&service=cl&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S268491357%3A1720720457775498&ddm=0">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendário</span>
        </a>
      </li>


      <li>
        <a href="conteudo_adm.html">
         <i class="fa-solid fa-book" style="color: #9e9e9e;"></i> <span>Conteúdo</span>
        </a>
      </li>

      <li>
        <a href="cadastrar_funcionario_adm.html">
          <i class="fa-solid fa-user" style="color: #9e9e9e;"></i> <span>Funcionário</span>
        </a>
      </li>
      <li>
      <a href="editar_funcionario.html">
        <i class="zmdi zmdi-accounts-add"></i><span>Listar Funcionários</span></a> 
      </a>
    </li>
      <li>
        <a href="registrar_servico_adm.html">
          <i class="fa-solid fa-list-check" style="color: #9e9e9e;"></i> <span>Serviço</span>
        </a>
      </li>      
      <li>
        <a href="relatorio_adm.html">
          <i class="zmdi zmdi-assignment" style="color: #9e9e9e;"></i> <span>Relatório</span>
        </a>
      </li>

      <li>
        <a href="profile_adm.html">
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
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
   
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    

    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php echo $_SESSION['usuario']; ?></h6>
            <?php 
            
              $usuario = $_SESSION['usuario']; 
              
              $query_funcionario = mysqli_query($conexao, "SELECT f.id_funcionario, f.email, s.nome_setor 
              FROM funcionario f 
              JOIN setor s ON f.id_setor = s.id_setor 
              WHERE f.nome_funcionario = '$usuario'");

                if ($query_funcionario->num_rows > 0) {
                  // Exibir os dados
                  while ($row = $query_funcionario->fetch_assoc()) {
                      $id_funcionario = $row['id_funcionario'];
                      echo "<p class='user-subtitle'>".$row['email']."</p>";
                      echo "<p class='user-subtitle'>".$row['nome_setor']."</p>";

                  }}
                  ?>

            </div>
           </div>
          </a>
        </li>

        <li class="dropdown-divider"></li>
        <a href="profile_adm.html"><li class="dropdown-item"><i class="icon-wallet mr-2"></i> Perfil</li></a>
        <li class="dropdown-divider"></li>
        <a href="../php/logout.php"><li class="dropdown-item"><i class="icon-power mr-2"></i> Sair</li></a>
        
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">9526 <span class="float-right"><i class="fa-solid fa-list-check" style="color: #ffffff;"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total de ordens</p>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3 border-light">
                <div class="card-body">
                  <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa-solid fa-check" style="color: #ffffff;"></i></span></h5>
                    <div class="progress my-3" style="height:3px;">
                       <div class="progress-bar" style="width:55%"></div>
                    </div>
                  <p class="mb-0 text-white small-font">Total de ordens concluidas</p>
                </div>
            </div>

            <div class="col-12 col-lg-6 col-xl-3 border-light">
              <div class="card-body">
                <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa-solid fa-clock" style="color: #f1f4f8;"></i></span></h5>
                  <div class="progress my-3" style="height:3px;">
                     <div class="progress-bar" style="width:55%"></div>
                  </div>
                <p class="mb-0 text-white small-font">Total de ordens em processo</p>
              </div>
          </div>

          <div class="col-12 col-lg-6 col-xl-3 border-light">
            <div class="card-body">
              <h5 class="text-white mb-0">8323 <span class="float-right"><i class="fa-solid fa-circle-exclamation" style="color: #fafcff;"></i></span></h5>
                <div class="progress my-3" style="height:3px;">
                   <div class="progress-bar" style="width:55%"></div>
                </div>
              <p class="mb-0 text-white small-font">Total de ordens atrasadas</p>
            </div>
        </div>



        </div>
    </div>
 </div>  
	  

 <?php
  include_once("../php/conexao.php");

  $resultado = mysqli_query($conexao, "SELECT servico.*, setor.nome_setor FROM servico JOIN setor ON servico.id_setor = setor.id_setor");

  //Para realizar a consulta so deste mês, vou deixar comentado para gente cvs depois...
  //$resultado = mysqli_query($conexao, "SELECT servico.*, setor.nome_setor FROM servico JOIN setor ON servico.id_setor = setor.id_setor WHERE DATE_FORMAT(servico.data_final, '%Y-%m') = DATE_FORMAT(NOW(), '%Y-%m')");

?>

<div class="row">
    <div class="col-12 col-lg-12">
        <div class="card">
            <div class="card-header este-mes">Este mês
                <div class="card-action">
                    <div class="dropdown">
                        <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
                            <i class="icon-options"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="javascript:void();">Action</a>
                            <a class="dropdown-item" href="javascript:void();">Another action</a>
                            <a class="dropdown-item" href="javascript:void();">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void();">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush table-borderless">
                    <thead>
                        <tr>
                            <th class="w-120">Serviço</th>
                            <th >Equipe</th>
                            <th>Situação</th>
                            <th class="w-75">Prioridade</th>
                            <th>Setor</th>
                            <th>Início</th>
                            <th>Final</th>
                            <th>Nota</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($resultado)): ?>
                            <tr>
                                <td class="sem-espaco w-120">
                                    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#modal<?= $row['id_servico'] ?>">
                                        <?= $row['nome_servico'] ?>
                                    </button>
                                </td>
                                <td class="w-50">
                                    <i class="fa-solid fa-user-plus open-popup" data-id="<?= $row['id_servico'] ?>"></i>
                                </td>
                                <td class="situacao w-100 <?= strtolower(str_replace(' ', '-', $row['situacao'])) ?>"><?= $row['situacao'] ?></td>
                                <td class="prioridade <?= strtolower($row['prioridade']) ?>"><?= $row['prioridade'] ?></td>
                                <td class="w-200"><?= $row['nome_setor'] ?></td>
                                <td><?= date('d M Y', strtotime($row['data_criada'])) ?></td>
                                <td><?= date('d M Y', strtotime($row['data_final'])) ?></td>
                                <td>
                                    <i class="fa-regular fa-comment" data-id="<?= $row['id_servico'] ?>"></i>
                                </td>

                            </tr>

                            <!-- Modal for <?= $row['nome_servico'] ?> -->
                            <div class="modal fade" id="modal<?= $row['id_servico'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $row['nome_servico'] ?></h1>
                                            <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Conteúdo do modal para <?= $row['nome_servico'] ?> -->
                                            <?= $row['descricao'] ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-custom-close" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-custom-save">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- O popup -->
<div id="popup" class="popup">
    <div class="popup-content">
        <div class="popup-arrow"></div> <!-- Seta indicando o ícone -->
        <button id="close-btn" class="close-btn">&times;</button>
        <h2>Equipe</h2>
        <p>Adicione funcionários a este serviço</p>
        <input type="text" id="search-bar" placeholder="Pesquise nomes ou equipe">
    </div>
</div>


   <!-- Sobreposição -->
   <div id="overlay" class="overlay">
    <div class="overlay-content">
        <button id="close-overlay" class="close-btn">&times;</button>
        <h2 class="text-principal">Chat Interno</h2>
        <div class="chat-body">
            <!-- Conteúdo dos comentários carregados dinamicamente -->
        </div>
        <form action="" method="post">
        <input type="hidden" id="service-id" name="service_id" value="">
            <div class="message-input">
                <input type="text" name="mensagem" placeholder="Digite sua mensagem...">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>

   <?php
include_once('../php/conexao.php');

if (isset($_GET['service_id'])) {
    $service_id = intval($_GET['service_id']);

    $query_comentarios = mysqli_query($conexao, 
        "SELECT c.comentario, f.nome_funcionario 
         FROM comentario c
         JOIN funcionario f ON c.id_funcionario = f.id_funcionario
         WHERE c.id_servico = $service_id");

    if (mysqli_num_rows($query_comentarios) > 0) {
        while ($comentario = mysqli_fetch_assoc($query_comentarios)) {
            echo '<div class="chat-message">';
            echo '    <div class="card">';
            echo '        <div class="card-header">';
            echo '            <img src="https://via.placeholder.com/30" alt="Avatar">';
            echo '            ' . htmlspecialchars($comentario['nome_funcionario']);
            echo '        </div>';
            echo '        <div class="card-body">';
            echo '            <blockquote class="blockquote mb-0">';
            echo '                <p>' . htmlspecialchars($comentario['comentario']) . '</p>';
            echo '            </blockquote>';
            echo '        </div>';
            echo '    </div>';
            echo '</div>';
        }
    } else {
        echo '<p>Sem comentários para este serviço.</p>';
    }
}
?>


<?php
include_once("../php/conexao.php");


// Inicializa variáveis
$id_funcionario = null;

// Obtém o nome do usuário da sessão
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];

    // Verifica se o nome do usuário está definido
    if (!empty($usuario)) {
        // Consulta para obter o id_funcionario
        $query_funcionario = mysqli_query($conexao, "SELECT id_funcionario FROM funcionario WHERE nome_funcionario = '$usuario'");

        // Verifica se a consulta retornou algum resultado
        if ($query_funcionario && $query_funcionario->num_rows > 0) {
            $row = $query_funcionario->fetch_assoc();
            $id_funcionario = $row['id_funcionario'];
        } else {
            echo 'Usuário não encontrado na tabela funcionario.';
        }
    } else {
        echo 'Nome do usuário na sessão está vazio.';
    }
} else {
    echo 'Usuário não está definido na sessão.';
}

// Verifica se a requisição é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['service_id']) && $id_funcionario !== null) {
        $service_id = (int)$_POST['service_id'];
        $mensagem = mysqli_real_escape_string($conexao, $_POST['mensagem']);

        // Insere o comentário no banco de dados
        $query = "INSERT INTO comentario (id_servico, id_funcionario, comentario) VALUES ('$service_id', '$id_funcionario', '$mensagem')";
        if (mysqli_query($conexao, $query)) {
            echo '';
        } else {
            echo 'Erro ao enviar comentário: ' . mysqli_error($conexao);
        }
    } else {
        echo 'ID do serviço ou ID do funcionário não especificado.';
    }
}
?>



	</div><!--End Row-->
	<div class="row">
    <div class="col-12 col-lg-12">
      <div class="card">
        <div class="card-header proximo-mes">Proximo mês
       <div class="card-action">
              <div class="dropdown">
              <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
               <i class="icon-options"></i>
              </a>
               <div class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item" href="javascript:void();">Action</a>
               <a class="dropdown-item" href="javascript:void();">Another action</a>
               <a class="dropdown-item" href="javascript:void();">Something else here</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="javascript:void();">Separated link</a>
                </div>
               </div>
              </div>
      </div>
      <div class="table-responsive">
       <table class="table align-items-center table-flush table-borderless">
         <thead>
           <tr>
             <th class="w-120">Serviço</th>
             <th>Equipe</th>
             <th>Situação</th>
             <th>prioridade</th>
             <th>Setor</th>
             <th>Inicio</th>
             <th>Final</th>
             <th>Nota</th>
 
           </tr>
         </thead>
         <tbody>
           <tr>
             <td class="sem-espaco w-120">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalIphone5">Alterar as planilhas S5</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste2">Pendente</td>
             <td class="alta">Alta</td>
             <td>Administrativo</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
 
 
           </tr>
           
           <tr>
             <td class="sem-espaco">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalEarphoneGL">Earphone GL</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste">Em andamento</td>
             <td class="mediaa">Media</td>
             <td>Recursos humanos</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
 
           </tr>
     
           <tr>
             <td class="sem-espaco">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalHDHandCamera">HD Hand Camera</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste">Em andamento</td>
             <td class="baixa">Baixa</td>
             <td>Compras</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
 
           </tr>
     
           <tr>
             <td class="sem-espaco">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalClasicShoes">Clasic Shoes</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste1">Concluída</td>
             <td class="baixa">Baixa</td>
             <td>Tecnologia</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
           </tr>
     
           <tr>
             <td class="sem-espaco">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalHandWatch">Hand Watch</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste">Em andamento</td>
             <td class="alta">Alta</td>
             <td>Financeiros</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
           </tr>
     
           <tr>
             <td class="sem-espaco">
               <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#modalClasicShoesOp">Clasic Shoes</button>
             </td>
             <td><i class="fa-solid fa-user-plus"></i></td>
             <td class="teste">Em andamento</td>
             <td class="mediaa">Media</td>
             <td>Operações</td>
             <td>03 Aug 2017</td>
             <td>03 Aug 2017</td>
             <td><i class="fa-regular fa-comment"></i></td>
 
           </tr>
         </tbody>
       </table>
     </div>
     
     <!-- Modal Templates -->
     <!-- Modal for Iphone 5 -->
     <div class="modal fade" id="modalIphone5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Iphone 5</h1>
             <button type="button" class="btn-close-custom" data-bs-dismiss="modal" aria-label="Close">
               <i class="fas fa-times"></i>
             </button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para Iphone 5 -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary btn-custom-close" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary btn-custom-save">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
     
     <!-- Modal for Earphone GL -->
     <div class="modal fade" id="modalEarphoneGL" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Earphone GL</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para Earphone GL -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Modal for HD Hand Camera -->
     <div class="modal fade" id="modalHDHandCamera" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">HD Hand Camera</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para HD Hand Camera -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Modal for Clasic Shoes -->
     <div class="modal fade" id="modalClasicShoes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Clasic Shoes</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para Clasic Shoes -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Modal for Hand Watch -->
     <div class="modal fade" id="modalHandWatch" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Hand Watch</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para Hand Watch -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
     <!-- Modal for Clasic Shoes in Operações -->
     <div class="modal fade" id="modalClasicShoesOp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
           <div class="modal-header">
             <h1 class="modal-title fs-5" id="exampleModalLabel">Clasic Shoes (Operações)</h1>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
           </div>
           <div class="modal-body">
             <!-- Conteúdo do modal para Clasic Shoes em Operações -->
             ...
           </div>
           <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="button" class="btn btn-primary">Save changes</button>
           </div>
         </div>
       </div>
     </div>
     
      </div>
    </div>
   </div><!--End Row-->


   <?php
      include_once("../php/conexao.php");
   ?>

<div class="row">
    <div class="col-12 col-lg-12 col-xl-12">
       <div class="card">
          <div class="card-header">Produtividade do Setor
            <div class="card-action">
            <div class="dropdown">
            <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
             <i class="icon-options"></i>
            </a>
             <div class="dropdown-menu dropdown-menu-right">
             <a class="dropdown-item" href="javascript:void();">Action</a>
             <a class="dropdown-item" href="javascript:void();">Another action</a>
             <a class="dropdown-item" href="javascript:void();">Something else here</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="javascript:void();">Separated link</a>
              </div>
             </div>
            </div>
          </div>
          <div class="card-body tamanho">
            <div class="chart-container-2">
              <canvas id="doughnutChart"></canvas>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center">
              <tbody>
                <?php
                $query = "
                    SELECT situacao, COUNT(*) AS quantidade 
                    FROM servico 
                    GROUP BY situacao
                ";
                $result = mysqli_query($conexao, $query);
                $situacoes = [];
                $quantidades = [];

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        $situacoes[] = $row["situacao"];
                        $quantidades[] = $row["quantidade"];
                        echo "<tr>";
                        echo "<td><i class='fa fa-circle text-white mr-2'></i>" . htmlspecialchars($row["situacao"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["quantidade"]) . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>Nenhum dado encontrado</td></tr>";
                }

                mysqli_close($conexao);
                ?>
              </tbody>
            </table>
          </div>
        </div>
    </div>
</div><!--End Row-->

      <!--End Dashboard Content-->
	  
	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
		
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">

        </div>
      </div>
    </footer>
	<!--End footer-->
	
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-brush"></i>
    </div>
    <div>
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
   
  </div><!--End wrapper-->

  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Selecione todos os ícones com a classe 'open-popup'
    document.querySelectorAll('.open-popup').forEach(function(icon) {
        icon.addEventListener('click', function() {
            // Obtenha o ID do serviço e a posição do ícone
            const serviceId = this.getAttribute('data-id');
            const rect = this.getBoundingClientRect(); // Obtém a posição do ícone

            // Exiba o popup
            const popup = document.getElementById('popup');
            const popupContent = popup.querySelector('.popup-content');

            // Defina o conteúdo do popup
            popupContent.innerHTML = `
                <div class="popup-arrow"></div>
                <button id="close-btn" class="close-btn">&times;</button>
                <h2>Equipe</h2>
                <p>Adicione funcionários a este serviço (ID: ${serviceId})</p>
                <input type="text" id="search-bar" placeholder="Pesquise nomes ou equipe">
            `;

            // Posicione o popup abaixo do ícone
            popup.style.top = `${rect.bottom + window.scrollY}px`; // Ajusta a posição vertical
            popup.style.left = `${rect.left + window.scrollX}px`; // Ajusta a posição horizontal

            popup.style.display = 'block'; // Exibe o popup

            // Adiciona funcionalidade para fechar o popup
            document.getElementById('close-btn').addEventListener('click', function() {
                document.getElementById('popup').style.display = 'none'; // Oculta o popup
            });
        });
    });

    // Adiciona funcionalidade para fechar o popup clicando fora dele
    document.getElementById('popup').addEventListener('click', function(event) {
        if (event.target === this) {
            this.style.display = 'none';
        }
    });
});
</script>


  <script>

    document.addEventListener('DOMContentLoaded', function() {
        var chatIcons = document.querySelectorAll('.fa-comment'); // Alterado para selecionar ícones de comentário
        var overlay = document.getElementById('overlay');
        var closeOverlayBtn = document.getElementById('close-overlay');
        var chatMessages = document.querySelector('.chat-body');
        var serviceIdInput = document.getElementById('service-id');

        chatIcons.forEach(function(icon) {
            icon.addEventListener('click', function() {
                var serviceId = this.getAttribute('data-id');
                openOverlay(serviceId);
                serviceIdInput.value = serviceId;
            });
        });

        closeOverlayBtn.addEventListener('click', function() {
            closeOverlay();
        });

        function openOverlay(serviceId) {
            overlay.classList.add('show');
            chatMessages.innerHTML = '<div class="card"><div class="card-header">Mensagem do serviço ID ' + serviceId + '</div><div class="card-body"><blockquote class="blockquote mb-0"><p>Exemplo de mensagem para o serviço ID ' + serviceId + '</p></blockquote></div></div>';

            // Requisição para carregar comentários reais
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'get_comments.php?service_id=' + serviceId, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    chatMessages.innerHTML = xhr.responseText;
                } else {
                    chatMessages.innerHTML = '<p>Erro ao carregar comentários.</p>';
                }
            };
            xhr.send();
        }

        function closeOverlay() {
            overlay.classList.remove('show');
        }

        // Fechar a sobreposição ao clicar fora do conteúdo
        overlay.addEventListener('click', function(e) {
            if (e.target === overlay) {
                closeOverlay();
            }
        });

        // Enviar mensagem (opcional)
        document.getElementById('send-message').addEventListener('click', function() {
            var mensagem = messageInput.value;
            if (mensagem) {
                chatMessages.innerHTML += '<div class="card"><div class="card-body"><blockquote class="blockquote mb-0"><p>' + mensagem + '</p></blockquote></div></div>';
                messageInput.value = '';
            }
        });
    });


</script>
  
  <script>
document.addEventListener('DOMContentLoaded', function() {
    if (document.getElementById('doughnutChart')) {
        var ctx = document.getElementById('doughnutChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: <?php echo json_encode($situacoes); ?>,
                datasets: [{
                    label: 'Quantidade',
                    data: <?php echo json_encode($quantidades); ?>,
                    backgroundColor: [
                        "rgba(255, 99, 132, 0.7)", // Vermelho
                        "rgba(75, 192, 192, 0.7)", // Verde
                        "rgba(255, 206, 86, 0.7)"  // Amarelo
                    ],
                    borderColor: [
                        "rgba(255, 99, 132, 1)", // Vermelho
                        "rgba(75, 192, 192, 1)", // Verde
                        "rgba(255, 206, 86, 1)"  // Amarelo
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                          color: '#ddd' // Cor do texto da legenda
                         }
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    }
});
</script>
  <script>
    $(document).ready(function(){
        // Handle status change
        $(".situacao").click(function(){
            var situacoes = ["Pendente", "Em andamento", "Concluída", "Não iniciado"];
            var classes = ["teste2", "teste", "teste1", "teste3"];
            var current = $(this).text().trim();
            var index = situacoes.indexOf(current);
            var nextIndex = (index + 1) % situacoes.length;

            $(this).removeClass(classes.join(" ")).addClass(classes[nextIndex]).text(situacoes[nextIndex]);
        });

        // Handle priority change
        $(".prioridade").click(function(){
            var prioridades = ["Alta", "Média", "Baixa"];
            var classes = ["alta", "media3", "baixa"];
            var current = $(this).text().trim();
            var index = prioridades.indexOf(current);
            var nextIndex = (index + 1) % prioridades.length;

            $(this).removeClass(classes.join(" ")).addClass(classes[nextIndex]).text(prioridades[nextIndex]);
        });
    });
</script>

  <!-- Bootstrap core JavaScript-->
  <script src="../../assets/js/jquery.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
	
 <!-- simplebar js -->
  <script src="../../assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="../../assets/js/sidebar-menu.js"></script>
  <!-- loader scripts -->
  <script src="../../assets/js/jquery.loading-indicator.js"></script>
  <!-- Custom scripts -->
  <script src="../../assets/js/app-script.js"></script>
  <!-- Chart js -->
  
  <script src="../../assets/plugins/Chart.js/Chart.min.js"></script>
 
  <!-- Index js -->
  <script src="../../assets/js/index.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  


<!-- script pra abrir o popup da equipe -->
<script>
// Seleciona os elementos
const icon = document.getElementById('icon');
const popup = document.getElementById('popup');
const closeBtn = document.getElementById('close-btn');

// Função para abrir o popup
function openPopup() {
    popup.style.display = 'flex'; // Usa 'flex' para centralizar o conteúdo
}

// Função para fechar o popup
function closePopup() {
    popup.style.display = 'none';
}

// Adiciona eventos de clique
icon.addEventListener('click', openPopup);
closeBtn.addEventListener('click', closePopup);

// Fecha o popup se o usuário clicar fora dele
window.addEventListener('click', (event) => {
    if (event.target === popup) {
        closePopup();
    }
});

</script>


<!-- Script para abrir sobreposição de tela -->
<script>
// script.js
document.addEventListener('DOMContentLoaded', function() {
    const openChat = document.getElementById('open-chat');
    const overlay = document.getElementById('overlay');
    const closeOverlay = document.getElementById('close-overlay');

    openChat.addEventListener('click', function() {
        overlay.classList.add('show');
    });

    closeOverlay.addEventListener('click', function() {
        overlay.classList.remove('show');
    });

    // Fecha a sobreposição se clicar fora dela
    overlay.addEventListener('click', function(event) {
        if (event.target === overlay) {
            overlay.classList.remove('show');
        }
    });
});

</script>
</body>
</html>
