<?php

namespace Sorting;

/**
 * A sort manager handles user defined sorting of objects or value types. Make sure
 * that the objects or the values you want to sort have a total ordering, otherwise
 * the result of the methods is not specified.
 *
 * @package Sorting
 */
interface SortManagerInterface
{
    /**
     * Sort a list of values or objects by a given comparator.
     *
     * @param ComparatorInterface $comparator
     * @param array $list a possible unsorted list
     *
     * @return array the sorted list
     */
    public function sortWithComparator(ComparatorInterface $comparator, array $list);


    /**
     * Sort the list of objects by their natural order.
     *
     * @param Comparable[] $list
     *
     * @return array the sorted list
     */
    public function sortComparable(array $list);
}