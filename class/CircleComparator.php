<?php


class CircleComparator implements Comparator
{
    public function comparer($obj1,$obj2)
    {
        if ($obj1->getRaius() > $obj2->getRadius()){
            return 1;
        }elseif ($obj1->getRaius() < $obj2->getRadius()){
            return -1;
        }else{
            return 0;
        }
    }
}