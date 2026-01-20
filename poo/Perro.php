<?php

declare(strict_types=1);
class Perro extends Animal
{
    const ESPECIE = "Canis lupus familiaris";   
    public function __construct(
        private string $raza,
        private int $numChip,
        private string $sexo
    ) {}

    //GETTERS - Observadores

    public function getRaza(): string
    {
        return $this->raza;
    }
    public function getNumChip(): int
    {
        return $this->numChip;
    }
    public function getSexo(): string
    {
        return $this->sexo;
    }

    //SETTERS - Modificadores
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
    public function setRaza(string $raza): void
    {
        $this->raza = $raza;
    }
    public function setNumChip(int $numChip): void
    {
        $this->numChip = $numChip;
    }
    public function setSexo(string $sexo): void
    {
        $this->sexo = $sexo;
    }

    public function ladrar(): string
    {
        return "¡Guau! ¡Guau!";
    }


    public function __toString(): string
    {
        return "Nombre: " . $this->nombre . ", Edad: " . $this->edad . ", Raza: " . $this->raza . ", Número de Chip: " . $this->numChip . ", Sexo: " . $this->sexo;
    }







}

