<?php
	/* require("ext.phpmailer.php"); */
	session_start();
	// this pages's info ('title','description','keywords','category')
	require_once("class.htdoc.php");
	require_once('meta_default.inc');
	$page_title = 'Contact Us';
	$doc = new HTDoc($lang, $charset, $org, $domain, $base_title, $author, $page_title, $description, $keywords, $category, $title_separator);
	$doc->doctype();
	$doc->add_profile(array('3am-xmdp','geo'));
	$doc->add_style('/css/root.css','screen,projection','Midnight');
	$doc->add_script(array('accesskeys.js','hidemail.js','contact_formv.js'));
	$meta = "<!--[if lte IE 6]>\n".'<link type="text/css" href="/css/ie.css" rel="stylesheet" media="screen,projection" />'."\n<![endif]-->\n";
	$doc->add_extra($meta);
	$doc->head();
?>
	<body>
		<div id="container">
      <div id="image">
        <h1 id="three_am">3AM Productions</h1>
      </div><!--image-->
			<?php include('nav.inc'); ?>
				<div id="content">
				<div id="leftcolumn">
					<h2 id="contact">Contact Us</h2>
<?php
  /* $mail = new my_phpmailer(); */
  $mail = $_SESSION['mail'];
  $greeting = (empty($_SESSION['greeting']) ? "Just fill out the form and we'll get back to you as soon as possible." : $_SESSION['greeting']);

  if(!empty($_SESSION['name_msg'])) $name_err =  '<label id="label_name" for="name" class="error">'.$_SESSION['name_msg'].'</label>';
  if(!empty($_SESSION['address_msg'])) $address_err =  '<label id="label_email" for="email" class="error">'.$_SESSION['address_msg'].'</label>';
  if(!empty($_SESSION['subject_msg'])) $subject_err = '<label id="label_subject" for="subject" class="error">'.$_SESSION['subject_msg'].'</label>';
  if(!empty($_SESSION['body_msg'])) $body_err =  '<label id="label_body" for="body" class="error">'.$_SESSION['body_msg'].'</label>';

  unset($_SESSION['name_msg']); unset($_SESSION['address_msg']); unset($_SESSION['subject_msg']); unset($_SESSION['body_msg']);
?>
					
					<p id="greeting"><?php echo $greeting;?></p>
					<form action="mail.php" method="post">
						<fieldset>
							<?php echo $name_err;?>
							<div class="row"><label for="name"><em class="akey">N</em>ame:</label><input id="name" name="name" type="text" accesskey="n" value="<?php echo nl2br(htmlentities($mail->FromName,ENT_QUOTES,'UTF-8'));?>"/></div>
							<?php echo $address_err;?>
							<div class="row"><label for="email"><em class="akey">E</em>mail:</label><input id="email" name="email" type="text" accesskey="e" value="<?php echo nl2br(htmlentities($mail->From,ENT_QUOTES,'UTF-8'));?>"/></div>
							<?php echo $subject_err;?>
							<div class="row"><label for="subject"><em class="akey">S</em>ubject:</label><input id="subject" name="subject" type="text" accesskey="s" value="<?php echo nl2br(htmlentities($mail->Subject,ENT_QUOTES,'UTF-8'));?>"/></div>
							<?php echo $body_err;?>
							<div class="row"><label for="body"><em class="akey">B</em>ody:</label><textarea id="body" name="body" rows="4" cols="35" accesskey="b"><?php echo nl2br(htmlentities($mail->Body,ENT_QUOTES,'UTF-8'));?></textarea></div>
						</fieldset>
						<fieldset class="buttons"><input id="reset" type="reset" value="Clear"/><input id="submit" type="submit" value="Send"/><input id="page" name="page" type="hidden" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];?>"/></fieldset>
					</form>
 				</div>
				<!--leftcolumn-->
				<div id="rightcolumn">
					<h3 id="contact_alt">Here Too</h3>
					<dl>
						<dt>Snail Mail</dt>
						<dd>
							<dl class="personal">
								<dt>3AM Productions</dt>
								<dd>
        					<address><a href="http://maps.google.com/maps?q=226+E+Oakland+Ave+Columbus+Ohio&amp;iwloc=A&amp;hl=en" title="Google Maps to 3AM's HQ" rel="geo external">226 East Oakland Ave.<br/>Columbus, OH 43201</a></address>
								</dd>
							</dl>
						</dd>
						<dt>Electronic Mail</dt>
						<dd>
							<dl class="personal">
								<dt>Design:</dt>
								<dd><address class="email" title="Email 3AM Design">design[at]3amproductions[dot]net</address></dd>
								<dt>Technology:</dt>
								<dd><address class="email" title="Email 3AM Technology">tech[at]3amproductions[dot]net</address></dd>
								<dt>General:</dt>
								<dd><address class="email" title="Email 3AM Productions">3AM[at]3amproductions[dot]net</address></dd>
							</dl>
						</dd>
					</dl>
				</div>
				<!--rightcolumn-->
				<?php include('footer.inc'); ?>
			</div>
			<!--content-->
		</div>
		<!--container-->
	</body>
</html>
