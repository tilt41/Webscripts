<?php
echo "<h1>This is a test page from ".gethostname()." </h1>";
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i; 
    echo "+ (".$i.")\n"; 
}

echo "=\n[".$sum."]\n"; 
echo "<h1>If this opens correctly </h1>"."\n"."<h1>and adds variables to 55</h1>"." \n"."<h1>then PHP5 has been successfully installed.</h1>\n\n"
?>
Below is the script used to output what you see above.<br><br>


<?php
highlight_string('<?php
echo "<h1>This is a test page from ".gethostname()." </h1>";
$sum = 0;
for ($i = 1; $i <= 10; $i++) {
    $sum += $i; 
    echo "+ (".$i.")\n"; 
}

echo "=\n[".$sum."]\n"; 
echo "<h1>If this opens correctly </h1>"."\n"."<h1>and adds variables to 55</h1>"." \n"."<h1>then PHP5 has been successfully installed.</h1>\n\n"
?>');
?>
