<?php
	ini_set('include_path','.:/home/pimp3am/includes');
	// this pages's info ('title','description','keywords','category')
	require_once("class.htdoc.php");
	include_once('lib.html.php');
	require_once('meta_default.inc');
	$page_title = 'About 3AM';
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
<h3 id="about">About 3AM</h3>
<h4>Who We Are</h4>
<p>3AM Productions is a small firm of two driven, goal-oriented college students from The Ohio State University in Columbus: <a href="/gilbert.php" title="Co-founder and CEO" rel="bio">Gilbert J Velasquez</a> and <a href="/jason.php" title="Co-founder and CEO" rel="bio">Jason R Karns</a>.</p>
<h4>Standards &amp; Validation</h4>
<p>We here at 3AM believe standards are the foundation of the next generation Web and should be regarded as more than simply best practice. At this point in web development, publishing non-standard markup is simply un-professional. Therefore, with regards to markup and <? echo $abbr[xhtml]; ?>, strict standards conformance is the foundation upon which successful, accessible sites are built. Validation, however, is a means to an end, not the end in-and-of-itself.   We try to push the envelope with <?php echo $abbr[css]; ?> standards and sometimes, though rarely, use vendor-specific properties to enhance the end-user experience of those with advanced browsers. At the same time, we take extra care not to adversely affect any other users or decrease the accessibility of our sites.</p>
<h4 id="copyright">Copyright</h4>
<p>This work is <a href="/xml/cc-license.rdf" title="3AM CC License" rel="license">licensed</a> under an Attribution, Noncommercial, Share-Alike <a href="http://creativecommons.org/licenses/by-nc-sa/2.5/" title="Creative Commons" rel="license external">Creative Commons</a> License.</p>
<h4 id="terms">Terms of Use</h4>
<p>3amproductions, the domain 3amproductions.net, and the <?php echo $abbr['uri']; ?> of this Web site and all work (as listed in the portfolio), content(s), and specifically the authorship of articles published here and elsewhere, source code, images, design, stylesheets and overall concept herein are intellectual property of 3AM Productions. 3AM reserves all rights (<?php echo $abbr['iprs']; ?>) to this material.</p>
<h4 id="com_use">Commercial Use</h4>
<p>Commercial use of any kind for financial gain is prohibited, unless you have prior written or contractual approval from 3AM. Please <a href="contact.php" title="Contact 3AM" rel="contact">contact</a> us for more details.</p>
</div><!--leftcolumn-->

<div id="rightcolumn">
<dl>
  <dt>Accesskeys</dt>
  <dd>
    <p>3AM Productions employs the use of accesskeys for enhanced accessibility &amp; usability. The standard accesskeys used on this site are listed below. Additionally, pressing and holding the modifier key of your browser (Alt, Ctrl, Command, etc) will highlight the accesskeys available on that page.</p>
    <ol class="accesskeys">
    	<li>0 - <a href="about.php" title="Accesskey Details" accesskey="0" rel="help">Access Key Details</a></li><!-- Access Key Details -->
    	<li>1 - <a href="index.php" title="3AM Homepage" accesskey="1" rel="home">Home</a></li><!-- Home Page -->
    	<li>2 - News</li><!-- What's New -->
    	<li>3 - <a href="about.php" title="Sitemap" accesskey="3" rel="sitemap">Sitemap</a></li><!-- Sitemap -->
    	<li>4 - Search</li><!-- Search -->
    	<li>5 - <a href="about.php" title="Frequently Asked Questions" accesskey="5" rel="help">FAQ</a></li><!-- Frequently Asked Questions -->
    	<li>6 - <a href="about.php" title="Homepage" accesskey="6" rel="help">Help</a></li><!-- Help -->
    	<li>7 - <a href="contact.php" title="Contact 3AM" accesskey="7" rel="contact">Complaints</a></li><!-- Complaints -->
    	<li>8 - <a href="about.php" title="Copyright Information" accesskey="8" rel="copyright">Copyright</a></li><!-- Terms/Conditions -->
    	<li>9 - <a href="contact.php" title="Contact 3AM" accesskey="9" rel="contact">Contact</a></li><!-- Feedback Form -->
    </ol>
	</dd>
</dl>
<dl>
  <dt>Validation</dt>
  <dd>
    <ul>
      <li><a href="http://validator.w3.org/check?uri=www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate as XHTML">XHTML</a></li>
      <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=http://www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate CSS">CSS</a></li> 
      <li><a href="http://feedvalidator.org/check.cgi?url=http://www.3amproductions.net/xml/rss.xml" rel="validate external" title="Validate RSS">RSS 2.0</a></li> 
      <li><a href="http://www.w3.org/WAI/WCAG1A-Conformance" rel="validate external" title="Validate WAI-A">WAI-A</a></li>
      <li><a href="http://www.w3.org/WAI/WCAG1AA-Conformance" rel="validate external" title="Validate WAI-AA">WAI-AA</a></li>
      <li><a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" rel="validate external" title="Validate WAI-AAA">WAI-AAA</a></li>
      <li><a href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=http://www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate as Section 508 Compliant">Section 508</a></li>
      <li><a href="http://www.icra.org/cgi-bin/rdf-tester/sitelabel.cgi?url=http://www.3amproductions.net/index.php" rel="validate external" title="ICRA Rating"><? echo $abbr[icra]; ?> Rating</a></li> 
    </ul>
  </dd>
  <dt>Meta Information</dt>
  <dd>
    <ul>
      <li><a href="/xml/xmdp.php" rel="meta" title="Metadata"><? echo $abbr[xmdp]; ?></a></li>
      <li><a href="/xml/cc-license.rdf" title="3AM CC License" rel="license">CC License</a></li> 
      <li><a href="/xml/labels.rdf" rel="validate" title="Content Rating"><? echo $abbr[icra]; ?> Rating</a></li>
			<li><a href="http://geourl.org/near?p=http://www.3amproductions.net" title="Sites near 3AM Productions" rel="geo external">Geo URL</a></li> 
    </ul>
  </dd>
</dl>
</div><!--rightcolumn-->
<?php include('footer.inc'); ?>
</div><!--content-->
</div><!--container-->
</body>
</html>
