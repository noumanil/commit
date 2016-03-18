<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!-- light-blue - v3.2.0 - 2015-10-05 -->

<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>

        <link href="/assets/css/application.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
     <script src="/assets/js/helper.js"></script>
    <meta name="author" content="">
    <meta charset="utf-8">
    <script>
        /* yeah we need this empty stylesheet here. It's cool chrome & chromium fix
           chrome fix https://code.google.com/p/chromium/issues/detail?id=167083
                      https://code.google.com/p/chromium/issues/detail?id=332189
        */
    </script>
</head>
<body class="background-dark">
    <div class="logo">
        <h4><a href="/">Q<strong>Beep</strong></a></h4>
        <img position=""src="../shgm.jpg" alt="shgm" style="width:50px;height:50px;">
    </div>
        <nav id="sidebar" class="sidebar nav-collapse collapse">
            <ul id="side-nav" class="side-nav">
                <li >
                    <a href="/"><i class="glyphicon glyphicon-home"></i> <span class="name">Dashboard</span></a>
                </li>
                <li >
                    <a href="<?=site_url()?>/questions"><i class="glyphicon glyphicon-question-sign"></i> <span class="name"> Question Management</span></a>
                </li>
                <li class="panel active">
                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#side-nav" href="#forms-collapse" aria-expanded="false"><i class="fa fa-pencil"></i> <span class="name">Account Management</span></a>
                    <ul id="forms-collapse" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                        <li class=""><a href="<?=site_url()?>/password">Change Password</a></li>
                        <li class=""><a href="<?=site_url()?>/account_info">Change Account Information</a></li>
                    </ul>
                </li>
          
                   <!--<a href="<?=site_url()?>/account"><i class="glyphicon glyphicon-lock"></i><span class="name">  Account Management</span></a>-->
                
		<li >
                    <a href="<?=site_url()?>/logout"><i class="glyphicon glyphicon-off"></i> <span class="name"> Log Out</span></a>
                </li>
                
               
                
            </ul>
        
            

        
           
        </nav>   


        <div class="wrap">
        <header class="page-header">
            <div class="navbar">
               
          
                <div class="notifications pull-right">
                    <div class="alert pull-right">
                        <a href="#" class="close ml-xs" data-dismiss="alert">&times;</a>
                        <i class="fa fa-info-circle mr-xs"></i> qBeep demo is <a id="notification-link" href="#">alive!</a> 
                    </div>
                </div>
            </div>
        </header> 
