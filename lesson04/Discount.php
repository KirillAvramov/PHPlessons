<?php


class Discount
{

    private $forSaleDisc = 0;
    private $personDisc = 0;

    /**
     * @return int
     */
    public function getPersonDisc(): int
    {
        return $this->personDisc;
    }

    /**
     * @return int
     */
    public function getForSaleDisc(): int
    {
        return $this->forSaleDisc;
    }

    public function setSaleDisc(int $disc)
    {
        $this->forSaleDisc = $disc;
    }

    public function setPersonDisc(int $disc)
    {
        $this->personDisc = $disc;
    }
}