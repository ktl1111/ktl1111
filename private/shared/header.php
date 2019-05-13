<?php
  if(!isset($page_title)){ $page_title = ' ';}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Kuan-Ting LIU">

    <title>威同內網-<?php echo $page_title; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo url_for('/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo url_for('/vendor/bootstrap/css/bootstrap.css'); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />

    <!-- Custom styles for this template -->
    <link href="<?php echo url_for('/stylesheets/small-business.css'); ?>" rel="stylesheet">

    <!--bellows is for calendar.php-->
    <!-- jQuery v1.9.1 -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
    <!-- Moment.js v2.20.0 -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.0/moment.min.js"></script>
    <!-- FullCalendar v3.8.1 -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.min.css" rel="stylesheet"  />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.8.1/fullcalendar.print.css" rel="stylesheet" media="print"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

</head>

<body>
  <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
            <a class="navbar-brand" href="<?php echo url_for('index.php'); ?>" >Winlites</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/index.php'); ?>">首頁</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/download.php'); ?>">下載</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/elms/index.php'); ?>">請假</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/calendar/index.php'); ?>">行事曆</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/shipping/index.php'); ?>">寄件</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/erpmanual.php'); ?>">正航指南</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo url_for('/reportproblem/index.php'); ?>"> 問題回報</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
