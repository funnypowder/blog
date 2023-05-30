<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>news</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="">
        <h1>Мой блог</h1>
        <div>
            <a href="index.php?action=add">Добавить статью</a>
            <table>
                <tr>
                    <th>Дата</th>
                    <th>Заголовой</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                    </td>
                    <td>
                        <a href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
</body>
</html>