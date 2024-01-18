<?php include 'pages/functions.php'; ?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company honlap</title>
    <link rel="stylesheet" href="res/style.css">
</head>
<body>
	<header>
		
		<div class="interaction">
			
			<a href="index.html" class="logo">
				<img src="res/img/logo.png" alt="Company logo"> 
			</a>
			
			<nav>
				<ul><?php printMenu(); ?></ul>
			</nav>
			
		</div>
		<div class="inside">
			
<?php if($bigHeader): ?>
			<div class="info">
	<?php

	$header = 
	[
		[
			'title' => 'Csatlakozz hozzánk!',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
			'btn' => 'Csatlakozom'
		],
		[
			'title' => 'Vedd meg mind!',
			'text' => 'Ipsum dolor sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
			'btn' => 'Megveszem'
		],
		[
			'title' => 'Kér tőlünk ajánlatot!',
			'text' => 'Dolor sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
			'btn' => 'Ajánlatkérés'
		],
		[
			'title' => 'Látogass el hozzánk!',
			'text' => 'Sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
			'btn' => 'Megtekint'
		]
	];
	$r = rand(0, count($header) - 1);

	$title = $header[$r]['title'];
	$text = $header[$r]['text'];
	$btn = $header[$r]['btn'];

	echo '<h3>'. $title .'</h3><p>'. $text .'</p><a href="" class="btn">'. $btn .'</a>';

	?>
			</div>
			
			<div class="cover">
				<img src="res/img/header.png" alt="Illusztráció: irodai munka">
			</div>
<?php endif; ?>

		</div>
		
	</header>

	<main>
		<div class="inside">