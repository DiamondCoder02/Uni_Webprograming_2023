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

$features = 
[
	'Mert mi vagyunk a világon a legjobbak',
	'Mert nálunk a Földön senki sem jobb',
	'Mert amúgy meg ne szójjá be!',
	'Mert több jót már nem tudok mondani magunkról',
	'Mert csak úgy, meg úgyhogy, meg különben'
];
			
echo '<section><h3>Miért érdemes minket választani?</h3><ul>';
foreach($features as $item)
{
	echo '<li>'. $item .'</li>';
}
/*for($i = 0; $i < count($features); $i++){ echo '<li>'. $features[$i] .'</li>'; }*/
echo '</ul></section>';
			
include 'pages/end.php'; 
?>
