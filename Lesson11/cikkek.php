<?php
$bigHeader = false;
include 'pages/begin.php';

if (!isset($_GET['read'])) {
	echo '
	<h1>Legfrissebb hírek</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam blanditiis, reiciendis molestias voluptas accusamus, similique, cum fugit voluptatibus amet veritatis delectus dicta sed vero eligendi.</p>
	<ul class="articles">';

	$a = 1;
	$article = 'content/articles/article-' . $a . '.txt';

	while (is_file($article)) {
		$file = fopen($article, 'r');

		$title = trim(fgets($file));
		$intro = trim(fgets($file));
		$cover = trim(fgets($file));

		fclose($file);

		echo '<li>
			<img src="content/articles/' . $cover . '">
			<div class="info">
				<h4>' . $title . '</h4>
				<p>' . $intro . '</p>
				<a href="" class="btn">Elolvasom</a>
			</div>
		</li>';

		$a++;
		$article = 'content/articles/article-' . $a . '.txt';
	}

	echo '
	</ul>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus sit dolorem ipsam deserunt temporibus quis in eum, ratione repudiandae, eveniet dolore dolor autem quia reiciendis. Rerum hic minus aut laboriosam eligendi nam, maiores deserunt corrupti.</p>
';
} else {
	$a = $_GET['read'];
	$article = 'content/articles/article-' . $a . '.txt';

	if (!is_file($article)) {
		$file = fopen($article, 'r');

		$title = trim(fgets($file));
		$intro = trim(fgets($file));
		$cover = trim(fgets($file));

		echo '<article>
			<h1>' . $title . '</h1>
			<p><strong>' . $intro . '</strong></p>
			<img src="content/articles/' . $cover . '">
		';

		$line = fgets($file);
		while (!feof($file)) {
			echo '<p>' . $line . '</p>';
			$line = fgets($file);
		}

		echo '</article>';
		
		fclose($file);
	}
}


include 'pages/end.php'; ?>