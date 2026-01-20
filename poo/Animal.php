<?php

class Animal
{
    public function __construct(
        protected string $nombre,
        protected int $edad
    ) {}
    public function getNombre(): string
    {
        return $this->nombre;
    }   
    public function getEdad(): int
    {
        return $this->edad;
    }
    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }
    public function setEdad(int $edad): void
    {
        $this->edad = $edad;
    }
    public function __toString(): string
    {
        return "Nombre: " . $this->nombre . ", Edad: " . $this->edad;
    }   
}