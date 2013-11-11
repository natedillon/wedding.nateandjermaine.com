<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><!-- InstanceBegin template="/Templates/wedding.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Gifts</title>
<!-- InstanceEndEditable -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<link href="/css/screen.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
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
							<?php include('../gifts/subnav.html'); ?>
						</div>
					</div>
					<?php endif; ?>
					<!-- InstanceBeginEditable name="content" -->
					<h1>Gift Registry</h1>
					<p>Click one of the links below to view our gift registries.</p>
					<ul id="gift-list">
						<li id="target"><a href="http://www.target.com/gp/registry/registry.html/ref=cm_cw_sr_1/601-0201259-8115349?ie=UTF8&amp;type=wedding&amp;id=3QOUJ16KN8OVL&amp;jsebd=1" title="Target Gift Registry"><span>Target Gift Registry</span></a></li>
						<li id="bed-bath-and-beyond"><a href="http://www.bedbathandbeyond.com/regGiftRegistry.asp?order_num=-1&amp;wrn=%2D952076300" title="Bed Bath &amp; Beyond Gift Registry"><span>Bed Bath &amp; Beyond Gift Registry</span></a></li>
						<li id="ten-thousand-villages"><a href="#" title="Ten Thousand Villages Gift Registry (coming soon)"><span>Ten Thousand Villages Gift Registry (coming soon)</span></a></li>
					</ul>
					<!-- InstanceEndEditable -->
				</div> <!-- end .gutter -->
			</div> <!-- end #content -->
		</div> <!-- end #main-body -->
		<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/footer.php'); ?>
	</div> <!-- end #shadow -->
</div> <!-- end .wrap -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/analytics.php'); ?>
</body>
<!-- InstanceEnd --></html>
