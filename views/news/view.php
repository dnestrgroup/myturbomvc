<html>
 <head>
  <title> MVC-2 </title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
   <meta http-equiv="Content-Language" content="ru" />
    <link rel="stylesheet" type="text/css" href="/template/css/style_news_view.css" />

 </head>
<body>

<div class="my_box_style">
	<!-- This is index.php file from <br> \www\views\news\ <br><br> -->
	<?php 
		print_r($newsItem->email); 

		echo "<br><br> post=".$_POST['html_textfield_book'];
	?>
</div>

<a href="/news"> << back </a>

</body>
</html>