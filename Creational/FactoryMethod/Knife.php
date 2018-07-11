<?php

abstract class Knife
{
    /**
     * @return string
     * @author Ahmed Samir <ahmed.samir@tajawal.com>
     */
    abstract function getName(): string ;

    /**
     * @return string
     * @author Ahmed Samir <ahmed.samir@tajawal.com>
     */
    public function cut(): string
    {
        return "Cutting with knife {$this->getName()}";
    }
}