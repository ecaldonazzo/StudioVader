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
            <div class="sidenav-header-inner text-center"><img src="img/avatar-4.jpg" alt="person" class="img-fluid rounded-circle">
                <h2 class="h5">Esdras Castro</h2><span>Produtor Musical</span>
            </div>
            <!-- Small Brand information, appears on minimized sidebar-->
            <div class="sidenav-header-logo"><a href="index.php" class="brand-small text-center"> <strong>S</strong><strong class="text-primary">V</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
            <h5 class="sidenav-heading">Menu</h5>
            <ul id="side-main-menu" class="side-menu list-unstyled">
                <li><a href="index.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="projeto.php"> <i class="fa fa-bar-chart"></i>Projetos  </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Cadastros </a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="musicos.php">Musicista</a></li>
                        <li><a href="banda.php">Banda</a></li>
                        <li><a href="produtor.php">Produtor</a></li>
                    </ul>
                </li>
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
                            <h4>Produtor Musical</h4>
                        </div>
                        <div class="card-body">

                            <form method="POST" action="validaprodutor.php" class="row">

                                <div class="col-md-5 form-group">
                                    <label>Nome do Produtor</label>
                                    <input type="text" name="produtor"  placeholder="Nome do Produtor" class="form-control">
                                </div>
                                <div class="col-md-3 form-group">
                                    <label>Celular</label>
                                    <input type="tel" name="celular_produtor" placeholder="(DDD)9 9999-9999" class="form-control">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>E-mail</label>
                                    <input type="email" name="email_produtor" placeholder="bandadepagodemetal@provedor.com.br" class="form-control">
                                </div>

                        </div>
                        <div class="modal-footer">
                            <?php
                            if(isset($_SESSION['msg']) )
                            {
                                echo $_SESSION['msg'];
                                unset($_SESSION['msg']);
                            }
                            ?>
                            <button type="submit" name="salvar" value="salvar" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>

                        </div>
                    </div>
                    </form>

                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">

                            <form action="produtor.php" method="POST" class="form-inline col-md-12">
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

                            <div class="card-body">
                                <div class="table-responsive table-hover">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nome do Produtor</th>
                                            <th>Celular</th>
                                            <th>E-mail</th>
                                            <th>Controle</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                        $where = "";

                                        $pesquisa = filter_input(INPUT_POST,'btnPesquisar',FILTER_SANITIZE_STRING);
                                        //Efetua a pesquisa
                                        if ($pesquisa != "") {
                                            $where = "
                                             WHERE
                                           (
                                            nome_produtor LIKE '%".$pesquisa."%' OR
                                            celular_produtor LIKE '%".$pesquisa."%' OR
                                            email_produtor LIKE '%".$pesquisa."%'
                                            )   
                                             ";
                                        } else {
                                            $where = "";
                                        }
                                        $result_pro = "
                                      SELECT 
                                        id_produtor, 
                                        nome_produtor,
                                        celular_produtor,
                                        email_produtor                        
                                      FROM 
                                        produtores                                    
                                        $where                                   
                                               ";
                                        $row_pro = $objclasse->MySelect($result_pro);
                                        //Mostra na Tabela
                                        while ($prod = mysqli_fetch_object($row_pro)) {
                                            echo "
                                        <tr>
                                          <th>
                                          $prod->id_produtor
                                          </th>
                                          <td>         
                                            ".utf8_encode($prod->nome_produtor)."
                                          </td>
                                          <td>         
                                            $prod->celular_produtor
                                          </td> 
                                          <td>         
                                             $prod->email_produtor
                                          </td>                                        
                                          <td>       
                                          <button type=\"button\" class=\"btn btn-danger btn-xs \"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></button> <button type=\"button\" class=\"btn btn-secondary btn-xs \"><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i>
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