<?php
$out = shell_exec("/usr/bin/git pull origin 2>&1");
var_dump($out);
?>
