<?php
	ini_set('include_path','.:/home/pimp3am/includes');
	// this pages's info ('title','description','keywords','category')
	require_once("class.htdoc.php");
	require_once('meta_default.inc');
	$page_title = 'Our Approach';
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
<h2 id="standards">Web Standards</h2>
<p><strong class="big">All our web sites conform to W3C web standards.</strong> When web sites were first being born there was competition between different browsers. In order to lure designers, each browser came out with its own properties or rules. This became chaos because now only certain browsers could read certain web sites. Thus the evolution of web standards.</p>
<p><strong class="big">Web standards will save you money.</strong> We are now at the time where web standards are beginning to become the cornerstone of all web site development. As this change occurs, browsers are going to have to conform to reading the same properties or rules. Since our pages are written using these rules, you are insured a site that will be viewable by all conforming browsers and in future you will not have to spend money to bring your site up to date. Your 3AM-designed site will already be there.</p>
<p><strong class="big">Web standards will save you <em>more</em> money.</strong> We abide by the separation of content and presentation. Any site we create has two files, one file contains all the information content and another file contains how it gets presented. By using this format, it becomes infinitely easier and much cheaper to redesign your site. You don't need to pay to get your information rewritten, you simply can get a new presentation file and it'll look like you have a while new site.</p>
</div><!--leftcolumn-->

<div id="rightcolumn">
<h3 id="xhtml">XHTML</h3>
<dl>
	<dt>e<em>X</em>tensible HyperText Markup Language</dt>
	<dd><p>This is where the content portion of your site is contained * (see PHP below). As time goes on, the properties allowed in this file are becoming stricter, assuring that this file will contain only information. This is important because if you decide for an update down the road, your information will be in a separate file and remain safe and untouched.</p></dd>
</dl>
<h3 id="css">CSS</h3>
<dl>
	<dt>Cascading Style Sheets</dt>
	<dd><p>This is where the presentation portion of your site is contained. Within this file all the positioning, colors, fonts and various other design elements are defined. Changes can be made to this file without fear of altering your information. Also, you can have various CSS files on your site so your user can choose the one they prefer which will keep visitors on your site longer, focusing on what you have to offer.</p></dd>
</dl>
<h3 id="php">PHP</h3>
<dl>
	<dt>Hypertext Preprocessor</dt>
	<dd><p>Depending on the complexity and needs of your site, your information may be held in a PHP file and not an XHTML file. This file type comes with powerful features that we are well experienced with and can utilize to fulfill any need you may have of your site. With PHP and the skills at 3AM, your imagination becomes the limit on what your site can achieve.</p></dd>
</dl>
<!--
<h3 id="sql">SQL</h3>
<dl>
	<dt>Structured Query Language</dt>
	<dd>You may need a site that handles a lot of data and you need a flexible solution to display that data. SQL is that solution. When data is held on databases, SQL is the language the pulls out the pertinent information, showing your users exactly what they want to see. Or in some cases, the information you are willing to show them if, for example, you have different people logging in to your site.</dd>
</dl>
-->
</div><!--rightcolumn-->

<?php include('footer.inc'); ?>
</div><!--content-->
</div><!--container-->
</body>
</html>
