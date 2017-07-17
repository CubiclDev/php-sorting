<?php

namespace Sorting;

/**
 * Class SortManager
 *
 * @package Sorting
 */
class SortManager implements SortManagerInterface
{
    /**
     * @inheritdoc
     */
    public function sortWithComparator(ComparatorInterface $comparator, array $list)
    {
        usort($list, [$comparator, 'compare']);

        return $list;
    }

    /**
     * @inheritdoc
     */
    public function sortComparable(array $list)
    {
        usort(
            $list,
            function(Comparable $a, Comparable $b) {
                return $a->compareTo($b);
            }
        );

        return $list;
    }
}