<?php
$q=$_GET["q"];
$xml=simplexml_load_file("\links.xml");
foreach ($xml->channel->item as $item) {
    $title = (string) $item->title; // Title Post
    $link   = (string) $item->link; // Url Link	
$strpos = strpos($title, $q);
if($strpos == TRUE){
echo "<a href='".$link;
echo "'>";
echo $title;
echo "</a><br/>";	
}
}
?>
