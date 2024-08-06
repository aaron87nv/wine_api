<?php

namespace App\Entity;

use App\Repository\MeasurementRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MeasurementRepository::class)]
class Measurement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $year = null;

    #[ORM\Column]
    private ?int $sensor_id = null;

    #[ORM\Column]
    private ?int $wine_id = null;

    #[ORM\Column(length: 255)]
    private ?string $color = null;

    #[ORM\Column]
    private ?float $temperature = null;

    #[ORM\Column]
    private ?float $alcoholContent = null;

    #[ORM\Column]
    private ?float $ph = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): static
    {
        $this->year = $year;

        return $this;
    }

    public function getSensorId(): ?int
    {
        return $this->sensor_id;
    }

    public function setSensorId(int $sensor_id): static
    {
        $this->sensor_id = $sensor_id;

        return $this;
    }

    public function getWineId(): ?int
    {
        return $this->wine_id;
    }

    public function setWineId(int $wine_id): static
    {
        $this->wine_id = $wine_id;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(string $color): static
    {
        $this->color = $color;

        return $this;
    }

    public function getTemperature(): ?float
    {
        return $this->temperature;
    }

    public function setTemperature(float $temperature): static
    {
        $this->temperature = $temperature;

        return $this;
    }

    public function getAlcoholContent(): ?float
    {
        return $this->alcoholContent;
    }

    public function setAlcoholContent(float $alcoholContent): static
    {
        $this->alcoholContent = $alcoholContent;

        return $this;
    }

    public function getPh(): ?float
    {
        return $this->ph;
    }

    public function setPh(float $ph): static
    {
        $this->ph = $ph;

        return $this;
    }
}
