<?php
	ini_set('include_path','.:/home/pimp3am/includes');
	// this pages's info ('title','description','keywords','category')
	require_once('lib.html.php');
	require_once('class.htdoc.php');
	require_once('meta_default.inc');
	$page_title = 'About Gilbert';
	$doc = new HTDoc($lang, $charset, $org, $domain, $base_title, $author, $page_title, $description, $keywords, $category, $title_separator);
	$doc->doctype();
	$doc->add_profile(array('3am-xmdp','geo'));
	$doc->add_style('/css/root.css','screen,projection','Midnight');
	$doc->add_script(array('accesskeys.js','hidemail.js'));
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
<h2 id="gilbert">Gilbert Velasquez</h2>
<p><strong class="big">Meet Gilbert Velasquez</strong><br/> Gilbert's been involved with business and design for over ten years. His father has owned multiple businesses and Gilbert's always been handling his family business' Information Technology. What started as a simple spreadsheet quickly grew into an obsession of using technology to help companies focus on the work they got in business to do.</p>
<p><strong class="big">He's Intense</strong><br/> When Gilbert does something, he goes all the way with it. He pushes boundaries and doesn't accept what the mainstream audience simply accepts. He's always looking to give you more and is never satisfied until his work is top quality and something original that really gets the job done.</p>
<p><strong class="big">He's Latino</strong><br/> While most people see the world from one perspective, Gilbert's background and culture allows him to view the world in many different ways. Being bilingual and having held a working position in Peru, South America, 3AM Productions is able to work with Spanish speaking clients and understand the Latino culture.</p>
</div><!--leftcolumn-->

<div id="rightcolumn">
<h3 id="education">Education</h3>
<dl>
	<dt>The Ohio State University</dt>
	<dd>
    <ul>
    	<li>2002 - present</li>
    	<li><strong class="bold">Fisher College of Business</strong> [ Honors ]</li>
    	<li><strong class="bold">Major:</strong> Business Administration</li>
    	<li><strong class="bold">Specialization:</strong> <? echo $abbr[mis]; ?></li>
    	<li><strong class="bold">Minor:</strong> Latino/a Studies</li>
    </ul>
	</dd>
</dl>
<h3 id="skills">Business Skills</h3>
<dl class="personal">
	<dt>Vision</dt>
	<dd>I see a great difference between most online web design companies and 3AM Productions. That difference is our ability to not just understand technology, but to understand your business. We can understand what your business goals and strategies are and create a web site that falls in line with those strategies.</dd>
</dl>
<h3 id="vcard">vCard</h3>
<p>view as: <a href="/xml/vcard.vcf.php?vcard=gilbert" rel="nofollow">VCF <?php echo $icon[vcf]; ?></a> | <a href="/xml/vcard.xml.php?vcard=gilbert" rel="nofollow">XML <?php echo $icon[xml]; ?></a> | <a href="/xml/gilbert.rdf" rel="nofollow">RDF <?php echo $icon[rdf]; ?></a></p>
<div class="gilbert vcard">
  <a class="url fn n" href="#">
    <span class="honorific-prefix">Mr.</span>
    <span class="given-name">Gilbert</span>
    <span class="additional-name">Joseph</span>
    <span class="family-name">Velasquez</span>
  </a>
  <acronym class="title" title="Chief Executive Officer">CEO</acronym>
  <div class="org">
    <span class="orgname">3AM Productions</span> 
    <span class="orgunit">Design</span>
  </div>
	<img class="logo" src="/images/favicon.gif" alt="3AM" />
  <span class="role">Designer</span>
  <address class="adr">
		<a href="http://maps.google.com/maps?q=226+E+Oakland+Ave+Columbus+Ohio&amp;iwloc=A&amp;hl=en" title="Google Maps to 3AM's HQ" rel="geo external">
      <span class="street-address">226 East Oakland Avenue</span>
      <span class="locality">Columbus</span>
			<span class="region">OH</span>
			<span class="postal-code">43201</span>
      <span class="country-name">U.S.A.</span>
      <span class="types">
        (<abbr class="type" title="WORK">w</abbr>,
        <abbr class="type" title="HOME">h</abbr>)
      </span>
		</a>
  </address>
  <div class="tel">
    <span class="value">+1-614-404-0215</span>
  	<span class="types"> 
      (<abbr class="type" title="CELL">c</abbr>,
      <abbr class="type" title="WORK">w</abbr>,
      <abbr class="type" title="VOICE">v</abbr>)
  	</span>
  </div>
  <address class="email" title="PREF">gilbert[at]3amproductions[dot]net</address>
</div>
</div><!--rightcolumn-->

<?php include('footer.inc'); ?>
</div><!--content-->
</div><!--container-->
</body>
</html>
