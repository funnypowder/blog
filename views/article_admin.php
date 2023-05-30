<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Мой блог</h1>
        <div>
            <form enctype="multipart/form-data" action="../admin/index.php?action=<?=$_GET['action']?>&id=<?=$article['id']?>" method="post">
                <label>
                    Название
                    <input type="text" name="title" value="<?=$article['title']?>" class="form-item" autofocus required>
                </label>
                <label>
                    дата
                    <input type="date" name="date" value="<?=$article['date']?>" class="form-item" required>
                </label>
                <label>
                    Содержимое
                    <textarea name="content" id="" cols="30" rows="10" required><?=$article['content']?></textarea>
                </label>
                <label for="image">Изображение</label>
                <input type="file" name="image" id="image">
                <input type="submit" value="Сохранить" class="btn">
            </form>
        </div>
    </div>
</body>
</html>