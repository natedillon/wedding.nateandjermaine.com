<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"><!-- InstanceBegin template="/Templates/wedding.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>RSVP</title>
<!-- InstanceEndEditable -->
<?php include($_SERVER['DOCUMENT_ROOT'].'/includes/head.php'); ?>
<link href="/css/screen.css" rel="stylesheet" type="text/css" />
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
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
					<!-- InstanceBeginEditable name="content" -->
					<h1><abbr title="Respondez, s'il vous plait">RSVP</abbr></h1>
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="contact-form">
						<?php include_once('../php/easyform.php');
						
						// use this to specify an image to be placed next to required fields that did not receive input
						$errorindicator = '';
						
						// style sheet class given to required fields that did not receive input
						$errorclass = "error";
						
						// if you want to show initial values in text fields, set $showvalues to true
						$showvalues = false;
						
						// if you want to use javascript to remove initial values in active fields, set $Javascript to true
						// (this is not needed if $showvalues is true)
						$Javascript = false;
						
						$results = check();
						if($results[0] == 'Errors:') { ?>
							<dl class="error-box">
								<dt>There has been an error</dt>
								<dd>
									<p>You forgot to enter the following field(s):</p>
									<ul>
										<?php foreach ($results as $i => $e) {
											if ($i > 0) {
												if($e == "email"){
													echo "<li>E-Mail</li>";
												} else if($e == "questions-comments") {
													echo "<li>Message</li>";
												} else {
													echo "<li style=\"text-transform: capitalize;\">$e</li>";
												}
											} 
										} ?>
									</ul>
								</dd>
							</dl>
							<?php ob_end_flush(); ?>
						<?php } else if($results['name'] != '') {
							include_once('rsvp-email-form.php');
						} ?>
			
						<input type="hidden" name="required" value="name,email,guests" />
			
						<dl>
							<dt><label for="name">Your name(s):</label></dt>
							<dd><?= add('<input type="text" name="name" id="name" />') ?></dd>
							<dt><label for="email">E-mail:</label></dt>
							<dd><?= add('<input type="text" name="email" id="email" />') ?></dd>
							<dt><label for="guests">Number of guests (including yourself):</label></dt>
							<dd><?= add('<input type="text" name="guests" id="guests" />') ?></dd>
							<dt><label for="questions-comments">Message (optional):</label></dt>
							<dd><?= add('<textarea id="questions-comments" name="questions" cols="25" rows="7"></textarea>') ?></dd>
						</dl>
						<input type="submit" value="Submit" id="submit" />
					</form>
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
