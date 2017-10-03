<?php
// Directory containing related post div files
$dir = '../../post-con/';
// Begin array of files
$files = array();
// For Each item in the directory as a $FILE...
foreach (scandir($dir) as $file) {
    // IF the file is the same page the user is on, skip it and keep looping
    if ($file === $thisPage) continue;
    // If they are hidden or system files, skip them and keep looping
    if ('..' === $file) continue;
    if ('.' === $file) continue;
    // Otherwise, the files array is the array of files found in the loop.
    else {
        $files[] = $file;
    } // END ELSE
} // END FOREACH

// Amount of posts in the directory
$posts = count($files)-1;
// Random number 1
$rnd1 = rand(0,$posts);
  // Get...
  do {  
    // Random number 2 ...
    $rnd2 = rand(0,$posts);
  }
  // While the numbers are different
  while ($rnd1 == $rnd2);

// Lastly, return 2 random values of the array as include statements with the full file path
return array(include $dir.$files[$rnd1], include $dir.$files[$rnd2]);
?>