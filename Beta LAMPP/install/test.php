
<?php
	/*
	#### Installer PHP  1.5 ####
	#### Author: Kay Vogelgesang & Carsten Wiedmann for www.apachefriends.org 2005 ####
	*/

	/// Where I stand? ///
	$curdir = getcwd();
	list($partition, $nonpartition) = preg_split ("/:/", $curdir); //Fix by Wiedmann
	$partwampp = substr(realpath(__FILE__), 0, strrpos(dirname(realpath(__FILE__)), '\\'));
	$directorwampp = NULL;
	$awkpart = str_replace("&", "\\\\&", eregi_replace ("\\\\", "\\\\", $partwampp)); //Fix by Wiedmann
	$awkpartslash = str_replace("&", "\\\\&", ereg_replace ("\\\\", "/", $partwampp)); //Fix by Wiedmann
	$phpdir = $partwampp;
	$dir = ereg_replace("\\\\", "/", $partwampp);
	$ppartition = "$partition:";

	/// I need the install.sys + update.sys for more lampp informations
	$installsys = "install.sys";
	$installsysroot = $partwampp."\install\\".$installsys;

	/// Some addon|update.sys files
	$perlupdatesys = "perlupdate.sys";
	$pythonupdatesys = "pythonupdate.sys";
	$serverupdatesys = "serverupdate.sys";
	$utilsupdatesys = "utilsupdate.sys";
	$javaupdatesys = "javaupdate.sys";
	$otherupdatesys = "otherupdate.sys";

	/// lampp main directrory is ...
	$substit = "\\\\\\\\lampp";
	$substitslash = "/lampp";

	/// Globale variables
	$BS = 0;
	$CS = 0;
	$slashi = 1;
	$bslashi = 1;
	$awkexe = ".\install\awk.exe";
	$awk = ".\install\config.awk";
	$awknewdir = "\"".$awkpart."\"";
	$awkslashdir = "\"".$awkpartslash."\"";
	if (file_exists("$partwampp\htdocs\\lampp\.version")) {
	$handle = fopen("$partwampp\htdocs\\lampp\.version","r");
  $lamppversion = fgets($handle);
  fclose($handle);
	} else {
		$lamppversion = "";
    // include_once "$partwampp\install\.version";
  }
	
	echo "\r\n  ########################################################################\n";
	echo "  # ApacheFriends lampp setup win32 Version                              #\r\n";
	echo "  #----------------------------------------------------------------------#\r\n";
	echo "  # Copyright (c) 2002-2009 Apachefriends $lamppversion                          #\r\n";
	echo "  #----------------------------------------------------------------------#\r\n";
	echo "  # Authors: Kay Vogelgesang <kvo@apachefriends.org>                     #\r\n";
	echo "  #          Carsten Wiedmann <webmaster@wiedmann-online.de>             #\r\n";
	echo "  ########################################################################\r\n\r\n";

?>