<?php

namespace App\Entity;

use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperationRepository::class)
 */
class Operation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number1;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $sum;
    
    public function __construct($number1 = null, $number2 = null, $sum = null)
    {
        $this->number1 = $number1;
        $this->number2 = $number2;
        $this->sum = $sum;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber1(): ?int
    {
        return $this->number1;
    }

    public function setNumber1(?int $number1): self
    {
        $this->number1 = $number1;

        return $this;
    }

    public function getNumber2(): ?int
    {
        return $this->number2;
    }

    public function setNumber2(?int $number2): self
    {
        $this->number2 = $number2;

        return $this;
    }

    public function getSum(): ?int
    {
        return $this->sum;
    }

    public function setSum(?int $sum): self
    {
        $this->sum = $sum;

        return $this;
    }
}
