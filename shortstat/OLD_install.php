<?php
/******************************************************************************
 ShortStat : Short but Sweet
 Installation
 v0.36b
 
 Created: 	04.03.04
 Updated:	04.11.15
 
 By:		Shaun Inman
 			http://www.shauninman.com/
 ******************************************************************************

 Please see the READ_ME.txt file for installation instructions.

 ******************************************************************************/
include_once("configuration.php");
include_once("functions.php");

SI_pconnect();

$SI_optional_install_txt = "<p></p>";

// First we see if this database has already been installed
if (@mysql_query("SELECT * FROM $SI_tables[stats]") || @mysql_query("SELECT * FROM $SI_tables[searchterms]")) {
	echo "<p>The necessary tables already exist. This file should be removed from your server.</p>";
	}
// If not we do it to it...
else {
	$query = "CREATE TABLE $SI_tables[stats] (
			  id int(11) unsigned auto_increment NOT NULL,
			  remote_ip varchar(15) NOT NULL,
			  country varchar(50) NOT NULL,
			  language VARCHAR(5) NOT NULL,
			  domain varchar(255) NOT NULL,
			  referer varchar(255) NOT NULL,
			  resource varchar(255) NOT NULL,
			  user_agent varchar(255) NOT NULL,
			  platform varchar(50) NOT NULL,
			  browser varchar(50) NOT NULL,
			  version varchar(15) NOT NULL,
			  dt int(10) unsigned NOT NULL default '0',
			  UNIQUE KEY id (id)
			  ) TYPE=MyISAM";
			  
	$query_search = "CREATE TABLE $SI_tables[searchterms] (
			  id int(11) unsigned auto_increment NOT NULL,
			  searchterms varchar(255) NOT NULL,
			  count int(10) unsigned NOT NULL default '0',
			  PRIMARY KEY  (id)
			  ) TYPE=MyISAM;";
	if (@mysql_query($query) && @mysql_query($query_search)) {
		echo "<p>The necessary tables have been created successfully! Now remove this file from your server.</p>";
		}
	else {
		echo "<p>The necessary tables could not be created. I know, I know, this isn't a very helpful error message...</p>";
		}
	}
?>
