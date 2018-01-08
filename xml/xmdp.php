<?php
	// this pages's info ('title','description','keywords','category')
	require_once("class.htdoc.php");
	require_once("lib.html.php");
	$doc = new HTDoc();
	$doc->doctype();
?>
 <head>
  <title>XMDP: XHTML Metadata Profile - 3amproductions.net</title>
  <link type="text/css" rel="stylesheet" media="screen" href="xmdp.css" /> 
  <link type="image/x-icon" rel="shortcut icon" href="/images/favicon.ico" />
  <link type="image/gif" rel="icon" href="/images/favicon.gif" />
 </head>
 <body>
  <h1 id="xmdp" title=" XMDP: XHTML Metadata Profile " class="help">XMDP: XHTML Metadata Profile</h1>
  <h2 id="domain" title=" XMDP: XHTML Metadata Profile for the Domain: 3amproductions.net " class="help">3amproductions.net</h2>

  <dl id="profile">
   <dt id="about" title=" Information about the Web site and the author(s), developer(s), etc. and their methods and philosophies " class="help"><a href="/approach.php" rel="about" accesskey="2">About</a></dt>
    <dd>Information about the Web site and the author(s), developer(s), etc. and their methods and philosophies.</dd>
   <dt id="author" title=" The individual who wrote all or part of the document " class="help">Author</dt>
    <dd>The individual who wrote all or part of the document.</dd>
   <dt id="bio" title=" Defines the relationship of an anchor or link to a biographical resource about an author or individual " class="help">Bio</dt>
    <dd>Defines the relationship of an anchor or link to a biographical resource about an author or individual.</dd>
   <dt id="category" title=" The document's taxonomy, or directory classification as defined by the ODP (dmoz.org) RDF " class="help">Category</dt>
    <dd>The document's taxonomy, or directory classification as defined by the <?php echo $abbr['odp']; ?>	(<a href="http://dmoz.org" title="Open Directory Project" rel="meta">dmoz.org</a>) <?php echo $abbr['rdf']; ?>.</dd>
   <dt id="contact" title=" This resource allows the visitor to access information on various methods of contacting the Web site owner(s) " class="help"><a href="/contact.php" rel="contact" accesskey="3">Contact</a></dt>
    <dd>This resource allows the visitor to access information on various methods of contacting the Web site owner(s).</dd>
   <dt id="copyright" title=" The name(s) of the copyright holder(s) for the document, and/or a complete statement of copyright, or a URI to that statement. " class="help"><a href="/about.php" rel="copyright" accesskey="8">Copyright</a></dt>
    <dd>The name(s) of the copyright holder(s) for the document, and/or a complete statement of copyright, or a <?php echo $abbr['uri']; ?> to that statement..</dd>
   <dt id="date" title=" The last updated date/timestamp of the document, database record or other resource in ISO8601 UTC format " class="help">Date</dt>
    <dd>The last updated date/timestamp of the document, database record or other resource in ISO8601 UTC format.</dd>
   <dt id="description" title=" A summary or abstract of the document contents " class="help">Description</dt>
    <dd>A summary or abstract of the document contents.</dd>
   <dt id="help" title=" A resource for users, and in particular those with disabilities, to learn methods of using the Web site more effectively " class="help"><a href="/about.php" rel="help" accesskey="6">Help</a></dt>
    <dd>A resource for users, and in particular those with disabilities, to learn methods of using the Web site more effectively.</dd>
   <dt id="home" title=" Defines the relationship of any link to the Web site root/start/entrance page " class="help"><a href="/" rel="home" accesskey="1">Home</a></dt>
    <dd>Defines the relationship of any link to the Web site root/start/entrance page.</dd>
   <dt id="keywords" title=" A comma separated list of keywords, terms or phrases that match the concepts and contents of the document " class="help">Keywords</dt>
    <dd>A comma separated list of keywords, terms or phrases that match the concepts and contents of the document.</dd>
   <dt id="license" title=" Defines the relationship between a resource and the URI to a document that contains licensing information for that resource " class="help"><a href="/xml/cc-license.rdf" title="Released under the Creative Commons License" rel="license">License</a></dt>
    <dd>Defines the relationship between a resource and the <?php echo $abbr['uri']; ?> to a document that contains licensing information for that resource.</dd>
   <dt id="meta" title=" Defines the relationship of an anchor or link to an external metadata resource such as an RDF " class="help">Meta</dt>
    <dd>Defines the relationship of an anchor or link to an external metadata resource such as an <?php echo $abbr['rdf']; ?>.</dd>
   <dt id="search" title=" A tool that allows visitors to search for available resources based on input keywords, terms or phrases " class="help">Search</dt>
    <dd>A tool that allows visitors to search for available resources based on input keywords, terms or phrases.</dd>
   <dt id="sitemap" title=" A navigation aid that allows visitors and software agents to locate links to any public resource on the Web site " class="help"><a href="/about.php" rel="sitemap" accesskey="3">Site Map</a></dt>
    <dd>A navigation aid that allows visitors and software agents to locate links to any public resource on the Web site.</dd>
   <dt id="tag" title=" Indicates to the referring resource that the referrer is establishing a keyword/category relationship " class="help">Tag</dt>
    <dd>Indicates to the referring resource that the referrer is establishing a keyword/category relationship.</dd>
   <dt id="updated" title=" The last updated date/timestamp of the document, in full readable en-US format, local time. See also the date relationship " class="help">Updated</dt>
    <dd>The last updated date/timestamp of the document, in full readable en-US format, local time. See also the date relationship.</dd>
   <dt id="validate" title=" Defines the relationship of an anchor or link to a validation resource with validation results pertaining to the referring resource " class="help">Validate</dt>
    <dd>Defines the relationship of an anchor or link to a validation resource with validation results pertaining to the referring resource.</dd>
  </dl>
  <p>
   <strong class="help" title=" 3AM Productions ">Author</strong>: 3AM Productions<br />
   <strong class="help" title=" The last updated date/timestamp of this XMDP ">Updated</strong>: <?php echo date('l, F jS, Y @ g:i A T',getlastmod()); ?>
   [<a href="http://w3.org/TR/NOTE-datetime" title=" W3C/ISO8601 Date/Time Spec "><?php echo date('c',getlastmod()); ?></a>]
  </p>
 </body>
</html>
