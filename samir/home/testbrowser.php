<?php
$beer = 'Heineken';
echo "$beer's taste is great"."<br/>"; // works, "'" is an invalid character for varnames
echo "He drank some $beers"."<br/>";   // won't work, 's' is a valid character for varnames
echo "He drank some ${beer}s"."<br/>"; // works
echo "He drank some {$beer}s"."<br/>"; // works
?> 