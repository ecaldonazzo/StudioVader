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
                <li><a href="projeto.php"> <i class="fa fa-bar-chart"></i>Projetos</a></li>
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
                <li class="breadcrumb-item active"><a href="projeto.php">Projetos</a></li>
                <li class="breadcrumb-item active">Faixas</li>
                <li class="breadcrumb-item active">Musica</li>
            </ul>
        </div>
    </div>
    <section class="charts">
        <div class="container-fluid">
            <!-- Page Header-->
            <header>
                <h1 class="h3 display"></h1>
            </header>
            <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>Faixa - 01</h4>
                    </div>
                    <div class="card-body">
                        <form class="row">

                            <div class="col-md-6 form-group">
                                <label>Musica</label>
                                <input type="text" placeholder="Nome da Musica" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Genêro</label>
                                <select name="account"  class="form-control">
                                    <option>Rock</option>
                                    <option>Rock Progressivo</option>
                                    <option>Metal</option>
                                    <option>Metal Melodico</option>
                                </select>
                            </div>

                            <div class="col-md-4 form-group">
                                <label>Ritimo</label>
                                <select name="account" class="form-control">
                                    <option>Normal</option>
                                    <option>Lento</option>
                                    <option>Rapido</option>
                                    <option>4/4</option>
                                </select>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Tempo</label>
                                <input type="text" placeholder="Tempo da Musica" class="form-control">
                            </div>




                            </div>
                        </form>
                    </div>
               </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Painel Situacional</h4>
                        </div>
                        <div class="card-body">
                            <form class="row">

                                <div class="col-md-4  form-group">
                                    <label>Data</label>
                                    <input type="date" placeholder="00/00/0000" class="form-control">
                                </div>


                                <div class="col-md-3 form-group">
                                    <label>Situação</label>
                                    <select name="account" class="form-control">
                                        <option>Parado</option>
                                        <option>Continuo</option>
                                        <option>Cancelado</option>
                                        <option>Espera</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label>Andamento</label>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">15%</div>
                                    </div>
                                </div>


                                <div class="col-md-6 form-group">
                                    <p></p>
                                    <label>Concluido</label>
                                    <div>
                                        <div>
                                             <table class="input-group">
                                                <tr>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                        </div>
                                                    </th>
                                                    <td>Ritimo</td>
                                                    <td></td>
                                                    <td></td>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                        <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                        </div>
                                                    </th>
                                                    <td>Base</td>
                                                    <td></td>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                        </div>
                                                    </th>
                                                    <td>Melodia</td>
                                                    <td></td>
                                                    <td></td>
                                                    <th scope="row">
                                                        <div class="form-check">
                                                            <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                        </div>
                                                    </th>
                                                    <td>Arranjos</td>
                                                    <td></td>

                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>


                        </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Equipe</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <table class="table table-bordered ">
                                    <thead>
                                    <tr>
                                        <th class="text-center table-success border border-secondary" scope="row" >Musico</th>
                                        <th class="text-center table-success border border-secondary" scope="row">Instrumento</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Esdras Caldonazzo</td>
                                        <td>Guitarra</td>

                                    </tr>
                                    <tr>
                                        <td>Gustavo Ramos</td>
                                        <td>Cotra-Baixo</td>

                                    </tr>
                                    <tr>
                                        <td>Produtor Musical:</td>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <td>Produtor Musical:</td>
                                        <td>Larry the Bird</td>

                                    </tr>
                                    <tr>
                                        <td>Produtor Musical:</td>
                                        <td>Larry the Bird</td>

                                    </tr>


                                    <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>Editar</button>


                                    </tbody>
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Anotações</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Faça sua Anotação:</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h4>Arquivos</h4>
                        </div>
                        <div class="card-body">
                            <div class="chart-container">
                                    <table class="table table-bordered ">
                                        <thead>
                                        <tr>
                                            <th class="text-center table-success border border-secondary" scope="row" >Arquivo</th>
                                            <th class="text-center table-success border border-secondary" scope="row">Drescrição</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>faixa23</td>
                                            <td>solo do violao</td>

                                        </tr>
                                        <tr>
                                            <td>partitura23</td>
                                            <td>Partitura da flauta</td>

                                        </tr>
                                        <tr>
                                            <td>Produtor Musical:</td>
                                            <td>Larry the Bird</td>

                                        </tr>
                                        <tr>
                                            <td>Produtor Musical:</td>
                                            <td>Larry the Bird</td>

                                        </tr>
                                        <tr>
                                            <td>Produtor Musical:</td>
                                            <td>Larry the Bird</td>

                                        </tr>


                                        <button type="button"  data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs pull-right"><i class="fa fa-pencil" aria-hidden="true"></i>Anexar</button>



                                    </table>
                                    </tbody>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-secondary"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</button>
            <button type="button" class="btn btn-primary"><i class="fa fa-floppy-o" aria-hidden="true"></i> Salvar</button>
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