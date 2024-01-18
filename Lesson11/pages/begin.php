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
				<ul>
					<?php printMenu(); ?>
				</ul>
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
            'button' => 'Csatlakozom'
        ],
        [
            'title' => 'Kérj tőlünk ajánlatot!',
            'text' => 'Ipsum dolor sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
            'button' => 'Ajánlatkérés'
        ],
        [
            'title' => 'Add nekünk a pénzed!',
            'text' => 'Dolor sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
            'button' => 'Utalok'
        ],
        [
            'title' => 'Gyere hozzánk dógzani!',
            'text' => 'Sit amet, consectetur adipisicing elit. Atque perspiciatis velit placeat tempora aliquid dolorem quisquam vero ea consequatur ut numquam cupiditate, sequi, pariatur dolores?',
            'button' => 'Jövök!'
        ]
    ];          
    $r = rand(0, count($header) - 1);

    echo '<h3>'. $header[$r]['title'] .'</h3>
        <p>'. $header[$r]['text'] .'</p>
        <a href="" class="btn">'. $header[$r]['button'] .'</a>';

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