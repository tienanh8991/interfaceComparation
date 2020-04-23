<?php
include 'interface/Comparable.php';
include "class/Circle.php";
include 'interface/Comparator.php';
include 'class/CircleComparator.php';
$circle1 = new Circle('Circle 1', 10);
$circle2 = new Circle('Circle 2', 5);
if ($circle1->compareTo($circle2) == 1) {
    echo $circle1->getName() . ' > ' . $circle2->getName();
}
if ($circle1->compareTo($circle2) == -1) {
    echo $circle1->getName() . ' < ' . $circle2->getName();
}
if ($circle1->compareTo($circle2) == 0) {
    echo $circle1->getName() . ' = ' . $circle2->getName();
}
echo '<hr>';
$circleComparator = new CircleComparator();
if ($circleComparator->comparer($circle1, $circle2) == 1) {
    echo $circle1->getName() . ' lon hon ' . $circle2->getName();
}
if ($circleComparator->comparer($circle1, $circle2) == -1) {
    echo $circle1->getName() . ' nho hon ' . $circle2->getName();
}
if ($circleComparator->comparer($circle1, $circle2) == 0) {
    echo $circle1->getName() . ' bang ' . $circle2->getName();
}