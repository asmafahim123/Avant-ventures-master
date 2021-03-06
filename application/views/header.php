<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Avant Ventures /  Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>welcome/index"><img src="<?php echo base_url(); ?>images/Avant-Ventures-Logo.png" width="150" alt="Avant Ventures "></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li>
                        <a style="font-size: 20px; color: #ffffff;" href="<?php echo base_url(); ?>welcome/index">Home</a>
                    </li>
                    <li>
                        <a style="font-size: 20px; color: #ffffff;" href="<?php echo base_url(); ?>welcome/about">About</a>
                    </li>
                    <li>
                        <a style="font-size: 20px; color: #ffffff;" href="<?php echo base_url(); ?>welcome/services">Services</a>
                    </li>
                    <li>
                        <a style="font-size: 20px; color: #ffffff;" href="<?php echo base_url(); ?>welcome/portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a style="font-size: 20px; color: #ffffff;" href="<?php echo base_url(); ?>welcome/contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <?php if($selected_page == 'index'){ ?>
    <?php $this->load->view('slider'); ?>
    <?php } ?>

    <!-- Page Content -->
    <div class="container">
