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
		<div>
			<div class="article">
				<h3><?=$article['title']?></h3>
				<em><?=$article['date']?></em>
				<p><?=$article['content']?></p>
			</div>
		</div>
		<footer>
			<p>футер</p>
		</footer>
	</div>
</body>
</html>