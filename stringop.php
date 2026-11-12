<?php
// 1. Concatenation
$part1 ="coding in";
$part2 ="php programming";
$fulltext = $part1 . $part2;
echo"1.Combined Text:".$fulltext."<br>";
// 2. Case Conversion
$uppertext =strtoupper($fulltext);
echo "2. Uppercase ext:".$uppertext."<br>";
// 3. String Length
$length = strlen($uppertext);
echo "3.Total Characters:".$length ."<br>";
// 4. Word Position

$position = strpos($uppertext,"PHP");
echo "4.Position of 'PHP':".$position."<br>";
// 5. Substring Extraction
$extractedword = substr($uppertext, 10, 11);
echo "5.extracted word:".$extractedword."<br>";
?>