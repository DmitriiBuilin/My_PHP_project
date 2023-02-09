<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач - Task</title>
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
            cursor: pointer;
        }
        .input-task {
            margin: 0 10px;
            height: 28px;
        }
        .btn-done {
            background-color: green;
            margin: 0 0 0 25px;
            padding: 2px 5px;
        }
        .btn-home {
            display: block;
            margin-top: 40px;
            width: 47px;
        }
        .tasks-list {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>
    <header></header>
    <main>
        <?php if (isset($_SESSION['user'])): ?>
            <div style="display:flex">
                <h1>Пользователь:_</h1>
                <h1><?= $_COOKIE['username']?></h1>
            </div>
            <form method="post" style="display: flex;">
                <label for="newTask">Новая задача:
                    <input class="input-task" id="newTask" name="task" type="text" placeholder="Опишите задачу">
                </label>                
                <button class="button">Добавть</button>
            </form>
            
            <div>
                <h3>Список задач:</h3>
                <?= TaskProvider::getUndoneList($tasks); ?>                    
            </div>
        <?php else: ?>
            <h3>Вы не авторизованы, выполните вход.</h3>
            <a class="button" href="?controller=security">Вход</a>
        <?php endif; ?>  
        <a style="background-color: white; color: black;" class="button btn-home" href="?controller=home">Домой</a>
    </main>
</body>
</html>

<!-- <?php
    ?><br /><p>$_GET</p><?php
    var_dump($_GET);    
    ?><br /><p>$_POST</p><?php
    var_dump($_POST);
    ?><br /><p>$_REQUEST</p><?php
    var_dump($_REQUEST);        
    ?><br /><p>$_SESSION</p><?php
    var_dump($_SESSION);
    ?><br /><p>$_COOKIE</p><?php
    var_dump($_COOKIE);

?> -->

