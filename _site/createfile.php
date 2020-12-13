<?php

 for($i= 0; $i< 100000;$i++){
   $txt = "---\nlayout: test\npermalink: '$i'\n---";
   file_put_contents("pages/$i.md", $txt)or die("Unable to create markdown file!");
 }

?>