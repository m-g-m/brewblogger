<?php
/*
---------------------------------------------
Post-UI Conversion Pattern for public pages

$page
$section
$action (default to view)
$filter
$id

---------------------------------------------
Post-UI Conversion Pattern for admin pages
Match to public pages

$page
$section
$action (add, edit)
$filter (in place of $dbTable)
$id (for editing)

*/

// Begin Public

$page = $row_pref['home'];
if (isset($_GET['page'])) {
	$page = addslashes($_GET['page']);
}

$section = "default";
if (isset($_GET['section'])) {
	$section = addslashes($_GET['section']);
}

$filter = "all";
if (isset($_GET['filter'])) {
  	$filter = addslashes($_GET['filter']);
}

$id = "default";
if (isset($_GET['id'])) {
  	$id =  addslashes($_GET['id']);
}

$dbTable = "default";
if (isset($_GET['dbTable'])) {
  	$dbTable =  addslashes($_GET['dbTable']);
}

$action = "default";
if (isset($_GET['action'])) {
  	$action = addslashes($_GET['action']);
}

$style = "all";
if (isset($_GET['style'])) {
  	$style =  addslashes($_GET['style']);
}

$view = "limited";
if (isset($_GET['view'])) {
  	$view = addslashes($_GET['view']);
}

$source = "default";
if (isset($_GET['source'])) {
  	$source =  addslashes($_GET['source']);
}

$assoc = "default";
if (isset($_GET['assoc'])) {
  	$assoc =  addslashes($_GET['assoc']);
}

$confirm = "default";
if (isset($_GET['confirm'])) {
  	$confirm =  addslashes($_GET['confirm']);
}

$msg = "default";
if (isset($_GET['msg'])) {
  	$msg =  addslashes($_GET['msg']);
}

$calculate = "default";
if (isset($_GET['calculate'])) {
  	$calculate = addslashes($_GET['calculate']);
}

$results = "false";
if (isset($_GET['results'])) {
  	$results = addslashes($_GET['results']);
}

$reset = "default";
if (isset($_GET['reset'])) {
  	$reset =  addslashes($_GET['reset']);
}

$amt = "default";
if (isset($_GET['amt'])) {
  	$amt =  addslashes($_GET['amt']);
}

$colname_log = "-1";
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
	$colname_log =  addslashes($_GET['id']);
}

$sort = "brewDate";
if (isset($_GET['sort'])) {
  $sort =  addslashes($_GET['sort']);
}

$dir = "DESC";
if (isset($_GET['dir'])) {
  $dir =  addslashes($_GET['dir']);
}

$source = "reference";
if (isset($_GET['source'])) {
  $source =  addslashes($_GET['source']);
}

?>
