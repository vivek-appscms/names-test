<?php

 for($i= 0; $i< 50000;$i++){
    echo $i; echo "\n-------\n";
   $txt = "---\nlayout: test\npermalink: '$i'\n---";
   file_put_contents("pages/$i.md", $txt)or die("Unable to create markdown file!");
 }

?>