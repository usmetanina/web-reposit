<!DOCTYPE HTML>
<html>
<head>
   <meta charset="utf-8">
   <link href="./css/style.css" rel="stylesheet">

   <title>Главная</title>
</head>

<body>
	<?php include("allContent.php"); echo AllContent::getLogo(); ?>

	<div >
		  <?php  echo AllContent::getMenu($_GET['page']); ?>
	</div>
	
	 <?php echo AllContent::getContent($_GET['page']); ?>
</body>

</html>