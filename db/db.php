<?php
mb_internal_encoding("UTF-8");
error_reporting(E_ALL ^  E_NOTICE); 

if (file_exists(stream_resolve_include_path('config.php'))) {
	include_once('config.php');
}
else if (file_exists(stream_resolve_include_path('config.sample.php'))) {
	include_once('config.sample.php');
}

// Database Connections
if ($enable_stats == true) { 
	$stats_db = new SQLite3('db/lan.db');
};

if ($enable_faq == true) { 
	$faq_db = new SQLite3('db/faq.db');
};
 
if ($enable_competition == true) { 
	$competition_db = new SQLite3('db/competition.db');
};

?>