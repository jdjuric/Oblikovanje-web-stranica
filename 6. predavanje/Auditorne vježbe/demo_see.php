<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: Vrijeme servera je: {$time}\n\n";
flush();
?> 