<?php

$myfile = fopen("text.txt", "w");

$txt = "John\n";

fwrite($myfile, $txt);

fclose($myfile);