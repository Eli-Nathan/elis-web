<?php
$dir = 'post-con';
foreach (glob($dir . "/*.php", GLOB_NOSORT) as $filename)
{
    include $filename;
}
?>