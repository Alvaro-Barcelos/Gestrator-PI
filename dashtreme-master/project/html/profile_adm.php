
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
  <title>Perfil</title>
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
  
</head>

<body class="bg-theme bg-theme1">

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
      <li class="nav-item">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
          <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
              alt="user avatar"></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item user-details">
            <a href="javaScript:void();">
              <div class="media">
                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110"
                    alt="user avatar"></div>
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
  </nav>
</header>
<!--End topbar header-->

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-4">
           <div class="card profile-card-2">
            <div class="card-img-block">
              <img src="../../../dashtreme-master/imagens/background.png" width="100%" height="100%" alt="Card image cap">
            </div>
            <div class="card-body pt-5">
                <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                <h5 class="card-title">Renzo Lutkenhaus Cleto de Souza</h5>
               
                <!-- <div class="icon-block">
                  <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
				  <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                </div> -->
            </div>

            <div class="card-body border-top border-light">
              <h5 class="mb-3">SKILLS</h5>
              <hr>
                 <div class="media align-items-center">
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>Trabalho em Equipe </p>                         
                        </div>                   
                    </div>
                  </div>

                  <hr>
                  <div class="media align-items-center">                
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>Visão estratégica para o crescimento da empresa</p>
                         </div>                 
                    </div>
                  </div>

                   <hr>
                  <div class="media align-items-center">           
                     <div class="media-body text-left ml-3">
                       <div class="progress-wrapper">
                         <p>Capacidade de tomar decisões rápidas e eficazes</p>                        
                        </div>                   
                    </div>
                  </div>

                  

              </div>
        </div>

        </div>

        <div class="col-lg-8">
           <div class="card">
            <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">Profile</span></a>
                </li>
                <!-- <li class="nav-item">
                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Email</span></a>
                </li> -->
                <li class="nav-item">
                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Edit</span></a>
                </li>
            </ul>
            <div class="tab-content p-3">
                <div class="tab-pane active" id="profile">
                    <h5 class="mb-3">User Profile</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Nome</h6>
                            <p>
                                Renzo Lutkenhaus Cleto de Souza
                            </p>
                            <hr>

                            <h6>Email</h6>
                            <p>
                               renzocleto1108@gmail.com
                            </p>
                            <hr>

                            <h6>Data de Nascimento</h6>
                            <p>
                              11/08/2005
                           </p>
                           <hr>

                           <h6>Telefone</h6>
                           <p>
                            (31) 97543-7985
                           </p>
                           <hr>

                         <h6>Cidade</h6>
                         <p>
                          Belo Horizonte
                         </p>
                         <hr>

                       <h6>Endereço</h6>
                         <p>
                          Av. Miguel Perrela 975
                       </p>
                       <hr>

                       <h6>Setor</h6>
                       <p>
                        TI
                     </p>

                        </div>
                        
                        <!-- <div class="col-md-6">
                            <h6>Recent badges</h6>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">html5</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">react</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">codeply</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">angularjs</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">css3</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">jquery</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">bootstrap</a>
                            <a href="javascript:void();" class="badge badge-dark badge-pill">responsive-design</a>
                            <hr>
                            <span class="badge badge-primary"><i class="fa fa-user"></i> 900 Followers</span>
                            <span class="badge badge-success"><i class="fa fa-cog"></i> 43 Forks</span>
                            <span class="badge badge-danger"><i class="fa fa-eye"></i> 245 Views</span>
                        </div> -->
<!-- 
                        <div class="col-md-12">
                            <h5 class="mt-2 mb-3"><span class="fa fa-clock-o ion-clock float-right"></span> Recent Activity</h5>
                             <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>                                    
                                    <tr>
                                        <td>
                                            <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div> -->
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                  
                  <form action=""  onsubmit="senhaOk();" method="POST">
                  <div class="col-lg-6">
                    <div class="card">
                      <div class="card-body">

                      <div class="card-title">Enviar Email</div>
                      <hr>                   
                      <div class="form-group">
                       <label for="input-3">Nome</label>
                       <input type="text" class="form-control" name="nome" id="input-3" placeholder="Seu Nome">
                      </div>

                      <div class="form-group">
                       <label for="input-4">Email</label>
                       <input type="text" class="form-control" name="email" id="input-4" placeholder="Seu Email">
                      </div>

                      <div class="form-group">
                       <label for="input-5">Menssagem</label>
                       <textarea name="mensagem"  cols="30" rows="10"></textarea>                   
                      </div>

                      <div class="form-group">
                       <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Enviar Email</button>
                     </div>

                     </form>
                    </div>
                    </div>
                 </div>
                  <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="edit">
                    <form>
                       

                        <div class="form-group row">
                          <label class="col-lg-3 col-form-label form-control-label">Skills</label>
                          <div class="col-lg-9">
                              <input class="form-control" type="text" value="" placeholder="Skill">
                          </div>
                      </div>

                      <div class="form-group row">
                        <label class="col-lg-3 col-form-label form-control-label">Skills</label>
                        <div class="col-lg-9">
                            <input class="form-control" type="text" value="" placeholder="Skill">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-lg-3 col-form-label form-control-label">Email</label>
                      <div class="col-lg-9">
                          <input class="form-control" type="text" value="" placeholder="Skill">
                      </div>
                  </div>

                       

                  <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Senha</label>
                    <div class="col-lg-9 input-group">
                        <input class="form-control" type="password" name="senha" size="15" required onchange='confereSenha();' placeholder="******">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="mostrarSenha('senha')">
                                <i class="fa fa-eye" id="olhoSenha"></i>
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-lg-3 col-form-label form-control-label">Confirmar Senha</label>
                    <div class="col-lg-9 input-group">
                        <input class="form-control" type="password" name="confirma" size="15" required onchange='confereSenha();' placeholder="******">
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="mostrarSenha('confirma')">
                                <i class="fa fa-eye" id="olhoConfirma"></i>
                            </span>
                        </div>
                    </div>
                </div>








                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                              <button type="submit" class="btn btn-light px-5">Cancel</button>
                              <button type="submit" class="btn btn-light px-5">Atualizar</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
      </div>
        
    </div>

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
	
	<!--End footer-->
	
	<!--start color switcher-->



 


  <!--end color switcher-->
   
  </div><!--End wrapper-->


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


<!-- Script pro confirmador de senha -->

<script>
function confereSenha() {
  const senha = document.querySelector('input[name=senha]');
  const confirma = document.querySelector('input[name=confirma]');

  if (confirma.value === senha.value){
    confirma.setCustomValidity('');
  } else{
    confirma.setCustomValidity('As senhas não conferem');
  }
}

function senhaOK() {
  alert("Senhas conferem!")
}
  </script>


 <!-- Script pro olho da senha  -->

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
