<?php include ("./template/initfunc.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title>Alexa the Poet</title>
<?php include ($_SERVER['DOCUMENT_ROOT'] ."/template/head.php"); ?>
<!-- CSS Sheets -->
<link rel="stylesheet" href="<?php echo url(); ?>css/stars.css">
<link rel="stylesheet" href="<?php echo url(); ?>css/main.css">

<!-- Scripts -->
<script src="<?php echo url(); ?>js/typed.js"></script>
<script src="<?php echo url(); ?>js/template.js"></script>
<script src="<?php echo url(); ?>js/driver.js"></script>
</head>
<body>
<!-- Background -->
<div id="stars"></div>
<div id="star2"></div>
<div id="star3"></div>

<!-- Input -->
<div id="title">
<h1>Alexa the Poet</h1>
<p>Recite me a poem about</p>
<div class="form-group">
  <input type="text" class="form-control" id="topic" placeholder=""/>
  <button id="enter" type="button" class="btn btn-default">Enter</button>
</div>
</div>





</body>
</html>
