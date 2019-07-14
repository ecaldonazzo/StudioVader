<?php
session_start();
include ('conexao.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Studio Vader</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="img/avatar-7.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">Esdras Castro</h2><span>Produtor Musical</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Menu</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>Home                             </a></li>
                <li><a href="forms.html"> <i class="icon-form"></i>Agenda                             </a></li>
                <li><a href="projeto.php"> <i class="fa fa-bar-chart"></i>Projetos                             </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Profissionais </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="#">Musicista</a></li>
                        <li><a href="#">Banda</a></li>
                        <li><a href="#">Produtor</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="admin-menu">
            <h5 class="sidenav-heading">Second menu</h5>
            <ul id="side-admin-menu" class="side-menu list-unstyled">
                <li> <a href="#"> <i class="icon-screen"> </i>Equipamentos</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.php" class="navbar-brand">
                        <div class="brand-text d-none d-md-inline-block"><span>Studio </span><strong class="text-primary">Vader</strong></div></a></div>
                    <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                        <!-- Notifications dropdown-->
                        <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell"></i><span class="badge badge-warning">12</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification d-flex justify-content-between">
                                        <div class="notification-content"><i class="fa fa-envelope"></i>You have 6 new messages </div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification d-flex justify-content-between">
                                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification d-flex justify-content-between">
                                        <div class="notification-content"><i class="fa fa-upload"></i>Server Rebooted</div>
                                        <div class="notification-time"><small>4 minutes ago</small></div>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification d-flex justify-content-between">
                                        <div class="notification-content"><i class="fa fa-twitter"></i>You have 2 followers</div>
                                        <div class="notification-time"><small>10 minutes ago</small></div>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-bell"></i>view all notifications                                            </strong></a></li>
                            </ul>
                        </li>
                        <!-- Messages dropdown-->
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope"></i><span class="badge badge-info">10</span></a>
                            <ul aria-labelledby="notifications" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5">Jason Doe</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5">Frank Williams</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile"> <img src="img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                                    <div class="msg-body">
                                        <h3 class="h5">Ashley Wood</h3><span>sent you a direct message</span><small>3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong> <i class="fa fa-envelope"></i>Read all messages    </strong></a></li>
                            </ul>
                        </li>
                        <!-- Languages dropdown    -->
                        <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="img/flags/16/GB.png" alt="English"><span class="d-none d-sm-inline-block">English</span></a>
                            <ul aria-labelledby="languages" class="dropdown-menu">
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/DE.png" alt="English" class="mr-2"><span>German</span></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="img/flags/16/FR.png" alt="English" class="mr-2"><span>French                                                         </span></a></li>
                            </ul>
                        </li>
                        <!-- Log out-->
                        <li class="nav-item"><a href="login.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Breadcrumb-->
    <div class="breadcrumb-holder">
        <div class="container">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active"><a href="projeto.php">Projetos</a></li>
                <li class="breadcrumb-item active">Faixas</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display"></h1>
            </header>
            <div class="row">

            <div class="pie-chart-example">
                <div class="card border-left">

                    <div class="card-header  d-flex align-items-center">
                    <h4>Informações do Projeto</h4>

                </div>


                    <div class="card-body">
                        <div class="chart-container">

                                <table class="table table-bordered  ">
                                    <tbody>
                                    <tr>
                                        <th class="table-success" scope="row">Titulo:</th>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <th class="table-success" scope="row">Artista/Banda:</th>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <th class="table-success" scope="row">Produtor Musical:</th>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <th class="table-success" scope="row">Genero:</th>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <th class="table-success" scope="row">Instrumentos:</th>
                                        <td>Guitarra, Bateria, Flauta, Violão, Baixo,</td>

                                    </tr>
                                    <tr>
                                        <th class="table-success" scope="row">Data:</th>
                                        <td>Larry the Bird</td>
                                    </tr>

                                        <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>Editar</button>


                                    </tbody>
                                </table>


                        </div>
                    </div>
                </div>
            </div>
                <div class="card  border-left pie-chart-example">
                    <div class="card-header  d-flex align-items-center">
                        <h4>Grafico Gravações</h4>
                    </div>
                    <div class="card-body ">
                        <div class="chart-container">
                            <canvas id="pieChartExample"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header">
                            <a href="musica.php"><button type="button"  class="btn btn-primary"><span class="fa fa-plus"></span> Add Faixa </button></a>
                            <button type="button" data-toggle="modal" data-target="#alertamodal" class="btn btn-secondary"><span class="fa fa-times"></span> Apagar </button>



                            <!-- Modal Cadastro Projeto-->
                            <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg">
                                <div role="document" class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="exampleModalLabel" class="modal-title">Novo Projeto</h5>
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Digite as Informações Iniciais do seu Projeto.</p>
                                            <div class="ui-state-error ui-corner-all">
                                                <?php
                                                if(isset($_SESSION['msg'])){
                                                    echo $_SESSION['msg'];
                                                    unset($_SESSION['msg']);
                                                }
                                                ?>
                                            </div>
                                            <form method="POST" action="cadastroprojeto.php" class="row">
                                                <div class="col-md-7 form-group">
                                                    <label>Titulo</label>
                                                    <input type="text" name="album" placeholder="Titulo do Album" class="form-control">
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Genêro</label>
                                                    <select name="genero" class="form-control">
                                                        <?php
                                                        $consultaGenero = "
                                            select
                                              id_genero,
                                              descricao_genero
                                            from
                                              generos
                                            order by
                                              descricao_genero 
                                        ";
                                                        $row_generos = mysqli_query($conexao,$consultaGenero);
                                                        while($generos = mysqli_fetch_object($row_generos)) {
                                                            echo "<option value='".$generos->id_genero."'>$generos->descricao_genero</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-7 form-group">
                                                    <label>Produtor Musical</label>
                                                    <!--<input type="text" name="produtor" placeholder="Nome do Produtor" class="form-control">-->
                                                    <select name="genero" class="form-control">
                                                        <?php
                                                        $consultaProdutor = "
                                            select
                                              id_produtor,
                                              nome_produtor
                                            from
                                              produtores
                                            order by
                                              nome_produtor 
                                        ";
                                                        $row_produtor = mysqli_query($conexao,$consultaProdutor);
                                                        while($produtores = mysqli_fetch_object($row_produtor)) {
                                                            echo "<option value='".$produtores->id_produtor."'>$produtores->nome_produtor</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4  form-group">
                                                    <label>Data Inicial</label>
                                                    <input type="date" name="data_ini" placeholder="00/00/0000" class="form-control">
                                                </div>
                                                <div class="col-md-7 form-group">
                                                    <label>Artista/Banda</label>
                                                    <!--input type="text" name="banda" placeholder="Nome do Artista/Banda" class="form-control">-->
                                                    <select name="banda" class="form-control">
                                                        <?php
                                                        $consultaBanda = "
                                             select
                                               id_banda,
                                               nome_banda
                                             from
                                               banda
                                             order by  
                                               nome_banda 
                                       ";
                                                        $row_banda = mysqli_query($conexao,$consultaBanda);
                                                        while($banda = mysqli_fetch_object($row_banda)){
                                                            echo "<option value='".$banda->id_produtor."'>$banda->nome_banda</option>";
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4  form-group">
                                                    <label>Data Final</label>
                                                    <input type="date" name="data_fim" placeholder="00/00/0000" class="form-control">
                                                </div>
                                                <div class="col-md-2 form-group">
                                                    <label>Nº Faixas</label>
                                                    <input type="number" name="num_faixas" placeholder="00" class="form-control">
                                                </div>



                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary"><span class="fa fa-times"></span> Cancelar</button>
                                            <button type="submit" name="concluir1" value="concluir1" class="btn btn-primary"><i class="fa fa-check" aria-hidden="true"></i> Concluir</button>
                                            <a href="faixas.php"><button type="button" class="btn btn-info" ><i class="fa fa-music" aria-hidden="true"></i> Criar Faixas</button></a>
                                        </div></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Alerta-->
                        <div class="modal fade" id="alertamodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalCenterTitle">Alerta</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Você realmente deseja DELETAR esse projeto?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                                        <button type="button" class="btn btn-primary">Sim</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-hover">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Faixa</th>
                                        <th>Data</th>
                                        <th>Ritimo</th>
                                        <th>Andamento</th>
                                        <th>Situação</th>
                                        <th>Controle</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>

                            </div>
                            <th scope="row">1</th>
                            <td>Magic</td>
                            <td>15/04/2021</td>
                            <td>Lento</td>
                            <td><div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div></td>
                            <td>Parado</td>
                            <td><button type="button" class="btn btn-dark btn-xs "><i class="fa fa-pencil" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger btn-xs "><i class="fa fa-times" aria-hidden="true"></i></button></td>




                            </tr>
                            <th scope="row">1</th>
                            <td>Magic</td>
                            <td>15/04/2021</td>
                            <td>Lento</td>
                            <td><div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div></td>
                            <td>Parado</td>
                            <td><button type="button" class="btn btn-dark btn-xs "><i class="fa fa-pencil" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger btn-xs "><i class="fa fa-times" aria-hidden="true"></i></button></td>




                            </tr> <th scope="row">1</th>
                            <td>Magic</td>
                            <td>15/04/2021</td>
                            <td>Lento</td>
                            <td><div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                            </div></td>
                            <td>Parado</td>
                            <td><button type="button" class="btn btn-dark btn-xs "><i class="fa fa-pencil" aria-hidden="true"></i></button> <button type="button" class="btn btn-danger btn-xs "><i class="fa fa-times" aria-hidden="true"></i></button></td>




                            </tr>


                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <p>Your company &copy; 2017-2019</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
                    <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- JavaScript files-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper.js/umd/popper.min.js"> </script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/charts-custom.js"></script>
<!-- Main File-->
<script src="js/front.js"></script>
</body>
</html>