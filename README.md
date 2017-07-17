Sorting Module
==============

Implementation of a generic sorting system with an interface definition compatible
to the [Comparable RFC](https://wiki.php.net/rfc/comparable).

## Usage

You have two possible options. Depending on your use case you can implement the
`Sorting\Comparable` interface or use a comparator.

```php
<?php

// with a comparable
$orderedList = $sortManager->sortComparable($unorderedListOfComparable);

// or with a comparator
$orderedList = $sortManager->sortWithComparator($comparator, $unorderedList);
```