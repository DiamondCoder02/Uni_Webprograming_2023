<?php 
$bigHeader = true;
include 'pages/begin.php'; 
?>	

<article>
	<h1>Bemutatkozunk</h1>
<?php

$intro = file_get_contents('content/home-intro.txt');
$img = 'home.jpg';
$text = file_get_contents('content/home-text.txt');

echo '<p><strong>'. $intro .'</strong></p>
	<img src="content/'. $img .'">
	<p>'. nl2br($text) .'</p>';

?>
</article>
			
<?php 

$items = 
[
	"Mert mi vagyunk a világon a legjobbak",
	"Mert nálunk soha senki nem lesz jobb",
	"Mert csak, meg különben is, mit ugatsz",
	"Mert aki engem bakter, kapja be a fater",
	"Mert a hazug embert hamarabb utolérik, mint a traktort"
];

echo '<section><h3>Miért érdemes minket választani?</h3><ul>';

foreach($items as $str)
{
	echo '<li>'. $str .'</li>';
}
/*for($i = 0; $i < count($items); $i++){ echo '<li>'. $items[$i] .'</li>'; }*/
echo '</ul></section>';

include 'pages/end.php'; 
?>	