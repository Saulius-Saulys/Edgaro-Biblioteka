<?php

namespace App;

use DateTime;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    const TAKEN = 'taken';
    const AVAILABLE = 'available';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $status;

    /**
     * @var DateTime
     */
    private $reservationTime;

    /**
     * @var Library
     */
    private $library;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return $this
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
    }

    /**
     * @return Library
     */
    public function getLibrary(): Library
    {
        return $this->library;
    }

    /**
     * @param Library $library
     * @return $this
     */
    public function setLibrary(Library $library): self
    {
        $this->library = $library;
    }

    /**
     * @return float|null
     */
    public function getRate(): ?float
    {
        return $this->rate;
    }

    /**
     * @param float|null $rate
     * @return $this
     */
    public function setRate(?float $rate): self
    {
        $this->rate = $rate;
    }

    /**
     * @return DateTime
     */
    public function getReservationTime(): DateTime
    {
        return $this->reservationTime;
    }

    /**
     * @param DateTime $reservationTime
     * @return $this
     */
    public function setReservationTime(DateTime $reservationTime): self
    {
        $this->reservationTime = $reservationTime;
    }


}
