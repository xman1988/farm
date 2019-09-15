<?php

namespace AChivkin\Farm\source;

/**
 * Класс коровы
 *
 */
class Cow extends Animal
{

    /**
     * @var integer MIN_MILK_LITERS минимальное количество производимого коровой молока
     */
    private const MIN_MILK_LITERS = 8;

    /**
     * @var integer MAX_MILK_LITERS максимальное количество производимого коровой молока
     */
    private const MAX_MILK_LITERS = 12;


    /**
     * Метод должен возвращать случайное количество литров молока в заданном диапазоне
     *
     * @return int
     * @throws \Exception
     */
    public function getProducts(): int
    {
        return random_int(self::MIN_MILK_LITERS, self::MAX_MILK_LITERS);
    }
}