<?php
session_start();
include ('conexao.php');
?>
<!DOCTYPE html>
<html>
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
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Cadastro </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="musicos.php">Musicista</a></li>
                        <li><a href="banda.php">Banda</a></li>
                        <li><a href="produtor.php">Produtor</a></li>
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
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active">Projetos       </li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container">
            <!-- Page Header Lista de Projetos-->
            <header>
                <h1 class="h3 display"></h1>
            </header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Musicista</h4>
                        </div>
                        <div class="card-body">
                            <form class="row">

                                <div class="col-md-5 form-group">
                                    <label>Nome do Musico</label>
                                    <input type="text" placeholder="Nome do Musico" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Celular</label>
                                    <input type="tel" placeholder="(DDD)9 9999-9999" class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>E-mail</label>
                                    <input type="email" placeholder="bandadepagodemetal@provedor.com.br" class="form-control">
                                </div>

                                <div class="col-md-4 form-group">
                                    <label>Instrumento</label>
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th >Instrumento</th>
                                            <th >Nivel</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th class="table-success" scope="row">Titulo:</th>
                                            <td>Larry the Bird</td>
                                        </tr>
                                        <tr>
                                            <th class="table-success" scope="row">Titulo:</th>
                                            <td>Larry the Bird</td>

                                        </tr>
                                        <tr>
                                            <th class="table-success" scope="row">Titulo:</th>
                                            <td>Larry the Bird</td>

                                        </tr>

                                        <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>Editar</button>
                                        </tbody>

                                    </table>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Observações</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                                <div class="col-md-2 form-group">
                                    <label>Imagem</label>
                                    <img src="img/avatar-8.jpg"  alt="person" class="img-fluid rounded">
                                    <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>Editar</button>
                                </div>


                            </form>
                            <div class="footer">

                                <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>
                            </div>
                        </div>



                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <form action="projeto.php" method="POST" class="form-inline col-md-12">

                                <div class="form-group col-9">

                                    <h1 class="h3 display">Lista de Bandas</h1>

                                </div>
                                <div class="form-group">
                                    <div class="input-group ">
                                        <input name="btnPesquisar" type="text" placeholder="Pesquisar" class=" form-control">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <!-- Modal Cadastro Musico-->
                            <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade bd-example-modal-lg">
                                <div role="document" class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 id="exampleModalLabel" class="modal-title">Novo Instrumento</h5>
                                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="text-center">Selecione um instrumento</p>
                                            <div class="ui-state-error ui-corner-all">
                                                <?php
                                                if(isset($_SESSION['msg'])){
                                                    echo $_SESSION['msg'];
                                                    unset($_SESSION['msg']);
                                                }
                                                ?>
                                            </div>
                                            <form method="POST" action="cadastroprojeto.php" class="row justify-content-md-center">
                                                <div class="col-md-6 form-group">
                                                    <label>Instrumento</label>
                                                    <select name="instrumento" class="form-control">
                                                        <?php
                                                        $consultaInstrumento = "
                                            select
                                              id_instrumento,
                                              instrumento
                                            from
                                              instrumentos
                                            order by
                                              instrumento 
                                        ";
                                                        $row_instrumento = $objclasse->MySelect($consultaInstrumento);
                                                        while($inst = mysqli_fetch_object($row_instrumento)) {
                                                            echo "<option value='".$inst->id_instrumento."'>$inst->instrumento</option>";
                                                        }
                                                        ?>
                                                    </select>

                                                </div>

                                            </form>

                                            <div class="modal-footer justify-content-md-center">
                                                <button type="button" data-dismiss="modal" class="btn btn-primary"><span class="fa fa-times"></span> Adicionar</button>

                                            </div>
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
                                        <th>Musicista</th>
                                        <th>Celular</th>
                                        <th>E-mail</th>
                                        <th>Controle</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $where = "";
                                    $pesquisa = filter_input(INPUT_POST,'btnPesquisar',FILTER_SANITIZE_STRING);
                                    if ($pesquisa != "") {
                                        $where = "
                                    WHERE
                                        (
                                            projetos.descricao_projeto LIKE '%".$pesquisa."%' OR
                                            generos.descricao_genero LIKE '%".$pesquisa."%' OR
                                            banda.nome_banda LIKE '%".$pesquisa."%' OR
                                            produtores.nome_produtor LIKE '%".$pesquisa."%'
                                         )   
                                  ";
                                    }
                                    else {
                                        $where = "";
                                    }
                                    $result_projetos = "
                                      SELECT 
                                        projetos.id_projeto, 
                                        projetos.album,
                                        projetos.data_ini,
                                        projetos.data_fim,
                                        projetos.num_faixas,
                                        generos.descricao_genero,
                                        banda.nome_banda,
                                        produtores.nome_produtor                            
                                      FROM 
                                        projetos
                                        LEFT JOIN generos ON generos.id_genero = projetos.id_genero_projeto
                                        LEFT JOIN banda ON banda.id_banda = projetos.id_banda
                                        LEFT JOIN produtores ON produtores.id_produtor = projetos.id_produtor                                     
                                        $where                                   
                                   ";
                                    //echo $result_projetos;exit; //Se quiser depurar, descomentar
                                    //$row_projetos = $objConexao->ExecutaConsulta($conexao,$result_projetos,'select',true);
                                    $row_projetos = $objclasse->MySelect($result_projetos);
                                    while($projeto = mysqli_fetch_object($row_projetos)) {
                                        echo "<tr>
                                          <th scope='row'>
                                            <div class='form-check'>
                                                <input class='form-check-input position-static' type='checkbox' id='blankCheckbox' value='option1' aria-label='...'>
                                            </div>
                                          </th>
                                          <td>         
                                            $projeto->album
                                          </td>
                                          <td>         
                                            $projeto->descricao_genero
                                          </td> 
                                          <td>         
                                             ".utf8_encode($projeto->nome_banda)."
                                          </td> 
                                          <td>         
                                            $projeto->nome_produtor
                                          </td> 
                                          <td>       
                                            <div class='progress'>
                                                <div class='progress-bar' role='progressbar' style='width: 25%;' aria-valuenow='25' aria-valuemin='0' aria-valuemax='100'>25%</div>
                                            </div>
                                          </td> 
                                          <td>   
                                            $projeto->data_ini
                                          </td> 
                                          <td>   
                                            $projeto->data_fim
                                          </td> 
                                          <td>   
                                            $projeto->num_faixas
                                          </td> 
                                    </tr>";
                                    }
                                    ?>
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