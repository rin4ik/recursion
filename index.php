<?php


function scan($dir, $tab)
{
    $d = opendir($dir);
    while (false !== ($name = readdir($d))) {

        if ($name == '.' or $name == '..') continue;
        if (is_dir($dir . '/' . $name)) {
            echo "<b>{$tab}[{$name}]</b><br>";
            scan($dir . '/' . $name, $tab . "&nbsp;&nbsp;&nbsp;&nbsp;");
        } else {
            echo "{$tab}{$name}<br>";
        }
    }
    closedir($d);
}

scan('folder', '');
