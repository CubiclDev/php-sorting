<?php

namespace Cubicl\Sorting;

/**
 * Interface ComparatorInterface
 *
 * @package Cubicl\Sorting
 */
interface ComparatorInterface
{
    /**
     * @param mixed $a
     * @param mixed $b
     *
     * @return int
     */
    public function compare($a, $b);
}