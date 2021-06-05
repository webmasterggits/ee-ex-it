<!DOCTYPE html>
<html>
<head>
  <title>GGITS | EX</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script src="js/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

   <style type="text/css">
   body
   {
    width: 100%;
   }
    @media (max-width: 480px) { 
    .nav-tabs > li {
        float:none;
    }
  }
   </style>
</head>
<body>

<!--Navigation Begin-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  <div class="navbar-header">
      <a class="navbar-brand" href="http://www.ggits.org">
        <img alt="GGITS" src="images/logo.jpg">
      </a>
    </div>

    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
      <div class="nav navbar-nav" align="center">
        <div class="visible-xs-block" style="padding: 20px;"></div>
        <a href="http://117.239.195.82:8083/gols"><img src="images/moodle.png" alt="Moodle"></a>
        <a href="#"><img src="images/cms.png" alt="CMS"></a>
      </div>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!--Navigation End-->
<!--Spacing-->
<div style="margin-top: 60px;"></div>

<div class="page-header" align="center">
  <h1>Department of Electronics and Communication</h1>
</div>


<div class="row" style="width:80%;margin:auto;padding-bottom:50px;">

<?php 
  include 'navigation.php';
?>

<!--Content Division Begin-->
<div class="col-lg-8 col-md-7 col-sm-7 contents" >
<iframe src="Chancellor.pdf" style="width:100%;height:100%;height:600px"></iframe>
<iframe src="Students achievements.pdf" style="width:100%;height:100%;height:700px"></iframe>
</div>
<!--Content Division End-->

<?php 
 include 'news.php';
?>
</div>

<!--Footer-->
<nav class="nav navbar-default" style="color:white;height: 50px;">
    <p style="padding: 10px;font-size:16px;margin:4px">© Gyan Ganga Institute Of Technology And Sciences
   <span style="float:right">Developed by:- Deepak Jain and Shubham Patel</span></p>
</nav>

</body>
</html>