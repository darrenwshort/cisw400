<html>
  <head><title>Search Course Requirements - CRC Web Programming Certificate</title></head>
<body>

<?php

// text file contains excerpt from CRC catalog
$file = 'crc-webprogramming-cert-req.txt';

// open file for reading
$fh = fopen($file, "r");
  
  
$course = "";
$courses = array();
  
  
// loop through catalog excerpt, extracting course info.
while(($line = fgets($fh)) !== false)
{
  // extract course from catalog excerpt and fill $courses arr.
  if(preg_match('/^(CIS.?|BUS)\s+(\d\d\d)\s+(.*)$/', $line, $matches))
  {
    $course = $matches[1] . " " . $matches[2] . ": " . $matches[3];
    $courses[] = $course; // append course to courses list
  }
}
  
// get the c parameter from URL
if(isset($_GET['c']) && $_GET['c'] != "")
{
  $c = $_GET['c'];
}
else { echo "Nothing passed to GET!"; }

$suggestion = "";

// lookup all hints from $courses array if $c is different from ""
if ($c !== "") {
  $c = strtolower($c);
  $len = strlen($c);
  foreach($courses as $courseinfo) {
    if (stristr($c, substr($courseinfo, 0, $len))) {
      if ($suggestion === "") {
        $suggestion = $courseinfo;
      } else {
        $suggestion .= "<br /> $courseinfo";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $suggestion === "" ? "no suggestion" : $suggestion;
?>
</body>
</html>