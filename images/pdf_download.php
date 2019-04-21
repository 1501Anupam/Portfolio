<?php
$file = $_GET["file"] .".pdf";
header("Content-Disposition: attachment; filename=" . urlencode($file));  
header("Content-Type: application/download");
readfile(urlencode($file));
?>