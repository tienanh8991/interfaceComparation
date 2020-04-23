<?php


class Circle implements Comparable
{
    protected $name;
    protected $radius;

    public function __construct($name,$radius)
    {
        $this->name = $name;
        $this->radius = $radius;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
    public function compareTo($obj)
    {
        if ($this->getRadius() > $obj->getRadius()){
            return 1;
        }elseif ($this->getRadius() < $obj->getRadius()){
            return -1;
        }else{
            return 0;
        }
    }
}