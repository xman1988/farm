<?php

namespace AChivkin\Farm\source;

/**
 * Родительский класс животных
 *
 */
abstract class Animal
{

    /**
     * @var string $id Индентификационный номер животного
     */
    public $animalId;

    /**
     * Метод присваивает уникальный ID животному
     */
    public function __construct()
    {
        $this->animalId = uniqid(php_uname('n'), true);
    }

    /**
     * Метод должен возвращать случайное число продуктов в заданном диапазоне
     * @return int
     */
    abstract public function getProducts():int;
}
