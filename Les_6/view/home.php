
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач</title>
    <style>
        .button {
            text-decoration: none;
            padding: 5px 20px;
            border: 1px solid black;
            color: white;           
            background-color: grey;
        }

        .button:hover {
            box-shadow: 1px 3px 6px black;
        }
    </style>
</head>
<body>
    <header>     
    </header>
    <main>
        <?php if (isset($_SESSION['user'])): ?>
            <div style="display:flex">
                <h1>Пользователь:_</h1>
                <h1><?= $username?></h1>
            </div>
            <a class="button" href="?controller=task">Планировщик задач</a>
            <a style="background-color: white; color: black;" class="button" href="?action=logout">Выход</a>
        <?php else: ?>
            <h3>Выполните авторизацию</h3>
            <a class="button" href="?controller=security">Вход</a>
        <?php endif; ?>   
    </main>

</body>
</html>
