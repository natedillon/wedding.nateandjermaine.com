<?php
// -----------------------------------------------------------
// E-mail Encryption Script
//
// Original Javascript encryption taken from the Email Riddler
// http://www.dynamicdrive.com/emailriddler
//
// Converted to PHP by Karl Sickendick
// Modified by Nate Dillon
// -----------------------------------------------------------

function encode($address, $link_text = "", $link_title = "", $subject = "") {
	// Test for an address that will cause an error
	if(strlen($address) < 2) {
		return;
	}
	
	$link  = "<a href=\"mailto:{$address}";
	if($subject != "") {
		$link .= "?subject={$subject}\"";
	} else {
		$link .= "\"";
	}
	if($link_title != "") {
		$link .= " title=\"{$link_title}\"";
	}
	$link .= ">";
	if($link_text != "") {
		$link .= $link_text;
	} else {
		$link .= $address;
	}
	$link .= "</a>";

	// Help make random javascript var names so there is no collision
	$randNumb = rand(1000, 9999);
	$origInt = ord($link[0]);

	// Turn the email address into a javascript array of ASCII codes
	$jsIntArray = "var emailArray{$randNumb}{$origInt}=new Array(";
	for($i = 0; $i < strlen($link); $i++ ) {
		if($i != 0) {
			$jsIntArray .= ",";
		}
		$myInt = ord($link[$i]);
		$jsIntArray .= "$myInt";
	}
	$jsIntArray .= ")\n";

	// Output the Javascript that outputs the HTML
	echo "<script type=\"text/javascript\">\n";
	echo "<!--\n";
	echo $jsIntArray;
	echo "var postemail{$randNumb}{$origInt}=''\n";
	echo "for (i=0;i < emailArray{$randNumb}{$origInt}.length;i++)\n";
	echo "postemail{$randNumb}{$origInt}+=String.fromCharCode(emailArray{$randNumb}{$origInt}[i])\n";
	echo "document.write(postemail{$randNumb}{$origInt})\n";
	echo "-->\n";
	echo "</script>";
}
?>
