<?php 
$a = array(
           "2010-05-03",
          "2010-05-04",   
           "2008-05-01",
          "2011-01-01"
     ); 
$min_key = array_search(min($a), $a);
$max_key = array_search(max($a), $a);
echo "<pre>";
print_r($a);
echo "=========================================================";
print_r($a[$min_key]);
echo "=========================================================";
print_r($a[$max_key]);	 
?>