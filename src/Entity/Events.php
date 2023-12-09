<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_time_start = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $picture = null;

    #[ORM\Column]
    private ?int $capacity = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $phone_number = null;

    #[ORM\Column(length: 255)]
    private ?string $address_street = null;

    #[ORM\Column]
    private ?int $address_street_number = null;

    #[ORM\Column]
    private ?int $address_zipcode = null;

    #[ORM\Column(length: 255)]
    private ?string $address_city = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $extURL = null;

    #[ORM\ManyToOne]
    public ?EventType $fk_event_type = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDateTimeStart(): ?\DateTimeInterface
    {
        return $this->date_time_start;
    }

    public function setDateTimeStart(?\DateTimeInterface $date_time_start): static
    {
        $this->date_time_start = $date_time_start;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): static
    {
        $this->picture = $picture;

        return $this;
    }

    public function getCapacity(): ?int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): static
    {
        $this->capacity = $capacity;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number): static
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getAddressStreet(): ?string
    {
        return $this->address_street;
    }

    public function setAddressStreet(string $address_street): static
    {
        $this->address_street = $address_street;

        return $this;
    }

    public function getAddressStreetNumber(): ?int
    {
        return $this->address_street_number;
    }

    public function setAddressStreetNumber(int $address_street_number): static
    {
        $this->address_street_number = $address_street_number;

        return $this;
    }

    public function getAddressZipcode(): ?int
    {
        return $this->address_zipcode;
    }

    public function setAddressZipcode(int $address_zipcode): static
    {
        $this->address_zipcode = $address_zipcode;

        return $this;
    }

    public function getAddressCity(): ?string
    {
        return $this->address_city;
    }

    public function setAddressCity(string $address_city): static
    {
        $this->address_city = $address_city;

        return $this;
    }

    public function getExtURL(): ?string
    {
        return $this->extURL;
    }

    public function setExtURL(?string $extURL): static
    {
        $this->extURL = $extURL;

        return $this;
    }

    public function getFkEventType(): ?EventType
    {
        return $this->fk_event_type;
    }

    public function setFkEventType(?EventType $fk_event_type): static
    {
        $this->fk_event_type = $fk_event_type;

        return $this;
    }
}
