<?php
/*
	Easyform developer edition 
	version 1.0 01.05.2003
	written by Chris Heilmann
	more info: http://www.onlinetools.org/articles/easyform/
	
	modified by Nate Dillon
	version 1.0 - 2006.04.26
	http://www.natedillon.com/

	--------
	 Notes:
	--------
	For radio buttons, id and value must be the same.
	For checkboxes, id and name must be the same, and the value must be omitted.
	For textareas, id and name must be different.
	
	-----------
	 Problems:
	-----------
	Radio buttons do not work as required fields.
*/

function check() {
	if ($_POST != '') {
		$sentarray = array();
		$tocheck = explode(',', $_POST['required']);
		$error[0] = "Errors:";
		foreach ($tocheck as $t) {
			if(!array_key_exists($t, $_POST)) { 
				$error[] = $t;
			}
		}
		foreach (array_keys($_POST) as $p) {
			if(!preg_match('/initvalue/', $p) and !preg_match('/required/', $p)) {
				$sentarray[$p] = $_POST[$p] == $_POST[$p . 'initvalue']?'':$_POST[$p];
			}
			foreach ($tocheck as $c) {
				if ($p == $c and $sentarray[$p] == '') {
					$error[] = $_POST[$p . 'initvalue'];
				}
			}
		}
		return $error[1] == ''?$sentarray:$error;	
	}
}

function add($f) {
	global $errorindicator,$errorclass,$Javascript,$showvalues;
	$tocheck = explode(',', ',' . $_POST['required']);
	preg_match('/id="(.*?)"/i', $f, $i);
	preg_match('/name="(.*?)"/i', $f, $n);
	preg_match('/type="(.*?)"/i', $f, $t);
	preg_match('/value="(.*?)"/i', $f, $iv);
	$n = $n[1];
	$iv = $iv[1];
	$i = str_replace('_', ' ', $i[1]);
	if(preg_match('/<textarea/', $f)) {
		$v = $_POST[$n] == ''?$i:$_POST[$n];
		// Check to see if initial field values should be shown in textareas
		if($showvalues) {
			$f = preg_replace('/<textarea(.*?)>(.*?)<\/textarea>/', '<textarea\\1>' . stripslashes(htmlentities($v)) . '</textarea>', $f);
		} else if($i != stripslashes(htmlentities($v))) {
			$f = preg_replace('/<textarea(.*?)>(.*?)<\/textarea>/', '<textarea\\1>' . stripslashes(htmlentities($v)) . '</textarea>', $f);
		}
		if($Javascript) {
			$f = preg_replace('/<textarea/', '<textarea onfocus="this.value=this.value==\'' . $i . '\'?\'\':this.value"', $f);
		}
	}	
	if(preg_match('/<select/', $f)) {
		preg_match('/<select.*?>/', $f, $st);
		preg_match_all('/<option value="(.*?)">(.*?)<\/option>/', $f, $allopt);
		foreach ($allopt[0] as $k => $a) {
			if($_POST[$n] == $allopt[1][$k] || ($_POST[$n] == '' && $k == 0)) {
				$preg  = '/<option value="';
				$preg .= $allopt[1][$k] . '">' . $allopt[2][$k] . '<\/option>/si';
				$rep  = '<option selected="selected" value="';
				$rep .= $allopt[1][$k] . '">' . $allopt[2][$k] . '</option>';
				$f = preg_replace($preg, $rep, $f);
			}
		}
	} else {
		switch ($t[1]) {
			case 'text':
				// Check to see if initial field values should be shown in text fields
				if($showvalues) {
					$v = $_POST[$n] == ''?'value="' . $i . '"':'value="' . stripslashes(htmlentities($_POST[$n])) . '"';
				} else {
					$v = $_POST[$n] == ''?'value=""':'value="' . stripslashes(htmlentities($_POST[$n])) . '"';
				}
				$f = preg_replace('/<input/','<input ' . $v, $f);
				if($Javascript) {
					$f = preg_replace('/<input/', '<input onfocus="this.value=this.value==\'' . $i . '\'?\'\':this.value"', $f);
				}
			break;
			case 'checkbox':
				$v = $_POST[$n] == 'on'?' checked="checked"':'';
				$f = preg_replace('/<input/', '<input' . $v, $f);
			break;
			case 'radio':
				$f = $_POST[$n]==''?$f:preg_replace('/checked.*?\s/','',$f);
				// old code replaced by code above
				// $f = preg_replace('/checked.*?\s/', '', $f);
				$v = $_POST[$n] == $iv?' checked="checked"':'';
				$f = preg_replace('/<input/', '<input' . $v, $f);
			break;
		}
	}
	$f .= '<input type="hidden" name="' . $n . 'initvalue" value="' . $i . '" />';
	if (array_search($n, $tocheck) and ($_POST[$n] == '' or $_POST[$n] == $i)) {
		if($errorindicator != '') {
			$f = $errorindicator . $f;
		}
		if($errorclass !='' ) {
			$f = preg_replace('/name=/i', 'class="' . $errorclass . '" name=', $f);
		}
	}
	return $f;
}
?>
