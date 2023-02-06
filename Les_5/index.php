<?php

// Доработайте механизм авторизации. Разместите на главной странице кнопку “Войти”, отображаемую только если пользователь не авторизован. Перенесите логику “Выхода” в SecurityController. Сделайте отображение ссылки “Выйти” только для тех случаев, если пользователь авторизован в системе;

// Разработайте страницу работы с задачами TODO-списка, доступную только авторизованным пользователям. Подготовьте отдельный файл представления (view), контроллер (TaskController) и два класса модели: TaskProvider и сущность Task. В сущности Task реализуйте свойства isDone (bool) и description (string). В TaskProvider разработайте два метода: getUndoneList – для получения списка невыполненных задач и addTask для добавления. Сохраняйте задачи в сессию авторизованного пользователя. В файле представления выведите список текущих задач с кнопкой выполнения (используйте тег <a> с передачей GET-параметров), а также подготовьте форму для их добавления.

echo '------------- Запускаем скрипт -------------';
?>
<br>
<?php
require_once 'task.php';
require_once 'user.php';

$user = new User('Pikachu', 'mail@mail.com');
$task = new Task($user, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1);
$task->setDescription('Lorem ipsum dolor');
$task->markAsDone();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Планировщик задач</title>
</head>
<body>
    <header style="display:flex">
    <h1>Пользователь:_</h1>
    <h1>
        <?= $user->getUsername()?>
    </h1>
    </header>
    <main>
        <div style="display:flex">
            <h3>Задача:_</h3>
            <h3>
                <?= $task->getDescription()?>
            </h3>
        </div>
        <div style="display:flex">
            <p>Приоритет:_</p>
            <p>
                <?= $task->getPriority()?>
            </p>
        </div> 
        <div style="display:flex">
            <p>Дата обновления:_</p>
            <p>
                <?= $task->getDateUpdated()?>
            </p>
        </div>                 
    </main>

</body>
</html>