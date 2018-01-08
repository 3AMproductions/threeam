<?php
	// this pages's info ('title','description','keywords','category')
	require_once('class.htdoc.php');
	require_once('meta_default.inc');
	$doc = new HTDoc($lang, $charset, $org, $domain, $base_title, $author, $page_title, $description, $keywords, $category, $title_separator);
	$doc->doctype();
	$doc->add_profile(array('3am-xmdp','geo'));
	$doc->add_style('/css/root.css','screen,projection','Midnight');
	$doc->add_script('accesskeys.js');
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
<h2 id="mission">We Make Websites*</h2>
<p><strong class="big">*We create your online presence.</strong> We don't just make you a web site. Your site becomes your image to everyone who visits and we specialize in making sure that you convey the right image, your image. Whether you want a personal site or a site for your company, we're here for you.</p>
<p><strong class="big">*We realize that you're unique.</strong> We simply translate who you are onto a web page. No two people or companies are exactly alike so we believe no two web sites should be alike either. We create an online atmosphere that truly represents you.</p>
<p><strong class="big">*We are serious about results.</strong> A site isn't just created for its own sake, there's a reason you've decided to search your options on the internet. We make sure the site we create gives you the results you're looking for.</p>
<p><strong class="big">Let us gain your trust.</strong> If you're apprehensive about any part of the web design process, we'll be there to guide you through it. All you need to do is decide you need a site and we here at 3AM Productions will take care of the rest. We'll take your idea and make it a reality.</p>
</div><!--leftcolumn-->

<div id="rightcolumn">
<h3 id="services">Services</h3>

<dl>
	<dt>Web Site Design</dt>
	<dd><p>The way your site looks says a lot about your company. Where most other web design companies give you their take on what your site should be, we design a site that reflects your take on what a site should be. Maybe you want a clean, minimal site or a colorful, bold site. Either way we can create the company image that truly represents your philosophy.</p></dd>
	<dt>Site Analysis</dt>
	<dd><p>We can do an inspection on your current site to determine what areas are in need of improvement.  From search engine optimization and traffic flow to accessibility and usability, we can strengthen your site, your online assets, to be as profitable as possible.</p></dd>
	<dt>Information Architecture</dt>
	<dd><p>Information Management is about usability. Not just for your visitors, but for your company. Let us help you leverage technology with database and <?php echo $abbr['xml']; ?> solutions to get you back in control of your information. We'll create a system that makes your data work for you, and not the other way around.</p></dd>
</dl>
</div><!--rightcolumn-->
<?php include('footer.inc'); ?>
</div><!--content-->
</div><!--container-->
</body>
</html>
