<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <title>後台管理系統</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/styles.css')?>" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/animate.css')?>">
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  <script>window._$=function(f){document.addEventListener("DOMContentLoaded",f)}</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url()?>">回前台</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('login/logout')?>">登出</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row row-offcanvas row-offcanvas-left">
    <!-- 左方選單 -->
     <div class="col-sm-3 col-md-2 sidebar-offcanvas" id="sidebar" role="navigation">
        <ul class="nav nav-sidebar">
          <li id="welcome"><a href="<?php echo base_url('admin')?>">首頁管理</a></li>
          <li id="product"><a href="<?php echo base_url('admin/product')?>">行李箱管理</a></li>
          <!-- <li id="fit"><a href="<?php echo base_url('admin/fit')?>">配件管理</a></li> -->
          <li id="reserve"><a href="<?php echo base_url('admin/reserve')?>">訂單管理</a></li>
          <li id="notice"><a href="<?php echo base_url('admin/reserve/notice')?>">租借事項</a></li>
          <li id="guest"><a href="<?php echo base_url('admin/guest')?>">留言板管理</a></li>
        </ul>
    </div><!--/span-->
        
      <div class="col-sm-9 col-md-10 main">
        
        <!--toggle sidebar button-->
        <p class="visible-xs">
          <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas"><i class="glyphicon glyphicon-chevron-left"></i></button>
        </p>
        
