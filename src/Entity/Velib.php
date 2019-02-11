<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Velib
 *
 * @ORM\Table(name="velib")
 * @ORM\Entity(repositoryClass="App\Repository\VelibRepository")
 */
class Velib
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int|null
     *
     * @ORM\Column(name="station_id", type="integer", nullable=true)
     */
    private $stationId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=39, nullable=true)
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numBikesAvailable", type="integer", nullable=true)
     */
    private $numbikesavailable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_installed", type="integer", nullable=true)
     */
    private $isInstalled;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_renting", type="integer", nullable=true)
     */
    private $isRenting;

    /**
     * @var int|null
     *
     * @ORM\Column(name="numDocksAvailable", type="integer", nullable=true)
     */
    private $numdocksavailable;

    /**
     * @var int|null
     *
     * @ORM\Column(name="is_returning", type="integer", nullable=true)
     */
    private $isReturning;

    /**
     * @var string|null
     *
     * @ORM\Column(name="capacity", type="string", length=2, nullable=true)
     */
    private $capacity;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lon", type="string", length=18, nullable=true)
     */
    private $lon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=18, nullable=true)
     */
    private $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="xy", type="string", length=28, nullable=true)
     */
    private $xy;

    /**
     * @var int|null
     *
     * @ORM\Column(name="last_reported", type="integer", nullable=true)
     */
    private $lastReported;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStationId(): ?int
    {
        return $this->stationId;
    }

    public function setStationId(?int $stationId): self
    {
        $this->stationId = $stationId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumbikesavailable(): ?int
    {
        return $this->numbikesavailable;
    }

    public function setNumbikesavailable(?int $numbikesavailable): self
    {
        $this->numbikesavailable = $numbikesavailable;

        return $this;
    }

    public function getIsInstalled(): ?int
    {
        return $this->isInstalled;
    }

    public function setIsInstalled(?int $isInstalled): self
    {
        $this->isInstalled = $isInstalled;

        return $this;
    }

    public function getIsRenting(): ?int
    {
        return $this->isRenting;
    }

    public function setIsRenting(?int $isRenting): self
    {
        $this->isRenting = $isRenting;

        return $this;
    }

    public function getNumdocksavailable(): ?int
    {
        return $this->numdocksavailable;
    }

    public function setNumdocksavailable(?int $numdocksavailable): self
    {
        $this->numdocksavailable = $numdocksavailable;

        return $this;
    }

    public function getIsReturning(): ?int
    {
        return $this->isReturning;
    }

    public function setIsReturning(?int $isReturning): self
    {
        $this->isReturning = $isReturning;

        return $this;
    }

    public function getCapacity(): ?string
    {
        return $this->capacity;
    }

    public function setCapacity(?string $capacity): self
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getLon(): ?string
    {
        return $this->lon;
    }

    public function setLon(?string $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getXy(): ?string
    {
        return $this->xy;
    }

    public function setXy(?string $xy): self
    {
        $this->xy = $xy;

        return $this;
    }

    public function getLastReported(): ?int
    {
        return $this->lastReported;
    }

    public function setLastReported(?int $lastReported): self
    {
        $this->lastReported = $lastReported;

        return $this;
    }


}
