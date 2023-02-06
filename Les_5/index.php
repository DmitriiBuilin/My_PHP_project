<?php

// 1. Разработайте класс Task, выполняющий ответственность обычной задачи Todo-списка. Класс должен содержать приватные свойства description, dateCreated, dateUpdated, dateDone, priority (int), isDone (bool) и обязательное user (User). В качестве класса пользователя воспользуйтесь разработанным на уроке. Класс Task должен содержать все необходимые для взаимодействия со свойствами методы (getters, setters). При вызове метода setDescription обновляйте значение свойства dateUpdated. Разработайте метод markAsDone, помечающий задачу выполненной, а также обновляющий свойства dateUpdated и dateDone.

// 2. Реализуйте два класса: Comment и TaskService. Comment должен содержать свойства author (User), task (Task) и text (string). TaskService должен реализовывать статичный метод addComment(User, Task, text), добавляющий к задаче комментарий пользователя. Отношение между классами задачи и комментария должны быть построены по типу ассоциация, поэтому необходимо добавить соответствующее свойство и методы классу Task.

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