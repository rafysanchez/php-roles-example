<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <meta name="author" content="Shahrukh Khan">
        <meta name="keywords" content="multi admin, mysql, php, demo, role, rights, user">

        <title><?php echo PROJECT_NAME ?> - www.thesoftwareguy.in</title>

        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-social.css" rel="stylesheet">
        <link href="bootstrap/css/font-awesome.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">


        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="bootstrap/html5shiv.js"></script>
          <script src="bootstrap/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>


        <div class="navbar navbar-default navbar-static-top" role="navigation">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://www.thesoftwareguy.in" target="_blank"><span class="fa fa-home"></span> thesoftwareguy</a>
                </div>


                <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
                    <ul class="nav navbar-nav">
                        <li><a href="http://www.thesoftwareguy.in/php/">PHP</a></li>
                        <li><a href="http://www.thesoftwareguy.in/php-tutorial/">PHP Tutorial</a></li>
                        <li><a href="http://www.thesoftwareguy.in/facebook/">Facebook</a></li>
                        <li><a href="http://www.thesoftwareguy.in/jquery/">jQuery</a></li>
                        <li><a href="http://www.thesoftwareguy.in/tag/ajax/">Ajax</a></li>
                        <li><a href="http://www.thesoftwareguy.in/premium-projects/">Premium Projects</a></li>
                        <li><a href="http://www.thesoftwareguy.in/mini-project/">Mini Projects</a></li>
                    </ul>

                </div>
            </div>

        </div>

        <div class="container mainbody">
            <div class="page-header">
                <h1><?php echo $title ?></h1>
            </div>
            <div class="clearfix"></div>
            <div class="clearfix"></div>
            <div class="container-fluid">

                <?php if ($ERROR_MSG <> "") { ?>
                    <div class="col-lg-12">
                        <div class="alert alert-dismissable alert-<?php echo $ERROR_TYPE ?>">
                            <button data-dismiss="alert" class="close" type="button">x</button>
                            <p><?php echo $ERROR_MSG; ?></p>
                        </div>
                        <div style="height: 10px;">&nbsp;</div>
                    </div>
                <?php } ?>