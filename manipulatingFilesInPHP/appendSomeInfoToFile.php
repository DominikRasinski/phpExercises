<?php

$myfile = "text.txt";

$appendInfo = fopen($myfile, "a");

fwrite($appendInfo, "\nDupa");

fclose($appendInfo);