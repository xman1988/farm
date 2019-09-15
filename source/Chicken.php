<?php

namespace AChivkin\Farm\source;


/**
 * Класс курицы
 *
 */
class Chicken extends Animal
{
    /**
     * @var integer MIN_EGGS_AMOUNT минимальное количество яиц производимого курицей
     */
    private const MIN_EGGS_AMOUNT = 0;

    /**
     * @var integer MAX_EGGS_AMOUNT максимальное количество яиц производимого курицей
     */
    private const MAX_EGGS_AMOUNT = 1;

    /**
     * Метод  возвращает случайное число яиц в заданном диапазоне
     *
     * @return int
     * @throws \Exception
     */

    public function getProducts(): int
    {
        return random_int(self::MIN_EGGS_AMOUNT, self::MAX_EGGS_AMOUNT);
    }
}
