<?php
  // this pages's info ('title','description','keywords','category')
  require_once("class.htdoc.php");
  require_once('meta_default.inc');
  require_once("lib.html.php");
  $page_title = 'About Jason';
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
<h2 id="jason">Jason Karns</h2>
<p><strong class="big">Meet Jason Karns</strong><br/> Jason's been immersed in the web for just under 9 years. He started working in web design in Junior High doing small sites for friends and small organizations. It quickly grew into much more than a hobby and by the time he was a college student, he was managing numerous web sites. A programmer at heart, Jason enjoys harnessing the power of new technologies to do the heavy lifting.</p>
<p><strong class="big">He's Focused</strong><br/> Jason's web design focus is on usability and accessibility utilizing standards-based semantic design. "It's simply amazing who you can reach with an accessible web site. The future is in the semantic web."</p>
<p><strong class="big">He's Passionate</strong><br/> Ever since he wrote the control code for a student-built autonomous robot his freshman year in college, Jason has been crazy about code. "Nothing is more exciting than what you can do with a few lines of code." Jason's passion is the development and deployment of web applications that can "get stuff done".</p>
</div><!--leftcolumn-->

<div id="rightcolumn">
<h3 id="education">Education</h3>
<dl>
  <dt>The Ohio State University</dt>
  <dd>
    <ul>
      <li>2002 - present</li>
      <li><strong>College of Engineering</strong></li>
      <li><strong>Major:</strong> Computer Science &amp; Engineering</li>
      <li><strong>Specialization:</strong> Software Systems</li>
      <li><strong>Minor:</strong> Business</li>
    </ul>
  </dd>
</dl>
<h3 id="skills">Tech Skills</h3>
<dl class="personal">
  <dt>Web Abilities</dt>
  <dd>
    <ul>
      <li><?php echo $abbr[xhtml]; ?></li>
      <li><?php echo $abbr[css]; ?></li>
      <li><?php echo $abbr[dom]; ?> scripting via JavaScript</li>
    </ul>
  </dd>
  <dt>Information Management</dt>
  <dd>
    <ul>
      <li><?php echo $abbr[xml]; ?></li>
      <li><?php echo $abbr[sql]; ?> Databases</li>
    </ul>
  </dd>
  <dt>Programming</dt>
  <dd>
    <ul>
      <li>C</li>
      <li>C++</li>
      <li>Java</li>
      <li><?php echo $abbr[php]; ?></li>
      <li><?php echo $abbr[xslt]; ?></li>
    </ul>
  </dd>
</dl>
<h3 id="vcard">vCard</h3>
<p>view as: <a href="/xml/vcard.vcf.php?vcard=jason" rel="nofollow" title="Jason's vCard File in VCF format">VCF <?php echo $icon[vcf]; ?></a> | <a href="/xml/vcard.xml.php?vcard=jason" rel="nofollow" title="Jason's vCard File in XML format">XML <?php echo $icon[xml]; ?></a> | <a href="/xml/jason.rdf" rel="nofollow" title="Jason's vCard File in XML-RDF format">RDF <?php echo $icon[rdf]; ?></a></p>
<div class="jason vcard">
  <a class="url fn n" href="http://3amproductions.net/jason.php">
    <abbr class="honorific-prefix" title="Mister">Mr.</abbr>
    <span class="given-name">Jason</span>
    <span class="additional-name">Robert</span>
    <span class="family-name">Karns</span>
  </a>
  <acronym class="title" title="Chief Technology Officer">CTO</acronym>
  <div class="org">
    <span class="orgname">3AM Productions</span> 
    <span class="orgunit">Technology</span>
  </div>
  <img class="logo" src="/images/favicon.gif" alt="3AM" />
  <span class="role">Programmer</span>
  <address class="adr">
    <a href="http://maps.google.com/maps?sourceid=Mozilla-search&amp;q=1591+presidential+dr+columbus+oh+43212" title="Google Maps to 3AM's HQ" rel="geo external nofollow">
      <span class="street-address">1591 Presidential <abbr title="Drive">Dr</abbr></span>
      <span class="extended-address"><abbr title="Apartment">Apt</abbr> B1</span>
      <span class="locality">Columbus</span>
      <acronym class="region" title="Ohio">OH</acronym>
      <span class="postal-code">43212</span>
      <acronym class="country-name" title="United States of America">USA</acronym>
      <span class="types">
        (<abbr class="type" title="work">w</abbr>,
        <abbr class="type" title="home">h</abbr>)
      </span>
    </a>
  </address>
  <div class="tel">
    <abbr class="value" title="19373080456">+1-937-308-0456</abbr>
    <span class="types"> 
      (<abbr class="type" title="cell">c</abbr>,
      <abbr class="type" title="work">w</abbr>,
      <abbr class="type" title="home">h</abbr>,
      <abbr class="type" title="voice">v</abbr>)
    </span>
  </div>
  <address class="email" title="pref">jason[at]3amproductions[dot]net</address>
  <abbr class="bday" title="1983-07-22T23:10:00Z">July 22, 1983</abbr>
</div>
</div><!--rightcolumn-->

<?php include('footer.inc'); ?>
</div><!--content-->
</div><!--container-->
</body>
</html>
