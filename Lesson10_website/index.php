<?php 
$bigHeader = true;
include 'pages/begin.php'; 
?>
			
<article>
    <h1>Bemutatkozunk</h1>

    <p><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod natus distinctio error esse eligendi. Magnam ad, quam nisi quasi ipsum asperiores temporibus nulla, dolorum nam libero repellat sint iusto! Quisquam quis sit blanditiis voluptate dolore.</strong></p>

    <img src="res/img/picture1.jpg" alt="Munkahelyi értekezlet a nagy asztalnál">

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, assumenda quod eveniet officiis quae, quo consequuntur, rerum libero perferendis, voluptate iure? Maxime, consequatur! Delectus reprehenderit iusto minus voluptas soluta ullam dolor hic esse repellat tempora rem beatae porro totam nobis possimus, dolores sapiente laboriosam. Natus maxime ut eligendi quibusdam quis.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit, voluptate cum. Laudantium consequuntur expedita tempora animi. Dolor nulla eum repellat a, sed reprehenderit earum esse itaque, eaque ipsam assumenda distinctio quaerat ab? A placeat aspernatur eaque veniam fugit itaque provident voluptate asperiores, ad illum? Odit aut hic, consectetur rerum iste accusamus tempora sed magnam consequatur delectus incidunt quo similique. Minus, ex dolorum provident explicabo! Suscipit enim, fugiat totam consequatur at et reiciendis itaque adipisci?</p>
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
