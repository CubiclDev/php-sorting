<?php

namespace Cubicl\Sorting;

/**
 * A sort manager handles user defined sorting of objects or value types. Make sure
 * that the objects or the values you want to sort have a total ordering, otherwise
 * the result of the methods is not specified.
 */
interface SortManagerInterface
{
    /**
     * Sort a list of values or objects by a given comparator.
     *
     * @phpstan-template T
     * @param ComparatorInterface $comparator
     * @param array<T> $list a possible unsorted list
     *
     * @return array<T> the sorted list
     */
    public function sortWithComparator(ComparatorInterface $comparator, array $list): array;


    /**
     * Sort the list of objects by their natural order.
     *
     * @param Comparable[] $list
     *
     * @return Comparable[] the sorted list
     */
    public function sortComparable(array $list): array;
}