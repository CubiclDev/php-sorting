<?php

namespace Cubicl\Sorting;

class SortManager implements SortManagerInterface
{
    /**
     * @inheritdoc
     */
    public function sortWithComparator(ComparatorInterface $comparator, array $list): array
    {
        usort($list, [$comparator, 'compare']);

        return $list;
    }

    /**
     * @inheritdoc
     */
    public function sortComparable(array $list): array
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