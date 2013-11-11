<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- TemplateBeginEditable name="doctitle" -->
<title>Nate and Jermaine</title>
<!-- TemplateEndEditable -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<link href="/css/screen.css" rel="stylesheet" type="text/css" />
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

<body>
<div id="wrap">
	<div id="shadow">
		<div id="header">
			<div class="gutter">
				<h1><a href="/" title="Home"><img src="../images/main/logo.gif" width="550" height="70" alt="Nate and Jermaine" /></a></h1>
			</div> <!-- end .gutter -->
		</div> <!-- end #header -->
		<div id="nav">
			<div class="gutter">
				<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/nav.html'); ?>
			</div> <!-- end .gutter -->
		</div> <!-- end #nav -->
		<div id="main-body">
			<div id="content">
				<div class="gutter">
					<div id="photo"><img src="../images/photos/n+j.jpg" alt="Photo of Nate and Jermaine" width="540" height="200" /></div>
					<?php if(file_exists('subnav.html')) : ?>
					<div id="subnav">
						<div class="gutter">
							<?php include('subnav.html'); ?>
						</div>
					</div>
					<?php endif; ?>
					<!-- TemplateBeginEditable name="content" -->
					<h1>Title</h1>
					<p>content</p>
					<!-- TemplateEndEditable -->
				</div> <!-- end .gutter -->
			</div> <!-- end #content -->
		</div> <!-- end #main-body -->
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
	</div> <!-- end #shadow -->
</div> <!-- end .wrap -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/analytics.php'); ?>
</body>
</html>
