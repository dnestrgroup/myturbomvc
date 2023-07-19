<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <title> MVC-2 </title>
   <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
   <meta http-equiv="Content-Language" content="ru" />
    <link rel="stylesheet" type="text/css" href="/template/css/style_news_index.css" />

 </head>
<body>

<div class="my_box_style">
	<!-- This is index.php file from <br> \www\views\news\ <br><br> -->
	<?php 
		foreach ($newsList as $value) {	echo $value."<br>"; }

		echo "breakpoint-3";
	?>

</div>

	<a href="/news/2"> view >> </a> <br><br>

	<form name="form_add_this_gd" enctype="multipart/form-data" action="/news/2" method="post">
		<input type="text" name="html_textfield_book" size="28">
		<div class="button_save"> <a href="#" onclick="document.forms.form_add_this_gd.submit(); return false">send this form to another page >></a> </div>
	</form>

</body>
</html>