<?php
/*
 * Created on Apr 4, 2006
 *
 * Jason Karns
 * CSE 694K/651
 * Lab0
 * 
 */
// following code uses output buffereing and gzip compression
ob_start ('ob_gzhandler');
header('Content-type: text/javascript; charset: UTF-8');
header('Cache-Control: must-revalidate');
$offset = 60 * 60 * 24 * 30;
$ExpStr = "Expires: " .
gmdate('D, d M Y H:i:s',
time() + $offset) . ' GMT';
header($ExpStr);

// generate dictionary
// (outerloop aa-zz + middleloop 0-9 + innerloop aa-zz)
for($aa = 'aa'; $aa <= 'zz' and (strlen($aa) < 3); $aa++){
	for($n = 0; $n < 10; $n++){
		for($bb = 'aa'; $bb <= 'zz' and (strlen($bb) < 3); $bb++){
			echo "$aa$n$bb\n";}}}
?>
