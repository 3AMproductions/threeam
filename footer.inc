<?php include_once('lib.html.php'); ?>
<div id="footer">
<!-- Still needs modified of course.  
Validation/Rating: XHTML, CSS, 508, AAA, WCAG, ICRA, RSS-(if we make a feed).
Resources: copyright, help/accessibility, sitemap-(if site gets large enough), RSS-(if we make a feed) -->
  <span>
		<a href="http://validator.w3.org/check?uri=www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate as XHTML"><?php echo $abbr['xhtml']; ?></a> |
  	<a href="http://jigsaw.w3.org/css-validator/validator?profile=css3&amp;uri=http://www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate CSS"><?php echo $abbr['css']; ?></a> | 
  	<a href="http://www.contentquality.com/mynewtester/cynthia.exe?Url1=http://www.3amproductions.net<?php echo $_SERVER['PHP_SELF']; ?>" rel="validate external" title="Validate as Section 508 Compliant"><?php echo $abbr['508']; ?></a>
<!--
  	<a href="http://www.w3.org/WAI/WCAG1A-Conformance" rel="validate external" title="Validate WAI-A"><?php echo $abbr['wai-a']; ?></a> | 
  	<a href="http://www.w3.org/WAI/WCAG1AA-Conformance" rel="validate external" title="Validate WAI-AA"><?php echo $abbr['wai-aa']; ?></a> | 
  	<a href="http://www.w3.org/WAI/WCAG1AAA-Conformance" rel="validate external" title="Validate WAI-AAA"><?php echo $abbr['wai-aaa']; ?></a> | 
  	<a href="http://feedvalidator.org/check.cgi?url=http://www.3amproductions.net/xml/rss.xml" rel="validate external" title="Validate RSS"><?php echo $abbr['rss']; ?></a> | 
  	<a href="http://www.icra.org/cgi-bin/rdf-tester/sitelabel.cgi?url=http://www.3amproductions.net/index.php" rel="validate external" title="ICRA Rating"><?php echo $abbr['icra']; ?></a> 
-->
	</span>
</div><!--footer-->
