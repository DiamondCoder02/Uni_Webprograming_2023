<?php
$bigHeader = false;
include 'pages/begin.php'; 
?>	
			
<h1>Legfrissebb hírek</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>

<ul class="articles">
<?php

$x = 1;
$fileName = 'content/articles/article-'. $x .'.txt';

while(is_file($fileName))
{
	$file = fopen($fileName, 'r');

	$title = trim(fgets($file));
	$intro = trim(fgets($file));
	$cover = trim(fgets($file));

	echo '<li>
			<img src="content/articles/'. $cover .'" alt="">
			<div class="info">
				<h4>'. $title .'</h4>
				<p>'. $intro .'</p>
				<a href="" class="btn">Elolvasom</a>
			</div>
		</li>';

	fclose($file);
	
	$x++;
	$fileName = 'content/articles/article-'. $x .'.txt';
}

?>

</ul>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sit dolorem ipsam deserunt temporibus quis in eum, ratione repudiandae, eveniet dolore dolor autem quia reiciendis. Rerum hic minus aut laboriosam eligendi nam, maiores deserunt corrupti.</p>

<?php include 'pages/end.php'; ?>	