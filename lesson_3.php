 <?php

// 1. Подготовьте два массива одинаковой размерности, но не менее 10 элементов, с произвольными числовыми значениями. Разработайте скрипт для запуска из командной строки, выполняющий перемножение элементов двух массивов и выводящий результат в консоль с помощью print_r. Умножение должно выполняться только между элементами соответствующих индексов, то есть нулевой элемент первого массива умножается на нулевой элемент второго массива;

// 2. Разработайте скрипт для запуска из командной строки, генерирующий персонализированные поздравления с днём рождения.
// Подготовьте два массива: в первом храните пожелания (счастья, здоровья и т.д.), во втором эпитеты (бесконечного, крепкого и т.д.). При запуске запросите имя именинника и после ввода сгенерируйте текст поздравления, включающий три пожелания. Комбинации эпитетов и пожеланий должны быть случайными. В результате необходимо получить строку, по следующему примеру: «Дорогой Илон Маск, от всего сердца поздравляю тебя с днем рождения, желаю космического терпения, бесконечного здоровья и безудержного воображения!». Для реализации используйте функции array_rand и implode;

// 3. Подготовьте многомерный ассоциативный массив следующего вида:
// $students = [
//    'ИТ20' => [
//        'Иванов Иван' => 5,
//        'Кириллов Кирилл' => 3
//    ],
//    'БАП20' => [
//        'Антонов Антон' => 4
//    ]
// ];
// В качестве ключей массива используются названия групп. В качестве элементов — отношение студента и его оценки. Добавьте произвольные имена студентов и их оценки в обе группы. После подготовки массива, реализуйте скрипт командной строки, выполняющий следующие вычисления:
// Вычислить арифметическое среднее по всем оценкам в рамках группы. Вывести на экран название группы с самым большим вычисленным значением успеваемости;
// Составить список на отчисление, в который попадают студенты из любой группы, имеющие оценку ниже трёх. В списке студенты должны быть сгруппированы по их группе. Выведите полученные данные в консоль, с помощью функции print_r;


// ------------- Задание №1 -------------

$array_1 = [21, 12, 3, 4, 8, 11, 2, 0, 17, 1];
$array_2 = [100, 5, -3, 10, 2, 14, -7, 1438, 4, 69];

// Решение 1

foreach ($array_1 as $el ) {
    $index = array_search($el, $array_1);
    $multipli_1[] = $el * $array_2[$index];
}

print_r ($multipli_1);

// Решение 2

$multipli_2 = array_map(function ($el_1, $el_2) {
    return $el_1 * $el_2;
}, $array_1, $array_2);

print_r ($multipli_2);

// -------------  Задание №2 -------------

$wishes = ['счастья', 'здоровья', 'терпения', 'богатсва', 'могущества', 'везения', 'настроения'];
$epithets = ['бесконечного', 'крепкого', 'космического', 'безудержного', 'волшебного', 'неземного', 'великого'];

$name = readline("Enter your name: ");

// Решение 1

for ($i = 1; $i <= 3; $i++) {
    $congrats[] = $epithets[array_rand($epithets, 1)];
    $congrats[] = $wishes[array_rand($wishes, 1)];
}

echo "Дорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ", implode(" ", $congrats), "!";

// Решение 2, что бы поставить знаки припинания в нужном месте

$congrats_1[] = $epithets[array_rand($epithets, 1)];
$congrats_1[] = $wishes[array_rand($wishes, 1)];
$congrats_2[] = $epithets[array_rand($epithets, 1)];
$congrats_2[] = $wishes[array_rand($wishes, 1)];
$congrats_3[] = $epithets[array_rand($epithets, 1)];
$congrats_3[] = $wishes[array_rand($wishes, 1)];

echo "\nДорогой $name, от всего сердца поздравляю тебя с днем рождения, желаю ", implode(" ", $congrats_1);
echo " ,", implode(" ", $congrats_2);
echo " ,", implode(" ", $congrats_3);
echo "!";

// ------------- Задание №3 -------------

$groups = [
    "Инженеры" => [
        "Иванов Иван" => 3,
        "Петров Петр" => 2,
        "Сидоров Сидор" => 5

    ],
    "Технологи" => [
        "Сергеев Сергей" => 5,
        "Дмитриев Дмитрий" => 5,
        "Алексеев Алексей" => 4,
        "Святославов Святослав" => 4
    ],
    "Экономисты" => [
        "Миронов Мирон" => 5,
        "Викторов Виктор" => 5

    ],
    "Неудачники" => [
        "Николаев Николай" => 3,
        "Кузьмин Кузьма" => 4,
        "Давидов Давид" => 5,
        "Александров Александр" => 2
    ],
];


foreach ($groups as $group) {
    $sum = 0;
    foreach ($group as $student => $grade) {
        $sum += $grade; 
        if ($grade < 3) {
            echo "\n";
            $allocation[] = $student;
        }
    };
    $average[] = $sum / count($group);
};

$index = array_search(max($average), $average);
echo "\nЛучшая группа на потоке: ";
print_r (array_keys($groups)[$index]);
echo "\nСписок на отчисление: \n";
print_r ($allocation);
