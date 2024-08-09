<?php
  include("protect_gerente.php");
  include_once("../php/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Cadastrar Funcionário</title>
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
    #tt{
    margin-top: 16px;
  }
  </style>
</head>

<body class="bg-theme bg-theme1" onload="getPassword()">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

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
           <div class="card-title">Registrar novo funcionário</div>
           <hr>
            <form method="post" action="../php/cadastrar_funcionario.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="nome-completo">Nome Completo</label>
                  <input type="text" id="nome-completo" name="nome" class="form-control" placeholder="Nome Completo"> 
                      <!-- NÃO MEXER NO CAMPO NAME EM HIPOTESE NENHUMA -->
                </div>
                <div class="row">
                  <div class="col-lg-6">
                    
                    <div class="form-group" id="tt">
                      <label for="imagem_funcionario">Imagem do Funcionário</label>
                      <i id="image-icon" class="fas" style="display: none;padding: 8px;"></i>
                      <label class="select-style" class="form-label" for="customFile">Adicionar Imagem</label>
                      <input type="file" class="select-style" name="imagem_funcionario" id="customFile" onchange="handleImageUpload(event, 'image-icon')" />
                    </div>
                    
                    <div class="form-group">
                      <label for="cpf">CPF</label>
                      <i id="cpf-icon" class="fas" style="display: none;padding: 8px;"></i>
                      <input class="form-control" type="text" id="cpf" name="cpf" maxlength="14" onkeyup="handleCPF(event)" required placeholder="000.000.000-00">
                    </div>
                    <div class="form-group">
                      <label for="input-3">RG</label>
                      <input class="form-control" type="text" id="RG" name="rg" maxlength="13" onkeyup="handleRG(event)" required placeholder="Adicionar RG">
                    </div>
                    <div class="form-group">
                      <label for="input-2">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Adicionar Email">
                    </div>
                    <div class="form-group">
                      <label for="input-3">Celular</label>
                      <input class="form-control" type="tel" id="celular" name="celular" maxlength="15" onkeyup="handlePhone(event)" required placeholder="00 0000-0000">
                    </div>
                    <div class="form-group">
                      <label for="input-5">Nacionalidade</label>
                      <input type="text" class="form-control" id="input-5" name="nacionalidade" placeholder="Nacionalidade" required>
                    </div> 
                    <div class="form-group">
                      <label for="input-5">Endereço</label>
                      <input type="text" class="form-control" name="endereco" id="input-5" placeholder="Enderço completo" required>
                    </div>    
                  </div>
                  <div class="col-lg-6">
  
                    <div class="form-group">
                      
                      <input type="hidden" class="form-control" id="acesso" name="acesso" placeholder="Senha do funcionário" required>
  
                      <script>
                        function getPassword() {
                            var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ@";
                            var passwordLength = 10;
                            var password = "";
                    
                            for (var i = 0; i < passwordLength; i++) {
                                var randomNumber = Math.floor(Math.random() * chars.length);
                                password += chars.substring(randomNumber, randomNumber + 1);
                            }
                            
                            // Set the generated password to the input field with name 'senha'
                            document.getElementById('acesso').value = password;
                        }
                    </script>
                    </div>
                    <div class="form-group">
                      <label for="input-2">Setor</label>
                      <div class="custom-dropdown">
                        <select id="input-2" class="form-control" name="setor" required>
                          <option value="" disabled selected hidden>Selecione um Setor</option>
                          <option value="1">Administrativo</option>
                          <option value="2">Comercial</option>
                          <option value="3">Marketing</option>
                          <option value="4">Financeiro</option>
                          <option value="5">Compras</option>
                          <option value="6">Recursos humanos</option>
                          <option value="7">Operações</option>
                        </select>
                        <div class="arrow-down"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="form-group">
                        <!-- Currículo -->
                          <label for="curriculo">Currículo</label>
                          <i id="pdf-icon" class="fas fa-check-circle" style="display: none;padding: 8px;"></i>
                          <label class="select-style" class="form-label" for="curriculo">Adicionar PDF</label>
                          <input type="file" class="select-style" name="curriculo_funcionario" id="curriculo" accept="application/pdf" onchange="handleFileUpload(event, 'pdf-icon')" />
                      </div>
                      <label for="input-1">Cargo</label>
                      <input type="text" class="form-control" name="cargo" id="input-1" placeholder="Cargo do funcionário">
                    </div>
                    <div class="form-group">
                    <div class="custom-dropdown">
                      <label for="input-2">Nível de acesso </label>
                        <select id="input-2" class="form-control" name="tipo_conta" required>
                          <option value="" disabled selected hidden>Selecione o Nível de acesso</option>
                          <option value="gerente">Gerente</option>
                          <option value="rh">Líder RH</option>
                          <option value="comum">Funcionário</option>
                        </select>
                        <div class="arrow-down"></div>
                      </div>
                      
                    </div>
                    <div class="form-group">
                      <label for="input-1">Salário</label>
                      <input type="text" class="form-control" name="salario" id="input-1" placeholder="Salário do funcionário">
                    </div>
                    
                    <div class="form-group">
                      <label for="input-3">Data de nascimento</label>
                      <input type="date" class="form-control" name="data_nascimento" id="input-3" max="" required >
                    </div>
                    <div class="form-group">
                      <label for="input-pcd">Funcionário PCD</label>
                      <input type="text" class="form-control" name="pcd" id="input-4" placeholder="Caso não for PCD não preencher">
                    </div>
                    
                    <div class="form-group">
                      <label for="input-5">Cidade</label>
                      <input type="text" class="form-control" name="cidade" id="input-5" placeholder="Nome da Cidade" required>
                    </div>
                    
                    
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-light px-5"></i> Registrar</button>
                </div>
              </form>
         </div>
         </div>
      </div>
    </div><!--End Row-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	

	
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
   
  </div><!--End wrapper-->

  <!-- MASCARAS -->
  <script>
    const handlePhone = (event) => {
      let input = event.target;
      input.value = phoneMask(input.value);
    };

    const phoneMask = (value) => {
      if (!value) return "";
      value = value.replace(/\D/g, "");
      value = value.replace(/(\d{2})(\d)/, "($1) $2");
      value = value.replace(/(\d)(\d{4})$/, "$1-$2");
      return value;
    };

    const handleCPF = (event) => {
      let input = event.target;
      input.value = cpfMask(input.value);
      validateCPF(input.value);
    };

    const cpfMask = (value) => {
      if (!value) return "";
      value = value.replace(/\D/g, "");
      value = value.replace(/(\d{3})(\d)/, "$1.$2");
      value = value.replace(/(\d{3})(\d)/, "$1.$2");
      value = value.replace(/(\d{3})(\d{1,2})$/, "$1-$2");
      return value;
    };

    const handleRG = (event) => {
      let input = event.target;
      input.value = rgMask(input.value);
    };

    const rgMask = (value) => {
      if (!value) return "";
      value = value.toUpperCase(); // Converte para maiúsculo
      value = value.replace(/[^a-zA-Z0-9]/g, ""); // Remove tudo que não for letra ou dígito
      value = value.replace(/([a-zA-Z]{2})(\d)/, "$1-$2"); // Adiciona um hífen após os primeiros dois caracteres
      value = value.replace(/(\d{2})(\d)/, "$1.$2"); // Adiciona um ponto após os próximos dois dígitos
      value = value.replace(/(\d{3})(\d)/, "$1.$2"); // Adiciona um ponto após os próximos três dígitos
      value = value.replace(/(\d{3})(\d)/, "$1"); // Os últimos três dígitos
      return value;
    };

    const handleCEP = (event) => {
      let input = event.target;
      input.value = cepMask(input.value);
    };

    const cepMask = (value) => {
      if (!value) return "";
      value = value.replace(/\D/g, "");
      value = value.replace(/(\d{5})(\d{1,2})$/, "$1-$2");
      return value;
    };

   const validateCPF = (cpf) => {
      cpf = cpf.replace(/[^\d]+/g, '');
      if (cpf.length !== 11 || /^(\d)\1+$/.test(cpf)) {
        setValidationIcon('cpf-icon', false);
        return false;
      }
      let sum = 0;
      let remainder;
      for (let i = 1; i <= 9; i++) sum += parseInt(cpf.substring(i - 1, i)) * (11 - i);
      remainder = (sum * 10) % 11;
      if ((remainder === 10) || (remainder === 11)) remainder = 0;
      if (remainder !== parseInt(cpf.substring(9, 10))) {
        setValidationIcon('cpf-icon', false);
        return false;
      }
      sum = 0;
      for (let i = 1; i <= 10; i++) sum += parseInt(cpf.substring(i - 1, i)) * (12 - i);
      remainder = (sum * 10) % 11;
      if ((remainder === 10) || (remainder === 11)) remainder = 0;
      if (remainder !== parseInt(cpf.substring(10, 11))) {
        setValidationIcon('cpf-icon', false);
        return false;
      }
      setValidationIcon('cpf-icon', true);
      return true;
    };
  
    const setValidationIcon = (elementId, isValid) => {
      const icon = document.getElementById(elementId);
      icon.style.display = 'inline-block';
      icon.className = isValid ? 'fas fa-check-circle text-success' : 'fas fa-times-circle text-danger';
    };
  
    const handleFileUpload = (event, iconId) => {
      const file = event.target.files[0];
      if (file && file.type === "application/pdf") {
        setValidationIcon(iconId, true);
      } else {
        setValidationIcon(iconId, false);
      }
    };
  
    const handleImageUpload = (event) => {
      const input = event.target;
      const icon = document.getElementById('image-icon');
      if (input.files && input.files[0]) {
        icon.style.display = 'inline-block';
        icon.className = 'fas fa-check-circle text-success';
      } else {
        icon.style.display = 'none';
      }
    };

    const hoje = new Date().toISOString().split('T')[0];
    document.getElementById('input-3').setAttribute('max', hoje);
  </script>

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