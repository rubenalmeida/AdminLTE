<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biblioteca Adoa| Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/bootstrap/css/animate.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="http://soundbeats.azurewebsites.net/plugins/datatables/dataTables.bootstrap.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="http://soundbeats.azurewebsites.net" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><small><b>ADOA</b></small></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Biblioteca </b>Adoa</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->
                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- USUARIO -->


                    <?php

                    if(!isset($_SESSION)){
                        session_start();
                    }

                    if (isset($_SESSION['usuario'])){

                        $usuario = $_SESSION['usuario'];
                        $extensao = $_SESSION['extensao'];

                        echo
                        '<li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="http://soundbeats.azurewebsites.net/fotos/usuarios/'. $_SESSION['id_usuario'] . $extensao .'" class="user-image" alt="User Image">
                            <span class="hidden-xs">' . $usuario . '</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                               <img src="http://soundbeats.azurewebsites.net/fotos/usuarios/'. $_SESSION['id_usuario'] . $_SESSION['extensao'] .'" class="img-circle" alt="User Image">

                                <p>' . $_SESSION['nome']  .

                        '</p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="">
                                    <a href="http://soundbeats.azurewebsites.net/administrador/cadastros/usuarios/logout.php" class="btn btn-warning">Sair</a>
                                </div>
                            </li>
                        </ul>
                    </li>';



                    }else{

                        header("Location: http://soundbeats.azurewebsites.net/login.php");

                    }
                    ?>





                    <!-- Control Sidebar Toggle Button -->
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <?php echo '<img src="http://soundbeats.azurewebsites.net/fotos/usuarios/'. $_SESSION['id_usuario'] . $_SESSION['extensao'] . '" class="img-circle" alt="User Image">'; ?>
                </div>
                <div class="pull-left info">
                    <p><? echo  $usuario; ?></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">NavegaÃ§Ã£o principal</li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-edit"></i> <span>FormulÃ¡rios</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="fa fa-circle-o"></i> Clientes
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://soundbeats.azurewebsites.net/pages/forms/formCliente.php"><i class="fa fa-circle-o"></i> Cadastrar novo Cliente</a></li>
                                <li><a href="http://soundbeats.azurewebsites.net/pages/forms/listaClientes.php"><i class="fa fa-circle-o"></i> Lista de clientes</a></li>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i> Livros
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="http://soundbeats.azurewebsites.net/pages/forms/livrosEmprestados.php"><i class="fa fa-circle-o"></i> Emprestados</a></li>
                                <li><a href="http://soundbeats.azurewebsites.net/pages/forms/livrosDisponiveis.php"><i class="fa fa-circle-o"></i> Disponiveis</a></li>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </li>


                <?php if (isset($_SESSION['usuario']) && $_SESSION['nivel'] == 1 ) {


                    echo '
                        <li>
                            <a href = "http://soundbeats.azurewebsites.net/administrador/cadastros/usuarios/registro.php" >
                                <i class="fa fa-th" ></i > <span > Cadastrar usuÃ¡rio </span >
                                <span class="pull-right-container" >
                                    <small class="label pull-right bg-green" > novo</small >
                                </span >
                    </a >
                </li >';

               } ?>
                
                <li>
                    <a href="http://soundbeats.azurewebsites.net/pages/forms/cadastroLivros.php ">
                        <i class="fa fa-th"></i> <span>Cadastrar novo livro</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">novo</small>
            </span>
                    </a>
                </li>


                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-files-o"></i>
                        <span>Layout Options</span>
                        <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://soundbeats.azurewebsites.net/pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Top Navigation</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Boxed</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Fixed</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Collapsed Sidebar</a></li>
                    </ul>
                </li>
                <li>
                    <a href="http://soundbeats.azurewebsites.net/pages/widgets.html">
                        <i class="fa fa-th"></i> <span>Widgets</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-pie-chart"></i>
                        <span>Charts</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://soundbeats.azurewebsites.net/pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-laptop"></i>
                        <span>UI Elements</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
                    </ul>
                </li>

                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-table"></i> <span>Tables</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://soundbeats.azurewebsites.net/pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
                    </ul>
                </li>
                <li>
                    <a href="pages/calendar.html">
                        <i class="fa fa-calendar"></i> <span>Calendar</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
                    </a>
                </li>
                <li>
                    <a href="pages/mailbox/mailbox.html">
                        <i class="fa fa-envelope"></i> <span>Mailbox</span>
                        <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
                    </a>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Examples</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
                        <li><a href="http://soundbeats.azurewebsites.net/pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Multilevel</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                        <li>
                            <a href="#"><i class="fa fa-circle-o"></i> Level One
                                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level Two
                                        <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                    </ul>
                </li>
                <li><a href="documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
                <li class="header">LABELS</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
