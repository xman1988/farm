<?php

namespace AChivkin\Farm;

require_once __DIR__ . '/autoload.php';

use AChivkin\Farm\source\CoteOne;

/**
 * Файл запуска приложения "Ферма".
 * Приложение создает хлев, создает в нем животных, регистрирует их,
 * собирает произведенную животными продукцию и выводит информацию на экран.
 *
 *
 * Создём хлев
 */

$coteObj = new CoteOne;

/**
 * Регистрируем животных
 */
$coteObj->registerAnimals([
    'cow' => 10,
    'chicken' => 20
]);

/**
 * Собираем продукцию
 */
$coteObj->collectProducts();

/**
 * Выводим на экран информацию о собранной продукции
 */

echo 'Собрано литров молока : ' . $coteObj->products['cow'] . "\n" .
    'Собрано штук яиц : ' . $coteObj->products['chicken'];
