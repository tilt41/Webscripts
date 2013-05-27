<?php
$dir = opendir('files/'); 
while ($read = readdir($dir)) 
{
if ($read!='.' && $read!='..') 
{ 
echo '<center><li><a href="files/'.$read.'"target="_blank"><FONT COLOR="#0196e3">'.$read.'</a></li></center>'; 
}
}
closedir($dir); ?>
