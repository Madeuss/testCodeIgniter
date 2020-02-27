<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/newstyles.css">
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php if(isset($styles)){
        foreach ($styles as $style_name){
            $href = base_url() . "public/css/" . $style_name; ?>
            <link rel="stylesheet" href="<?=$href?>">
        <?php }
    } ?>
</head>
<body id="page-top">
    <form class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
        <div class="modal-dialog" style="height: 200px;">
            <div class="modal-content" >
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Login</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group" id="inputs-entrar">
                        <div class="input-group">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-user"></span>
                            </div>
                            <input type="text" placeholder="Usuário" name="username" class="form-control validate">
                        </div>
                    </div>
                </div>
            </div>
            <!--password row-->
            <div class="row">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <div class="input-group" style="margin-top:10px;">
                            <div class="input-group-addon">
                                <span class="glyphicon glyphicon-lock"></span>
                            </div>
                            <input type="password" placeholder="Senha" name="password" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <br>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-default btn-group-justified" id="btn-entrar">Entrar</button>
                </div>
            </div>
        </div>
    </form>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top" style="width:70px; height:70px;"><img src="<?php echo base_url(); ?>public/img/portfolio/logo.svg" class="img-responsive" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#about">Sobre</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#services">Serviços</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>#contact">Contato</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo base_url(); ?>restrict">LoginPage</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="" data-toggle="modal" data-target="#modalLoginForm">LoginBox</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
