<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>news</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div>
		<h1>Мой первый сайт</h1>
		<a href="admin">Админка</a>
		<div>
			<?php foreach($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
				<em><?=$a['date']?></em>
				<p><?=articles_intro($a['content'])?></p>
			</div>
			<?php endforeach ?>
		</div>
		<footer>
			<p>футер</p>
		</footer>
	</div>
</body>
</html>