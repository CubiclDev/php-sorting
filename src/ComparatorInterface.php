<?php

namespace Sorting;

/**
 * Interface ComparatorInterface
 *
 * @package Sorting
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